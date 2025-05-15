<?php

namespace App\Controller;

use App\Entity\Solicitante;
use App\Form\SolicitanteForm;
use App\Repository\SolicitanteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/solicitante')]
final class SolicitanteController extends AbstractController
{
    #[Route(name: 'app_solicitante_index', methods: ['GET'])]
    public function index(SolicitanteRepository $solicitanteRepository): Response
    {
        return $this->render('solicitante/index.html.twig', [
            'solicitantes' => $solicitanteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_solicitante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $solicitante = new Solicitante();
        $form = $this->createForm(SolicitanteForm::class, $solicitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($solicitante);
            $entityManager->flush();

            return $this->redirectToRoute('app_solicitante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('solicitante/new.html.twig', [
            'solicitante' => $solicitante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_solicitante_show', methods: ['GET'])]
    public function show(Solicitante $solicitante): Response
    {
        return $this->render('solicitante/show.html.twig', [
            'solicitante' => $solicitante,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_solicitante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Solicitante $solicitante, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SolicitanteForm::class, $solicitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_solicitante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('solicitante/edit.html.twig', [
            'solicitante' => $solicitante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_solicitante_delete', methods: ['POST'])]
    public function delete(Request $request, Solicitante $solicitante, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$solicitante->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($solicitante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_solicitante_index', [], Response::HTTP_SEE_OTHER);
    }
}
