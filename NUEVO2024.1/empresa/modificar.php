<?php
// Configuración de la base de datos
$hostDB = '127.0.0.1';
$nombreDB = 'empresa';
$usuarioDB = 'root';
$contrasenyaDB = '';
$id = $_GET['id'] ?? null;

// Conectar a la base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? null;
    $categoria = $_POST['categoria'] ?? null;
    $precio = $_POST['precio'] ?? null;
    $disponible = $_POST['disponible'] ?? null;

    // Preparar y ejecutar la consulta UPDATE
    $miUpdate = $miPDO->prepare('UPDATE productos_arte SET nombre = :nombre, categoria = :categoria, precio = :precio, disponible = :disponible WHERE id = :id');
    $miUpdate->execute([
        'id' => $id,
        'nombre' => $nombre,
        'categoria' => $categoria,
        'precio' => $precio,
        'disponible' => $disponible
    ]);

    // Redireccionar a la lista de productos
    header('Location: leer.php');
    exit();
} else {
    // Preparar y ejecutar la consulta SELECT
    $miConsulta = $miPDO->prepare('SELECT * FROM productos_arte WHERE id = :id');
    $miConsulta->execute(['id' => $id]);
    $producto = $miConsulta->fetch();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Producto - CRUD PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Modificar Producto</h1>
    </header>
    <div class="container">
        <form method="post">
            <p>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>">
            </p>
            <p>
                <label for="categoria">Categoría</label>
                <input id="categoria" type="text" name="categoria" value="<?= htmlspecialchars($producto['categoria']) ?>">
            </p>
            <p>
                <label for="precio">Precio</label>
                <input id="precio" type="text" name="precio" value="<?= number_format($producto['precio'], 2, ',', '.') ?>">
            </p>
            <p>
                <div>¿Disponible?</div>
                <input id="si-disponible" type="radio" name="disponible" value="1"<?= $producto['disponible'] ? ' checked' : '' ?>> <label for="si-disponible">Sí</label>
                <input id="no-disponible" type="radio" name="disponible" value="0"<?= !$producto['disponible'] ? ' checked' : '' ?>> <label for="no-disponible">No</label>
            </p>
            <p>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Modificar">
            </p>
        </form>
    </div>
</body>
</html>
