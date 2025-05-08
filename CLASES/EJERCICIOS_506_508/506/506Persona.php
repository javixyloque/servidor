<?php
    declare(strict_types=1);
    require_once'./Persona.php';


    class Empleado extends Persona {
        private float $salario;
        private array $telefono = [];
        private static int $sueldoTope = 1500;

        public function __construct(string $nombre, string $apellidos, float $salario = 1000, $num=null) {
            parent::__construct($nombre, $apellidos);
            $this -> salario = $salario;
            if ($num) {
                $this -> anadirTelefono($num);
            }
        }



        public function setNombre(string $nom): void {
            $this -> nombre = $nom;
        }

        public function setSalario(float $sal): void {
            $this -> salario = $sal;
        }
        public static function setSueldoTope(int $sueldo): void {
            self::$sueldoTope = $sueldo;
        }

        
        
        public function getSalario(): float {
            return $this->salario;
        }
        public static function getSueldoTope(): int {
            return self::$sueldoTope;
        }


        
        public function listarTelefonos(): string {
            $completo = '';
            foreach ($this -> telefono as $tel) {
                $completo.= $tel.", ";
            }
            $final = substr($completo, 0, strlen($completo)-2);
            return $final;
        }

        public function vaciarTelefonos(): void {
            $this -> telefono = [];
        }

        public function anadirTelefono(int $tel): void {
            array_push(($this -> telefono), $tel);
        }


        public function debePagarImpuestos(): bool {
            
            if ($this->salario <= self::$sueldoTope)
            return false;
            else
            return true;
            
        }

        public function getDatosCompleto(): string {
            if (empty($this->telefono)) {
                return parent::getDatosCompleto()."<br>".$this->getSalario()." €";
            }
            return "EMPLEADO: ".$this->getNombre()."<br>Teléfonos: ".$this->listarTelefonos()."<br>".$this->getSalario()." €";
        }
    }

    $obj1 = new Empleado("Juan", "Gonzalez", 2000);
    if ($obj1 -> debePagarImpuestos()) {
        echo $obj1 -> getDatosCompleto(). ".<br><br> Además, tiene que pagar impuestos";
    } else {
        echo $obj1 -> getDatosCompleto(). ".<br><br> No tiene que pagar impuestos";
    }
    
    // echo $obj1 ->getDatosCompleto();

?>

