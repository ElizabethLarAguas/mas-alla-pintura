<?php
// Configuración de la base de datos
$hostDB = '127.0.0.1';
$nombreDB = 'empresa';
$usuarioDB = 'root';
$contrasenyaDB = '';

// Conectar con la base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Preparar y ejecutar la consulta SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM productos_arte;');
$miConsulta->execute();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer - CRUD PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Productos de Arte</h1>
    </header>
    <div class="container">
        <p><a class="button" href="crear.php">Crear Producto</a></p>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>¿Disponible?</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            <?php foreach ($miConsulta as $valor): ?> 
            <tr>
                <td><?= $valor['id']; ?></td>
                <td><?= htmlspecialchars($valor['nombre']); ?></td>
                <td><?= htmlspecialchars($valor['categoria']); ?></td>
                <td><?= number_format($valor['precio'], 2, ',', '.'); ?></td>
                <td><?= $valor['disponible'] ? 'Sí' : 'No'; ?></td>
                <td><a class="button" href="modificar.php?id=<?= $valor['id'] ?>">Modificar</a></td>
                <td><a class="button" href="borrar.php?id=<?= $valor['id'] ?>">Borrar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>

