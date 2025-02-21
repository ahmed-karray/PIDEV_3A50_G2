<?php

namespace App\Controller\GestionEvent;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // Correct import for Request
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Correct import for Route annotation


final class EventController extends AbstractController
{   
    #[Route('/front_event', name: "front_event")]
    public function listEvent(EventRepository $repo): Response
    {
        $event = $repo->findAll();

        return $this->render("GestionEvents/event/front_event.html.twig", [
            "events" => $event
        ]);
    }
    #[Route('/event/list', name: "list")]
    public function listEvents(EventRepository $repo): Response
    {
        $event = $repo->findAll();

        return $this->render("admin/GestionEvents/event/list.html.twig", [
            "list" => $event
        ]);
    }
    #[Route('/event', name: 'app_event_add')]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($event);
            $em->flush();
            $this->addFlash('success', 'evenement ajouté avec succès.');
            return $this->redirectToRoute('list');
        }

        return $this->render('admin/GestionEvents/event/index.html.twig', ['form' => $form->createView()]);
    }
    #[Route('/event/edit/{id}', name: 'edit')]
    public function edit(Request $request, Event $event, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Evenement modifié avec succès.');

            return $this->redirectToRoute('list');
        }

        return $this->render('admin/GestionEvents/event/edit.html.twig', [
            'form' => $form->createView(),
            'event' => $event,
        ]);
    }
    #[Route('/event/delete/{id}', name: 'delete')]
    public function delete(Event $event, EntityManagerInterface $em): Response
    {
        $em->remove($event);
        $em->flush();
        $this->addFlash('success', 'Événement supprimé avec succès.');
    
        return $this->redirectToRoute('list');
    }
}
