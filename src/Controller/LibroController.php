<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/libro')]
final class LibroController extends AbstractController
{
    #[Route('/', name: 'libro_main')]
    public function main(): Response {
        return $this->render('libro/main.html.twig', [
            'user' => 'Yeyby'

                  
        ]);
    }


    #[Route('/{id}', name: 'app_libro_get')]
    public function index($id): Response
    {
        return $this->render('libro/index.html.twig', [
            'controller_name' => 'LibroController',
            'id' => $id,
        ]);
    }

    #[Route('/ver', name: 'select_libro')]
    public function select_libro($id): Response
    {
        return $this->render('libro/libros.html.twig', [
            'controller_name' => 'LibroController',
            'id' => $id,
        ]);
    }



}
