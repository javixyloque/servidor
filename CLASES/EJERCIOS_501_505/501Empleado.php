<?php
    declare(strict_types = 1);

    class Empleado {
        private string $nombre;
        private float $salario;
        private int $telefono;

        public function setNombre(string $nom): void {
            $this -> nombre = $nom;
        }
        public function setSalario(float $sal): void {
            $this -> salario = $sal;
        }
        public function setTelefono(int $tel): void {
            $this -> telefono = $tel;
        }

        public function getNombre(): string {
            return $this->nombre;
        }
        public function getSalario(): float {
            return $this->salario;
        }
        public function getTelefono(): int {
            return $this->telefono;
        }



        public function debePagarImpuestos(): bool {
            if ($this->salario <=1500)
            return false;
            else
            return true;
        }

        public function getDatosCompleto(): string {
            return "EMPLEADO: ".$this->getNombre()."<br>Telefono: ".$this->getTelefono()."<br>".$this->getSalario();
        }
        


    }

?>