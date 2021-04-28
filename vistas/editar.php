<?php
require_once '../Dao/Producto.dao.php';
$id = ProductoDao::buscarPorId($_GET['id']);
?>
<html>
<head>
<title>Editar</title>
<link rel="stylesheet" href="../assets/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
<h1 style="margin-left: 500px;">Editar productos</h1>
<div style="margin-left: 500px;">
<form action="../controlador/inventarioController.php?a=edit" method="post">
<div class="form-group">
<label for="nombre_producto">Nombre:</label>
<input type="text" id="nombre_producto" name="registroNombre" value="<?=$id[1]?>">
</div>
<input type="hidden" name="id" value="<?=$id[0]?>">
<div class="form-group">
<label for="referencia">Referencia:</label>
<input type="text" id="referencia" name="registroReferencia" value="<?=$id[2]?>">
</div>
<div class="form-group">
<label for="precio">Precio:</label>
<input type="text" id="precio" name="registroPrecio" value="<?=$id[3]?>">
</div>
<div class="form-group">
<label for="peso">Peso:</label>
<input type="text" id="peso" name="registroPeso" value="<?=$id[4]?>" >
</div>
<div class="form-group">
<label for="categoria">Categoria:</label>
<input type="text" id="categoria" name="registroCategoria" value="<?=$id[5]?>">
</div>
<div class="form-group">
<label for="stock">Stock:</label>
<input type="text" id="stock" name="registroStock" value="<?=$id[6]?>">
</div>
<div class="form-group">
<label for="fecha_creacion">Fecha Creacion:</label>
<input type="date" id="fecha_creacion" name="registroCreacion" value="<?=$id[7]?>">
</div>
<div class="form-group">
<input type="submit" value="Editar producto">
</div>
</form>
</div>
<script src="../assets/bootstrap-4.6.0-dist/js/jquery-3.6.0.min.js"></script>
<script src="../assets/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>
</html>