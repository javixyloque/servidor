<?php
namespace App\Controller;

// IMPORTANTE TENER ESTOS IMPORTS PARA LAS RUTAS
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Pelicula;
use App\Repository\PeliculaRepository;
use Doctrine\ORM\EntityManagerInterface;




#[Route('/api', name : 'incio_api')]
final class PeliculaController extends AbstractController
{
    #[Route('/pelicula', name: 'app_pelicula')]
    public function index(): Response
    {
        return $this->json("Bienvenido a la API de peliculas, esta es la ruta raiz");
    }
    
    public function filtrado ($datos) {
        $datos = trim($filter_var($datos, FILTER_SANITIZE_STRING));
        return $datos;
    }
    
    // SELECT => TODAS LAS PELICULAS
    #[Route('/lista', name: 'lista_peliculas', methods:['GET'])]
    public function peliculaList(EntityManagerInterface $emi): Response {
        $peliculas = $emi ->getRepository(Pelicula::class)->findAll();
        $peliculasJson = array();
        foreach ($peliculas as $pelicula){
            $peliculasJson[] = [
                $pelicula->getTitulo(),
                $pelicula->getDescripcion(),
                $pelicula->getAnio(),
                $pelicula->getDuracion()
            ];
        }
        return $this->json($peliculasJson);
    }

    // SELECT => PELICULA POR ID

    #[Route('/{id}', name: 'ver_pelicula', methods: ['GET'])]
    public function peliculaID(int $id, EntityManagerInterface $emi): Response {
        
        $pelicula = $emi ->getRepository(Pelicula::class)->find($id); 
        if (!$pelicula) {
            return $this->json(['error' => 'Pelicula no encontrada'], 404);
        }
        $peliculasJson = array(); 
        $peliculasJson[] = [
            $pelicula->getTitulo(),
            $pelicula->getDescripcion(), 
            $pelicula->getAnio(),
            $pelicula->getDuracion()
        ];
        return $this->json($peliculasJson);
    }



    // AÑADIR PELICULA
    #[Route('/anadir',name: 'anadir_pelicula', methods: ['POST'])]
    public function anadirPelicula(Request $request, EntityManagerInterface $emi): Response {
        // OBTENER JSON PETICION
        $body = $request-> getContent();
        // CREAR ASOCIATIVO DEL BODY
        $data = json_decode($body, true);
        // CONSTRUCTOR Y SETTERS
        $pelicula = new Pelicula();
        $pelicula->setTitulo($data['titulo']);
        $pelicula->setDescripcion($data['descripcion']);
        $pelicula->setAnio($data['anio']);
        $pelicula->setDuracion($data['duracion']);
        // PERSISTIR Y FLUSH - GUARDAR Y COMMIT
        $emi->persist($pelicula);
        $emi->flush();


        return $this->json('Pelicula añadida con exito', Response::HTTP_CREATED);
    }
     
    // BORRAR PELICULA
    #[Route('/borrar/{id}', name: 'borrar_pelicula', methods: ['DELETE'])]
    public function borrarPelicula(int $id, EntityManagerInterface $emi): Response {
        // CONSULTA => ENCONTRAR PELICULA POR ID
        $pelicula = $emi ->getRepository(Pelicula::class)->find($id); 
        // NO ENCUENTRA => 404
        if (!$pelicula) {
            return $this->json('Pelicula no encontrada', Response::HTTP_NOT_FOUND);
        }
        // ENCUENTRA => BORRAR
        $emi->remove($pelicula);
        // FLUSH - COMMIT
        $emi->flush();

        return $this->json('Pelicula borrada con exito', Response::HTTP_CREATED);
    }

    // UPDATE PELICULA
    #[Route('/actualizar/{id}', name: 'actualizar_pelicula', methods: ['PUT'])]
    public function actualizarPelicula(int $id, Request $request, EntityManagerInterface $emi): Response {
        // CONSULTA => ENCONTRAR PELICULA POR ID
        $pelicula = $emi->getRepository(Pelicula::class)->find($id);
        if (!$pelicula) {
            return $this->json('Pelicula no encontrada', Response::HTTP_NOT_FOUND);
        }

        // OBTENER JSON PETICION
        $body = $request->getContent();
        // CREAR ASOCIATIVO DEL BODY
        $data = json_decode($body, true);
        // SETTERS
        $pelicula->setTitulo($data['titulo']);
        $pelicula->setDescripcion($data['descripcion']);
        $pelicula->setAnio($data['anio']);
        $pelicula->setDuracion($data['duracion']);
        // PERSISTIR Y FLUSH
        $emi->persist($pelicula);
        $emi->flush();
        return $this->json('Pelicula actualizada con exito', Response::HTTP_CREATED);

    }


}
