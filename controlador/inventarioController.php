<?php
require_once '../Dao/Producto.dao.php';
require_once '../modelo/Producto.Clase.php';
switch($_GET['a']){
    case 'ingr':
        $prod = new Producto();
        $prod->nombre = $_POST['registroNombre'];
        $prod->referencia = $_POST['registroReferencia'];
        $prod->precio = $_POST['registroPrecio'];
        $prod->peso = $_POST['registroPeso'];
        $prod->categoria = $_POST['registroCategoria'];
        $prod->stock = $_POST['registroStock'];
        $prod->fecha_creacion = $_POST['registroCreacion'];
        ProductoDao::ingresarDato($prod);
        break;
    case 'edit':
        $prod = new Producto();
        $prod->id = $_POST['id'];
        $prod->nombre = $_POST['registroNombre'];
        $prod->referencia = $_POST['registroReferencia'];
        $prod->precio = $_POST['registroPrecio'];
        $prod->peso = $_POST['registroPeso'];
        $prod->categoria = $_POST['registroCategoria'];
        $prod->stock = $_POST['registroStock'];
        $prod->fecha_creacion = $_POST['registroCreacion'];
        ProductoDao::editarDato($prod);
        break;
    case 'elim':
        ProductoDao::eliminarPorId($_GET['id']);
        break;
}
header("Location: ../vistas/");
