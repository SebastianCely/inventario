<?php require_once '../Dao/Producto.dao.php'; ?>
<html>
<head>
<link rel="stylesheet" href="../assets/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
<h1>LISTADO DE PRODUCTOS</h1>
<table class="table table-dark">
<tr>
<th>Nombre</th>
<th>Referencia</th>
<th>Precio</th>
<th>Peso</th>
<th>Categoria</th>
<th>Stock</th>
<th>Fecha creacion</th>
<th>Fecha venta</th>
<th>Acciones</th>
</tr>
<?php foreach (ProductoDao::listarProductos() as $fila): ?>
    <tr>
        <td><?= $fila[1] ?></td>
        <td><?= $fila[2] ?></td>
        <td><?= $fila[3] ?></td>
        <td><?= $fila[4] ?></td>
        <td><?= $fila[5] ?></td>
        <td><?= $fila[6] ?></td>
        <td><?= $fila[7] ?></td>
        <td><?= $fila[8] ?></td>
        <td>
        <a href="editar.php?id=<?= $fila[0] ?>" class="btn btn-warning">Editar</a>
        <a href="../controlador/inventarioController.php?a=elim&id=<?= $fila[0]?>" onclick="return confirm('¿Desea eliminar el dato?')" class="btn btn-danger">Eliminar</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<a href="crear.php" class="btn btn-success">Ingresar nuevo producto</a>
<script src="../assets/bootstrap-4.6.0-dist/js/jquery-3.6.0.min.js"></script>
<script src="../assets/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>
</html>