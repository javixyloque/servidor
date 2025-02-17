<?php
//Clase Libro
    class Libro {
        private $id;
        private $titulo;
        private $precio;
        private $cantidad;

        public function __construct($titulo, $precio, $cantidad) {
            $this->titulo = $titulo;
            $this->precio = $precio;
            $this->cantidad = $cantidad;
            if ($this->id) {
                $this->id++;
            } else {
                $this->id = 1;
            }
        }
        /**
         * Get the value of id
         */ 
        public  function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }
    }

?>
