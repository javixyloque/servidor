<?php

namespace App\Controller;

use App\Entity\Beca;
use App\Form\BecaForm;
use App\Repository\BecaRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SolicitanteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/beca')]
final class BecaController extends AbstractController
{
    #[Route(name: 'app_beca_index', methods: ['GET'])]
    public function index(BecaRepository $becaRepository): Response
    {
        return $this->render('beca/index.html.twig', [
            'becas' => $becaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_beca_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $beca = new Beca();
        $form = $this->createForm(BecaForm::class, $beca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($beca);
            $entityManager->flush();

            return $this->redirectToRoute('app_beca_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('beca/new.html.twig', [
            'beca' => $beca,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_beca_show', methods: ['GET'])]
    public function show(Beca $beca): Response
    {
        return $this->render('beca/show.html.twig', [
            'beca' => $beca,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_beca_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Beca $beca, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BecaForm::class, $beca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_beca_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('beca/edit.html.twig', [
            'beca' => $beca,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_beca_delete', methods: ['POST'])]
    public function delete(Request $request, Beca $beca, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$beca->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($beca);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_beca_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/listar',name: 'listar_solicitante', methods: ['GET'])]
    public function listarEmpleado(Request $request, Beca $beca, SolicitanteRepository $emi): Response {
        $id_beca = $beca->getId();
        $emp = $emi->findByTipoBeca($id_beca);
        $solicitantes = [];
        foreach ($emp as $solicitante) {
            $solicitantes[] = [
                'id' => $solicitante->getId(),
                'nombre' => $solicitante->getNombre(),
                'dni' => $solicitante->getDni(),
                'nomina' => $solicitante->getNomina(),
                'concedida' => $solicitante->getConcedida(),
            ];
        }

        return $this->render( 'beca/solicitantes.html.twig', [
            'solicitantes' => $solicitantes,
            'beca' => $beca
        ]);

        return $this->json($solicitantes);
    }
}
