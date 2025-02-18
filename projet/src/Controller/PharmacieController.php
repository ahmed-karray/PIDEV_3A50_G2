<?php

namespace App\Controller;

use App\Entity\Pharmacie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PharmacieType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

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
    #[Route('/pharmacie/list', name: 'listph')]
    public function listbackph(EntityManagerInterface $entityManager): Response
    {
        $pharmacies = $entityManager->getRepository(Pharmacie::class)->findAll();
        // Encode the logo for each pharmacy
        foreach ($pharmacies as $pharmacie) {
            if ($pharmacie->getLogo()) {
                $logoData = stream_get_contents($pharmacie->getLogo());
                $pharmacie->logoBase64 = base64_encode($logoData); // Add a new property for the base64-encoded logo
            }
        }
        return $this->render('pharmacie/list.html.twig', [
            'pharmacies' => $pharmacies,
            
        ]);
    }

    
    #[Route('/pharmacie/add', name: 'addph')]
    public function ajouter(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pharmacie = new Pharmacie();
        $form = $this->createForm(PharmacieType::class, $pharmacie);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $logoFile = $form->get('logo')->getData();
    
            if ($logoFile) {
                // Open file and read binary content
                $logoBinary = file_get_contents($logoFile->getPathname());
    
                // Check if binary data was read
                if ($logoBinary === false) {
                    throw new \Exception('Error reading the uploaded file.');
                }
    
                // Store binary data in the entity
                $pharmacie->setLogo($logoBinary);
            }
    
            $entityManager->persist($pharmacie);
            $entityManager->flush();
    
            $this->addFlash('success', 'La pharmacie a été ajoutée avec succès.');
    
            return $this->redirectToRoute('listph');
        }
    
        return $this->render('pharmacie/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/pharmacie/supprimer/{id}', name: 'supprimer_pharmacie', methods: ['POST'])]
    public function supprimer(Pharmacie $pharmacie, EntityManagerInterface $entityManager): RedirectResponse
    {
        // Supprimer la pharmacie de la base de données
        $entityManager->remove($pharmacie);
        $entityManager->flush();

        // Ajouter un message flash pour confirmer la suppression
        $this->addFlash('success', 'La pharmacie a été supprimée avec succès.');

        // Rediriger vers la liste des pharmacies
        return $this->redirectToRoute('listph');
    }

    #[Route('/pharmacie/edit/{id}', name: 'editph')]
public function modifier(Request $request, EntityManagerInterface $entityManager, Pharmacie $pharmacie): Response
{
    // Convert the logo from a resource to a string
    $logoBase64 = null;
    if ($pharmacie->getLogo()) {
        $logoBinary = stream_get_contents($pharmacie->getLogo()); // Convert resource to string
        if ($logoBinary !== false) {
            $logoBase64 = base64_encode($logoBinary); // Encode as base64
        }
    }

    $form = $this->createForm(PharmacieType::class, $pharmacie);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Handle file upload
        $logoFile = $form->get('logo')->getData();

        if ($logoFile) {
            // Read file as binary
            $logoBinary = file_get_contents($logoFile->getPathname());
            if ($logoBinary === false) {
                throw new \Exception('Error reading the uploaded file.');
            }
            $pharmacie->setLogo($logoBinary);
        }

        $entityManager->flush();

        $this->addFlash('success', 'La pharmacie a été modifiée avec succès.');

        return $this->redirectToRoute('listph');
    }

    return $this->render('pharmacie/edit.html.twig', [
        'form' => $form->createView(),
        'pharmacie' => $pharmacie,
        'logoBase64' => $logoBase64, // Pass the base64-encoded logo to the template
    ]);
}
}
