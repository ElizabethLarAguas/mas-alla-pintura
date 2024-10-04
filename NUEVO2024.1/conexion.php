<?php
$host = 'localhost'; // Cambia esto si es necesario
$user = 'root'; // Cambia esto por tu usuario de la base de datos
$pass = ''; // Cambia esto por tu contraseña de la base de datos (normalmente vacío en XAMPP)
$db = 'mas-alla-pintura'; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conex = mysqli_connect($host, $user, $pass, $db);

// Verificar la conexión
if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    // echo 'Se conectó correctamente'; // Puedes dejar esta línea para pruebas
}
?>
