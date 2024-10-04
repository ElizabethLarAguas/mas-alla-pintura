<?php
$hostDB = '127.0.0.1';
$nombreDB = 'empresa';
$usuarioDB = 'root';
$contrasenyaDB = '';
$id = $_GET['id'] ?? null;

// Conectar a la base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Preparar y ejecutar la consulta DELETE
$miDelete = $miPDO->prepare('DELETE FROM productos_arte WHERE id = :id');
$miDelete->execute(['id' => $id]);

// Redireccionar a la lista de productos
header('Location: leer.php');
exit();
?>