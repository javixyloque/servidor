<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PuestoController extends AbstractController
{
    #[Route('/puesto', name: 'app_puesto')]
    public function index(): Response
    {
        return $this->render('puesto/index.html.twig', [
            'controller_name' => 'PuestoController',
        ]);
    }
}
