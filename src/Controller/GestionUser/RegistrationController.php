<?php

namespace App\Controller\GestionUser;

use App\Entity\User;
use App\Form\GestionUser\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Psr\Log\LoggerInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register/patient', name: 'patient_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, Security $security, MailerInterface $mailer, UrlGeneratorInterface $urlGenerator): Response
    {
        // Block authenticated users
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
            return new RedirectResponse($this->generateUrl('home'));
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword($user, $user->getPlainPassword())
            );

            // Generate and set verification token
            $verificationToken = bin2hex(random_bytes(32));
            $user->setVerificationToken($verificationToken);
            $user->setIsVerified(false);

            // Set role for patient
            $user->setRoles(['ROLE_PATIENT']);

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

            return $this->redirectToRoute('login');
        }

        return $this->render('gestion_user/registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify/{token}', name: 'verify_email')]
    public function verifyEmail(string $token, EntityManagerInterface $entityManager, LoggerInterface $logger): Response
    {
        $logger->info('Verification token received: ' . $token);
        $user = $entityManager->getRepository(User::class)->findOneBy(['verificationToken' => $token]);

        if (!$user) {
            $logger->error('Invalid verification token: ' . $token);
            $this->addFlash('error', 'Invalid verification token.');
            return $this->redirectToRoute('login');
        }

        $logger->info('User found: ' . $user->getEmail());
        $user->setIsVerified(true);
        $user->setVerificationToken(null);

        $entityManager->persist($user);
        $entityManager->flush();

        $logger->info('User verified: ' . $user->getEmail());
        $this->addFlash('success', 'Your email has been verified successfully. You can now log in.');

        return $this->redirectToRoute('login');
    }
}
