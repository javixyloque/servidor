<?php
require('./conexion.php');

$conexion = conectar();
if ($conexion->connect_error) {
    echo "Error al conectar: " . $conexion->connect_error;
    exit();
} else {
    echo"Conexión exitosa<br>";
}
class Persona {
    private string $nombre;
    private string $apellido;

    public function setNombre(string $nom): void {
        $this -> nombre = $nom;
    }

    public function setApellido(string $ape) {
        $this -> apellido = $ape;
    }

    public function imprimirNombre() {
        echo "Nombre: ". $this -> nombre. " ". $this -> apellido."<br>";
    }

}

$lolo = new Persona();
// $lolo->imprimirNombre(); NO SE PUEDE ACCEDER A LAS VARIABLES ANTES DE DECLARARLAS;
$lolo->setNombre("Lolo");
// $lolo->imprimirNombre();
$lolo->setApellido("Juárez");
$lolo->imprimirNombre();


$insert = $conexion->prepare("INSERT INTO persona(nombre, telefono) VALUE (?, ?) ");
    $insert -> bind_param("si", $nombre, $telefono);

    if ($insert->execute()) {
        echo "Registro insertado correctamente<br>";
    } else {
        
    }
    $conexion->close();

?>