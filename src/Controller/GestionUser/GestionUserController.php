<?php
// src/Controller/GestionUserController.php

namespace App\Controller\GestionUser;

use App\Entity\User;
use App\Form\GestionUser\RegistrationFormType;
use App\Form\GestionUser\DoctorRegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class GestionUserController extends AbstractController
{
    #[Route('/admin/user', name: 'gestion_user')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();
        return $this->render('admin/gestion_user/user.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/registration-choice', name: 'admin_registration_choice')]
    public function registrationChoice(): Response
    {
        return $this->render('admin/gestion_user/registration_choice.html.twig');
    }

    #[Route('/admin/user/create/{type}', name: 'admin_create_user')]
    public function create(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        string $type
    ): Response {
        $user = new User();
        // Choose the form based on the type (doctor or patient)
        if ($type === 'doctor') {
            $form = $this->createForm(DoctorRegistrationFormType::class, $user);
        } else {
            $form = $this->createForm(RegistrationFormType::class, $user);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordHasher->hashPassword($user, $user->getPlainPassword())
            );

            // Generate a verification token if necessary
            $verificationToken = bin2hex(random_bytes(32));
            $user->setVerificationToken($verificationToken);
            // For admin-created users, auto-verify them
            $user->setIsVerified(true);

            // Set role according to type
            if ($type === 'doctor') {
                $user->setRoles(['ROLE_DOCTOR']);
                // Handle diploma upload if provided (for the doctor form)
                $diplomaFile = $form->get('diploma')->getData();
                if ($diplomaFile) {
                    $newFilename = uniqid() . '.' . $diplomaFile->guessExtension();
                    try {
                        $diplomaFile->move(
                            $this->getParameter('diploma_directory'),
                            $newFilename
                        );
                    } catch (\Exception $e) {
                        // Handle the error if necessary
                    }
                    $user->setDiploma('assets/diplomas/' . $newFilename);
                }
            } else {
                $user->setRoles(['ROLE_PATIENT']);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'User created successfully.');
            return $this->redirectToRoute('gestion_user');
        }

        // Render different templates based on the type
        if ($type === 'doctor') {
            return $this->render('admin/gestion_user/create_doctor.html.twig', [
                'doctorRegistrationForm' => $form->createView(),
            ]);
        } else {
            return $this->render('admin/gestion_user/create_patient.html.twig', [
                'registrationForm' => $form->createView(),
            ]);
        }
    }

    #[Route('/admin/user/{id}/edit', name: 'admin_edit_user')]
    public function edit(
        Request $request,
        User $user,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        // Check if the user has the role ROLE_DOCTOR
        if (in_array('ROLE_DOCTOR', $user->getRoles())) {
            $form = $this->createForm(DoctorRegistrationFormType::class, $user, [
                'is_edit' => true,
                'validation_groups' => ['Default'],
            ]);
            $template = 'admin/gestion_user/edit_doctor.html.twig';
        } else {
            $form = $this->createForm(RegistrationFormType::class, $user, [
                'is_edit' => true,
                'validation_groups' => ['Default'],
            ]);
            $template = 'admin/gestion_user/edit_patient.html.twig';
        }

        $form->remove('plainPassword');
        $form->add('plainPassword', \Symfony\Component\Form\Extension\Core\Type\PasswordType::class, [
            'required' => false,
            'label' => 'Mot de passe (laisser vide si inchangé)',
            'attr' => ['class' => 'form-control'],
            'mapped' => true,
            'constraints' => [],  // no constraints here
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($user->getPlainPassword()) {
                $user->setPassword(
                    $passwordHasher->hashPassword($user, $user->getPlainPassword())
                );
            }
            $entityManager->flush();
            $this->addFlash('success', 'User updated successfully.');
            return $this->redirectToRoute('gestion_user');
        }

        return $this->render($template, [
            'userForm' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/admin/user/{id}/delete', name: 'admin_delete_user', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
            $this->addFlash('success', 'User deleted successfully.');
        } else {
            $this->addFlash('error', 'Invalid CSRF token.');
        }

        return $this->redirectToRoute('gestion_user');
    }
}
