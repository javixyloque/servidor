<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Empleado;
use App\Repository\EmpleadoRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/empleado')]
final class EmpleadoController extends AbstractController
{
    #[Route('/', name: 'app_empleado')]
    public function index(): Response
    {
        return $this->render('empleado/index.html.twig', [
            'controller_name' => 'EmpleadoController',
        ]);
    }
    #[Route('/anadir',name: 'anadir_pelicula', methods: ['POST'])]
    public function anadirPelicula(Request $request, EntityManagerInterface $emi): Response {
        // OBTENER JSON PETICION
        $body = $request-> getContent();
        // CREAR ASOCIATIVO DEL BODY
        $data = json_decode($body, true);
        // CONSTRUCTOR Y SETTERS
        $empleado = new Empleado();
        $empleado->setNombre($data['nombre']);
        $empleado->setDni($data['dni']);
        $empleado->setEmail($data['email']);
        $empleado->setPuesto($data['puesto']);
        // PERSISTIR Y FLUSH - GUARDAR Y COMMIT
        $emi->persist($empleado);
        $emi->flush();
        return new Response('Empleado añadido   ', Response::HTTP_CREATED);
    }

    #[Route('/listar',name: 'listar_empleado', methods: ['GET'])]
    public function listarEmpleado(EntityManagerInterface $emi): Response {
        $emp = $emi->getRepository(Empleado::class)->findAll();
        $empleados = [];
        foreach
        ($emp as $empleado) {
            $empleados[] = [
                'id' => $empleado->getId(),
                'nombre' => $empleado->getNombre(),
                'dni' => $empleado->getDni(),
                'email' => $empleado->getEmail(),
                'puesto' => $empleado->getPuesto(),
            ];
        }
        return $this->json($empleados);
    }

    #[Route('/borrar/{id}',name: 'borrar_empleado', methods: ['DELETE'])]
    public function borrarEmpleado(EntityManagerInterface $emi, int $id): Response {
        $empleado = $emi->getRepository(Empleado::class)->find($id);
        $emi->remove($empleado);
        $emi->flush();
        return new Response('Empleado borrado   ', Response::HTTP_CREATED);
    }

    #[Route('/actualizar/{id}', name: 'actualizar_pelicula', methods: ['PUT'])]
    public function actualizarPelicula(int $id, Request $request, EntityManagerInterface $emi): Response {
        // CONSULTA => ENCONTRAR PELICULA POR ID
        $empleado = $emi->getRepository(Empleado::class)->find($id);
        if (!$empleado) {
            return $this->json('Pelicula no encontrada', Response::HTTP_NOT_FOUND);
        }

        // OBTENER JSON PETICION
        $body = $request->getContent();
        // CREAR ASOCIATIVO DEL BODY
        $data = json_decode($body, true);
        // SETTERS
        $empleado->setNombre($data['nombre']);
        $empleado->setDni($data['dni']);
        $empleado->setEmail($data['email']);
        $empleado->setPuesto($data['puesto']);
        // PERSISTIR Y FLUSH
        $emi->persist($empleado);
        $emi->flush();
        return $this->json('Pelicula actualizada con exito', Response::HTTP_CREATED);

    }
}
