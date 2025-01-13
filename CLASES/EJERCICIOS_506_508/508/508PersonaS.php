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
            if (isset($this->edad)) {
                if ($this->salario <= self::$sueldoTope || $this -> edad < 21)
                return false;
                else
                return true;
            } else {
                echo "Hay que inicializar la edad (mínimo) antes de comprobar si debe pagar impuestos<br>";
                return false;
            }
            
        }

        public function getDatosCompleto(): string {
            if (empty($this->telefono)) {
                return parent::getDatosCompleto()."<br>".$this->getSalario()." €";
            }
            return "EMPLEADO: ".$this->getNombre()."<br>Teléfonos: ".$this->listarTelefonos()."<br>".$this->getSalario()." €";
        }

        public function __toString (): string {
            if ($this->debePagarImpuestos()) {
                $debePagar = "Sí";
            } else {
                $debePagar = "No";
            }

            return parent::__toString()."<br>Sueldo: ".$this ->getSalario()."<br>Teléfonos: ".$this->listarTelefonos()."<br>¿Paga impuestos? ".$debePagar ;
        }
    }

    $obj1 = new Empleado("Juan", "Gonzalez", 2000);
    $obj1 -> setEdad(26);
    $obj1 -> anadirTelefono(679543456);
    $obj1 -> anadirTelefono(657768456);
    $obj1 -> setSalario(1700);
    echo $obj1->__toString();
    
    // echo $obj1 ->getDatosCompleto();

?>

