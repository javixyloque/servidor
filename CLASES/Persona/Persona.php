<?php
    declare(strict_types=1);

class Persona {
    private string $nombre;
    private string $apellido;


    
    public function __construct(string $nombre, string $apellido) {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }




    public function setNombre(string $nom): void {
        $this -> nombre = $nom;
    }

    public function setApellido(string $ape) {
        $this -> apellido = $ape;
    }

    public function __toString(): string {
        return "Nombre: ". $this -> nombre. " ". $this -> apellido."<br>";
    }

}




// $insert = $conexion->prepare("INSERT INTO persona(nombre, telefono) VALUE (?, ?) ");
//     $insert -> bind_param("si", $nombre, $telefono);

//     if ($insert->execute()) {
//         echo "Registro insertado correctamente<br>";
//     } else {
        
//     }
//     $conexion->close();

// ?>