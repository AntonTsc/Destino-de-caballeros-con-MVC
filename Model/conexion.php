<?php
    class Conexion{
        private $con;

        public function __construct()
        {
            $this->con = new mysqli('localhost', 'root', '', 'caballeros_mesa_cuadrada');
        }

        public function getCon(){
            return $this->con;
        }

        public function closeCon(){
            return $this->con->close();
        }
    }
?>