<html>
<head>
<title>Ingresar registro
</title>
<link rel="stylesheet" href="../assets/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
<h1>Registrar productos</h1>
<form action="../controlador/inventarioController.php?a=ingr" method="POST">
<label for="nombre_producto">Nombre:</label>
<input type="text" id="nombre_producto" name="registroNombre">
<label for="referencia">Referencia:</label>
<input type="text" id="referencia" name="registroReferencia">
<label for="precio">Precio:</label>
<input type="text" id="precio" name="registroPrecio">
<label for="peso">Peso:</label>
<input type="text" id="peso" name="registroPeso">
<label for="categoria">Categoria:</label>
<input type="text" id="categoria" name="registroCategoria">
<label for="stock">Stock:</label>
<input type="text" id="stock" name="registroStock">
<label for="fecha_creacion">Fecha de creacion:</label>
<input type="date" id="fecha_creacion" name="registroCreacion">
<button type="submit">Registrar</button>
</form>
<script src="../assets/bootstrap-4.6.0-dist/js/jquery-3.6.0.min.js"></script>
<script src="../assets/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>
</html>