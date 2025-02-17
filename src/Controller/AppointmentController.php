<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Repository\AppointmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/appointment', name: 'app_appointment')]
    public function index(): Response
    {
        return $this->render('appointment/index.html.twig');
    }

    #[Route('/details/{id}', name: "appointment_details")]
    public function appointmentDetails(AppointmentRepository $repo, $id): Response
    {
        $appointment = $repo->find($id);

        if (!$appointment) {
            throw $this->createNotFoundException("Aucun rendez-vous trouvé pour l'ID: $id");
        }

        return $this->render('appointment/showAppointment.html.twig', [
            "appointment" => $appointment
        ]);
    }

    #[Route('/listAppointments', name: "list_appointments")]
    public function listAppointments(AppointmentRepository $repo): Response
    {
        $appointments = $repo->findAll();

        return $this->render("appointment/listAppointments.html.twig", [
            "list" => $appointments
        ]);
    }

    #[Route('/add', name: 'add_appointment')]
    public function add(ManagerRegistry $manager, Request $request, EntityManagerInterface $em): Response
    {
        $em = $manager->getManager();
        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($appointment);
            $em->flush();
            $this->addFlash('success', 'Rendez-vous ajouté avec succès.');
            return $this->redirectToRoute('list_appointments');
        }
        
        return $this->render('appointment/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/appointment/edit/{id}', name: 'appointment_edit')]
    public function edit(Request $request, Appointment $appointment, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Rendez-vous modifié avec succès.');

            return $this->redirectToRoute('list_appointments');
        }

        return $this->render('appointment/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/appointment/delete/{id}', name: 'appointment_delete', methods: ['POST'])]
    public function delete(Request $request, Appointment $appointment, EntityManagerInterface $em): Response
    {
        if (!$appointment) {
            throw $this->createNotFoundException("Le rendez-vous demandé n'existe pas.");
        }

        if ($this->isCsrfTokenValid('delete' . $appointment->getId(), $request->request->get('_token'))) {
            $em->remove($appointment);
            $em->flush();
            $this->addFlash('success', 'Rendez-vous supprimé avec succès.');
        }

        return $this->redirectToRoute('list_appointments');
    }
}
