<?php

namespace App\Controller\GestionUser;

use App\Form\GestionUser\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{

    #[Route('/profile', name: 'user_profile')]
    public function index(): Response
    {
        return $this->render('gestion_user/profile/profile.html.twig');
    }


    #[Route('/profile/edit', name: 'user_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $em): Response
    {
        // Retrieve the currently logged in user.
        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        // Create the form with the is_edit option set to true.
        $form = $this->createForm(RegistrationFormType::class, $user, ['is_edit' => true]);
        $form->handleRequest($request);

        // Debug (optional): dump form errors if not valid.
        if ($form->isSubmitted() && !$form->isValid()) {
            dump($form->getErrors(true));
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Profile updated successfully!');
            return $this->redirectToRoute('user_profile');
        }

        return $this->render('gestion_user/profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
