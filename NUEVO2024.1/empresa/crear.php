<?php
// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? null;
    $categoria = $_POST['categoria'] ?? null;
    $precio = $_POST['precio'] ?? null;
    $disponible = $_POST['disponible'] ?? null;

    // Conectar a la base de datos
    $hostDB = '127.0.0.1';
    $nombreDB = 'empresa';
    $usuarioDB = 'root';
    $contrasenyaDB = '';
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

    // Preparar e insertar los datos
    $miInsert = $miPDO->prepare('INSERT INTO productos_arte (nombre, categoria, precio, disponible) VALUES (:nombre, :categoria, :precio, :disponible)');
    $miInsert->execute([
        'nombre' => $nombre,
        'categoria' => $categoria,
        'precio' => $precio,
        'disponible' => $disponible
    ]);

    // Redireccionar a la lista de productos
    header('Location: leer.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto - CRUD PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Crear Nuevo Producto</h1>
    </header>
    <div class="container">
        <form method="post">
            <p>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" name="nombre">
            </p>
            <p>
                <label for="categoria">Categoría</label>
                <input id="categoria" type="text" name="categoria">
            </p>
            <p>
                <label for="precio">Precio</label>
                <input id="precio" type="text" name="precio">
            </p>
            <p>
                <div>¿Disponible?</div>
                <input id="si-disponible" type="radio" name="disponible" value="1" checked> <label for="si-disponible">Sí</label>
                <input id="no-disponible" type="radio" name="disponible" value="0"> <label for="no-disponible">No</label>
            </p>
            <p>
                <input type="submit" value="Guardar">
            </p>
        </form>
    </div>
</body>
</html>
