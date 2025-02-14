<?php

namespace App\Controller;

use App\Entity\Medicament;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MedicamentRepository;

final class MedicamentController extends AbstractController{
    #[Route('/medicament', name: 'app_medicament')]
    public function index(): Response
    {
        return $this->render('medicament/index.html.twig', [
            'medicaments' => 'MedicamentController',
        ]);
    }
    #[Route('/listmed', name: 'listmed')]
    public function listmed(EntityManagerInterface $entityManager): Response
    {
        $medicaments = $entityManager->getRepository(Medicament::class)->findAll();
        
        foreach ($medicaments as $medicament) {
            if ($medicament->getImageurl()) {
                $medicament->base64Image = 'data:image/jpeg;base64,' . base64_encode(stream_get_contents($medicament->getImageurl()));
            }
        }
        
        return $this->render('medicament/index.html.twig', [
            'medicaments' => $medicaments,
        ]);
    }
    

}
