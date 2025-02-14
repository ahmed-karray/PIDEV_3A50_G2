<?php

namespace App\Controller;

use App\Entity\Pharmacie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

final class PharmacieController extends AbstractController{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        
        return $this->render('base.html.twig',[
            'controller_name'=>'PharmacieController',
        ]);
    }
    #[Route('/pharmacie', name: 'app_pharmacie')]
    public function listph(EntityManagerInterface $entityManager): Response
    {
        $pharmacies = $entityManager->getRepository(Pharmacie::class)->findAll();
        // Encode the logo for each pharmacy
        foreach ($pharmacies as $pharmacie) {
            if ($pharmacie->getLogo()) {
                $logoData = stream_get_contents($pharmacie->getLogo());
                $pharmacie->logoBase64 = base64_encode($logoData); // Add a new property for the base64-encoded logo
            }
        }
        return $this->render('pharmacie/index.html.twig', [
            'pharmacies' => $pharmacies,
        ]);
    }
}
