<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Pelicula;
use App\Repository\PeliculaRepository;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/pelicula', name: 'app_pelicula')]
final class PeliculaController extends AbstractController
{
    #[Route('/', name: 'index_pelicula')]
    public function index(): Response {
        return $this->json("Esta es la ruta index de Pelicula");
    }


    // READ LAS PELICULAS
    #[Route('/lista', name: 'lista_pelicula', methods:['GET'])]
    public function peliculaList(EntityManagerInterface $emi): Response {
        $peliculas = $emi ->getRepository(Pelicula::class)->findAll();
        $peliculasJson = array();
        foreach ($peliculas as $pelicula) {
            $peliculasJson[] = [
                $pelicula->getTitulo(),
                $pelicula->getDescripcion(),
                $pelicula->getAnyo(),
                $pelicula->getDuracion()
            ];
        }
        return $this->json($peliculasJson);
    }

    
    // READ PELICULA POR ID
    #[Route('/{id}', name: 'ver_pelicula', methods:['GET'])]
    public function peliculaID(int $id, EntityManagerInterface $emi): Response {
        // RUTA -> 127.0.0.1/pelicula/3
        // RUTA -> 127.0.0.1/pelicula/16
        $pelicula = $emi ->getRepository(Pelicula::class)->find($id);
        if (!$pelicula) {
            return $this->json(['error' => 'Pelicula no encontrada'], 404);
        }

        $peliculasJson[] = [
            $pelicula->getTitulo(),
            $pelicula->getDescripcion(),
            $pelicula->getAnyo(),
            $pelicula->getDuracion()
        ];

        return $this->json($peliculasJson);
    }

    // CREATE PELICULA
    #[Route('/registrar', name: 'registrar_pelicula', methods:['POST'])]
    public function peliculaRegistrar(Request $request, EntityManagerInterface $emi): Response {
        

        // RUTA -> 127.0.0.1/pelicula/crear
        /*
        {"titulo":"Nueva pelicula",
        "descripcion":"Esta es la descripcion",
        "anyo": 2025,
        "duracion":90}
        */

        // RECIBIR LOS DATOS DE LA RESPUESTA
        $body = $request->getContent();
        // DECODIFICAR EL JSON A UN ARRAY (ASOCIATIVO CON TRUE)
        $data = json_decode($body, true);

        // ICONSTRUCTOR Y SETTERS
        $pelicula = new Pelicula();
        $pelicula->setTitulo($data['titulo']);
        $pelicula->setDescripcion($data['descripcion']);
        $pelicula->setAnyo($data['anyo']);
        $pelicula->setDuracion($data['duracion']);

        // GUARDAR EN LA BASE DE DATOS
        $emi->persist($pelicula);
        // COMMIT
        $emi->flush();
        
        // RESPUESTA CON STATUS CREATED (201)
        return $this->json("Pelicula creada correctamente", Response::HTTP_CREATED);
    }



    // DELETE PELICULA CON ID
    // SI EXISTE BORRA Y SI NO NOS DICE QUE NO EXISTE
    #[Route('/borrar/{id}', name: 'borrar_pelicula', methods: ['DELETE' ]) ]
    public function peliculaBorrar(int $id, EntityManagerInterface $emi): Response{

        // RUTA -> 127.0.0.1/pelicula/borrar/3
        $pelicula=$emi->getRepository(Pelicula::class)->find($id);
        
        // SI NO EXISTE, NO EJECUTA MAS DE ESTE CONDICIONAL
        if(!$pelicula){
            return $this->json("La pelicula no existe");
        }

        // SI EXISTE, BORRA LA PELICULA
        $emi->remove($pelicula);
        // COMMIT
        $emi->flush();

        // RESPUESTA CON STATUS OK (200)
        return $this->json("Pelicula borrada",Response::HTTP_OK);
    }



    // UPDATE PELICULA CON ID
    #[Route('/actualizar/{id}', name: 'actualizar_pelicula', methods: ['PUT'])]
    public function peliculaActualizar(int $id, Request $request, EntityManagerInterface $emi): Response {
        // RUTA -> 127.0.0.1/pelicula/actualizar/3
        
        /*
            "titulo": "Spiderman",
            "descripcion": "Spiderman: No Way Home",
            "anyo": 2019,
            "duracion": 121
        
        */ 
        
        // RECIBIR LOS DATOS DE LA RESPUESTA
        $body = $request->getContent();
        // DECODIFICAR EL JSON A UN ARRAY (ASOCIATIVO CON TRUE)
        $data = json_decode($body, true);

        // RECUPERAR LA PELICULA CON EL ID
        $pelicula = $emi->getRepository(Pelicula::class)->find($id);

        // SI NO EXISTE, NO EJECUTA MAS DE ESTE CONDICIONAL
        if (!$pelicula) {
            return $this->json(['error' => 'Pelicula no encontrada'], 404);
        }

        // ACTUALIZAR LOS DATOS
        $pelicula->setTitulo($data['titulo']);
        $pelicula->setDescripcion($data['descripcion']);
        $pelicula->setAnyo($data['anyo']);
        $pelicula->setDuracion($data['duracion']);

        // GUARDAR EN LA BASE DE DATOS
        $emi->persist($pelicula);
        // COMMIT
        $emi->flush();

        // RESPUESTA CON STATUS OK (200)
        return $this->json("Pelicula actualizada", Response::HTTP_OK);
    }


    // LISTAR PELICULA PASADO UN AÑO
    #[Route('/lista/{anyo}', name: 'lista_peliculas_anyo', methods:['GET'])]
    public function peliculaListarAnyo(int $anyo, EntityManagerInterface $emi): Response {
        // GUARDAMOS LA CONSULTA EN UNA VARIABLE PELICULAS
        $peliculas = $emi ->getRepository(Pelicula::class)->createQueryBuilder('p')
            ->where('p.anyo >= :anyo')
            ->setParameter('anyo', $anyo)
            ->getQuery()
            ->getResult();

        // RECORREMOS PELICULAS Y GUARDAMOS EN PELICULASJSON
        // $peliculasJson = array();
        foreach ($peliculas as $pelicula) {
            $peliculasJson[] = [
                $pelicula->getTitulo(),
                $pelicula->getDescripcion(),
                $pelicula->getAnyo(),
                $pelicula->getDuracion()
            ];
        }

        // DEVOLVEMOS RESPUESTA EN JSON
        return $this->json($peliculasJson);
    }


    
}
