<?php

class Conexion{
    private $conexion;
    private $servidor;
    private $db;
    private $contrasenia;
    private $usuario;

    public function __construct(){
        $this->servidor = "localhost";
        $this->db = "inventario";
        $this->contrasenia = "";
        $this->usuario = "root";
        $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasenia, $this->db);
    }


    public function ejecutarConsulta($sql){
        $consulta = $this->conexion->query($sql);
        return $consulta->fetch_all();
    }

    public function ejecutarActualizacion($sql){
        echo $sql;
        $consulta = $this->conexion->query($sql);
    }

    public function cerrarConexion(){
        $consulta = $this->conexion->close();
    }
}