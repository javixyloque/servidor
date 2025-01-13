<?php
    declare(strict_types=1);

class Persona {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;


    
    public function __construct(string $nombre, string $apellidos) {
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
    }


    public function setNombre(string $nom): void {
        $this -> nombre = $nom;
    }

    public function setEdad(int $edad): void {
        $this -> edad = $edad;
    }
    public function getEdad(): int {
        return $this->edad;
    }
    

    public function getNombre(): string {
        return $this->nombre;
    }
    public function getApellidos(): string {
        return $this->apellidos;
    }
    public function setApellidos(string $ape): void {
        $this -> apellidos = $ape;
    }
    
    

    public function getDatosCompleto(): string {
        return "EMPLEADO: ".$this->getNombre()." ".$this->getApellidos();
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