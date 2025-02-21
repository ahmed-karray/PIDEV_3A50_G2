<?php

namespace App\Controller\GestionPlanning;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\PlanningRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/planning')]
class PlanningController extends AbstractController
{
    #[Route('/', name: 'planning_index', methods: ['GET'])]
    public function index(PlanningRepository $planningRepository): Response
    {
        // Assuming getUser() returns the logged in doctor.
        $doctor = $this->getUser();
        $plannings = $planningRepository->findBy(['doctor' => $doctor]);

        return $this->render('GestionPlanning/planning/index.html.twig', [
            'plannings' => $plannings,
        ]);
    }

    #[Route('/new', name: 'planning_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $doctor = $this->getUser();
        $planning = new Planning();
        $planning->setDoctor($doctor);

        $form = $this->createForm(PlanningType::class, $planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($planning);
            $em->flush();

            return $this->redirectToRoute('planning_index');
        }

        return $this->render('GestionPlanning/planning/new.html.twig', [
            'planning' => $planning,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}', name: 'planning_show', methods: ['GET'])]
    public function show(Planning $planning): Response
    {
        return $this->render('GestionPlanning/planning/show.html.twig', [
            'planning' => $planning,
        ]);
    }

    #[Route('/{id}/edit', name: 'planning_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Planning $planning, EntityManagerInterface $em): Response
    {

        $doctor = $this->getUser();
        if ($planning->getDoctor() !== $doctor) {
            throw $this->createAccessDeniedException('You can only edit your own planning.');
        }

        $form = $this->createForm(PlanningType::class, $planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('planning_index');
        }

        return $this->render('GestionPlanning/planning/edit.html.twig', [
            'planning' => $planning,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'planning_delete', methods: ['POST'])]
    public function delete(Request $request, Planning $planning, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $planning->getId(), $request->request->get('_token'))) {
            $em->remove($planning);
            $em->flush();
        }

        return $this->redirectToRoute('planning_index');
    }
}
