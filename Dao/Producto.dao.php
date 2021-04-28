<?php
require_once '../modelo/conexion.php';
class ProductoDao{
    public static function listarProductos(){
        $con = new Conexion();
        $lista = $con->ejecutarConsulta("SELECT * FROM productos");
        return $lista;
        $con->cerrarConexion();
    }

    public static function ingresarDato($prod){
        $con = new Conexion();
        $con->ejecutarActualizacion("INSERT INTO productos (nombre_producto, referencia, precio, peso, categoria, stock, fecha_creacion) VALUES ('" . $prod->nombre . "', '" . $prod->referencia . "', '" . $prod->precio . "', '" . $prod->peso . "', '" . $prod->categoria . "', '" . $prod->stock . "', '" . $prod->fecha_creacion . "')");
        $con->cerrarConexion();
    }

    public static function buscarPorId($id){
        $con = new Conexion();
        $userid = $con->ejecutarConsulta("SELECT * FROM productos WHERE id = $id");
        return $userid[0];
        $con->cerrarConexion();
    }

    public static function editarDato($producto){
        $con = new Conexion();
        $con->ejecutarActualizacion("UPDATE productos SET nombre_producto = '" . $producto->nombre . "', referencia = '" . $producto->referencia . "', precio = '" . $producto->precio . "', peso = '" . $producto->peso . "', categoria = '" . $producto->categoria . "', stock = '" . $producto->stock . "', fecha_creacion = '" . $producto->fecha_creacion . "' WHERE id = " . $producto->id);
        $con->cerrarConexion();
    }

    public static function eliminarPorId($id){
        $con = new Conexion();
        $con->ejecutarActualizacion("DELETE FROM productos WHERE id = $id");
        $con->cerrarConexion();
    }
}