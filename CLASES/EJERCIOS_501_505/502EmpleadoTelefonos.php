<?php
    declare(strict_types = 1);

    class Empleado {
        private string $nombre;
        private float $salario;
        private array $telefono = [];

        public function setNombre(string $nom): void {
            $this -> nombre = $nom;
        }
        public function setSalario(float $sal): void {
            $this -> salario = $sal;
        }

        public function getNombre(): string {
            return $this->nombre;
        }
        public function getSalario(): float {
            return $this->salario;
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



        public function debePagarImpuestos(): bool {
            if ($this->salario <=1500)
            return false;
            else
            return true;
        }

        public function getDatosCompleto(): string {
            return "EMPLEADO: ".$this->getNombre()."<br>Telefonos: ".$this->listarTelefonos()."<br>".$this->getSalario()." €";
        }

        public function anadirTelefono(int $tel): void {
            array_push(($this -> telefono), $tel);
        }



    }

?>