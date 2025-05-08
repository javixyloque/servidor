<?php


class Cliente {
    // ATRIBUTO => PRIVATE / PROTECTED / PUBLIC
    // Recomendable private y con getters y setters
    private String $nombre;
    
    // CONSTRUCTOR => INSTANCIAR OBJETO CLASE MODELO
    // Sólo puede haber un constructor por clase
    public function __construct($nom) {
        $this->nombre = $nom;
    }


    // GETTERS / SETTERS => VER Y MODIFICAR VALORES OBJETO
    // Dependiendo lo que queramos proteger, conviene restringir acceso a datos
    public function getNombre () {
        return $this->nombre;
    }
    public function setNombre ($nom) {
        $this->nombre = $nom;
    }

    public function __toString () {
        return "Cliente: {$this->getNombre()}";
    }
}


$cliente = new Cliente("Jacinto");

echo "El nombre del cliente es {$cliente->getNombre()}<br><br>";

$clienteSerializado = serialize($cliente);
echo "Salida serializada cliente: {$clienteSerializado}<br><br>";

$nombreCliente = unserialize($clienteSerializado);
echo "Nombre Sin serializar: ".$nombreCliente->getNombre();



?>