<html>
<head>
<title>Ingresar</title>
</head>
<body>
<form action="../controlador/inventarioController.php?a=ingr" method="post">
<label for="nombre_producto">Nombre:</label>
<input type="text" id="nombre_producto" name="nombre_producto">
<label for="referencia">Referencia:</label>
<input type="text" id="referencia" name="referencia">
<label for="precio">Precio:</label>
<input type="text" id="precio" name="precio">
<label for="peso">Peso:</label>
<input type="text" id="peso" name="peso">
<label for="categoria">Categoria:</label>
<input type="text" id="categoria" name="categoria">
<label for="stock">Stock:</label>
<input type="text" id="stock" name="stock">
<label for="fecha_creacion">Fecha Creacion:</label>
<input type="text" id="fecha_creacion" name="fecha_creacion">
<input type="submit" value="Registrar producto">
</form>
</body>
</html>