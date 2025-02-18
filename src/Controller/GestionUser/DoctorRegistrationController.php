<?php
// src/Controller/DoctorRegistrationController.php

namespace App\Controller\GestionUser;

use App\Entity\User;
use App\Form\GestionUser\DoctorRegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DoctorRegistrationController extends AbstractController
{
    #[Route('/register/doctor', name: 'doctor_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        Security $security,
        MailerInterface $mailer,
        UrlGeneratorInterface $urlGenerator
    ): Response {
        // Block authenticated users from accessing the registration page
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
            return new RedirectResponse($this->generateUrl('home'));
        }

        $user = new User();
        $form = $this->createForm(DoctorRegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash the plain password and set it on the entity
            $user->setPassword(
                $passwordHasher->hashPassword($user, $user->getPlainPassword())
            );
            // Set role for doctor
            $user->setRoles(['ROLE_DOCTOR']);

            // Handle diploma upload if provided
            $diplomaFile = $form->get('diploma')->getData();
            if ($diplomaFile) {
                $newFilename = uniqid() . '.' . $diplomaFile->guessExtension();
                try {
                    $diplomaFile->move(
                        $this->getParameter('diploma_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Optionally handle file upload errors here
                }
                // Save the relative URL (or path) to the diploma field
                $user->setDiploma('assets/diplomas/' . $newFilename);
            }

            // Generate and set verification token
            $verificationToken = bin2hex(random_bytes(32));
            $user->setVerificationToken($verificationToken);
            $user->setIsVerified(false);

            $entityManager->persist($user);
            $entityManager->flush();

            // Create verification email
            $verificationUrl = $urlGenerator->generate(
                'verify_email',
                ['token' => $verificationToken],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            $email = (new Email())
                ->from('your_email@gmail.com')
                ->to($user->getEmail())
                ->subject('Please Verify Your Email Address')
                ->html(
                    $this->renderView('gestion_user/registration/verification_email.html.twig', [
                        'verificationUrl' => $verificationUrl,
                        'user' => $user,
                    ])
                );

            $mailer->send($email);

            $this->addFlash('success', 'Registration successful. Please wait for account verification.');
            return $this->redirectToRoute('login');
        }

        return $this->render('gestion_user/registration/doctor_register.html.twig', [
            'doctorRegistrationForm' => $form->createView(),
        ]);
    }
}
