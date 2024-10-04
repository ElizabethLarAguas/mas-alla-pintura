
<?php
include("conexion.php");

$mensaje = '';

if (
    isset($_POST['Nombrecompleto']) && strlen($_POST['Nombrecompleto']) >= 1 &&
    isset($_POST['NumeroTelefono']) && strlen($_POST['NumeroTelefono']) >= 1 &&
    isset($_POST['email']) && strlen($_POST['email']) >= 1 &&
    isset($_POST['password']) && strlen($_POST['password']) >= 1
) {
    $name = trim($_POST['Nombrecompleto']);
    $NumeroTelefono = trim($_POST['NumeroTelefono']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']); 

    $consulta = "INSERT INTO maspintura (Nombrecompleto, NumeroTelefono, email, password) VALUES ('$name', '$NumeroTelefono', '$email', '$password')";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        $mensaje = '<p class="success">Ya te has registrado</p>';
    } else {
        $mensaje = '<p class="error">Sucedió un error: ' . mysqli_error($conex) . '</p>';
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mensaje = '<p class="error">Por favor, llenar todos los campos</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>FORMULARIO DE REGISTRO</title>
</head>
<body>
    <div class="container-from">
        <div class="information">
            <div class="info-childs">
                <h2>Hola Nuevamente</h2>
                <p>Si te quieres unir a nuestra comunidad por favor inicia sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
                <script>
                    document.getElementById('sign-in').addEventListener('click', function() {
                        window.location.href = 'iniciosesion.html';
                    });
                </script>
            </div>
        </div>
        <div class="form-information">
            <div class="from-information-childs">
                <h2>Crear Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-instagram-alt'></i>
                    <i class='bx bx-phone'></i>
                </div>
                <p>O puedes usar tu email para registrarte y unirte a nosotros</p>

                <form method="POST" class="form">
                    <label>
                        <i class='bx bxs-user'></i>
                        <input type="text" name="Nombrecompleto" placeholder="Nombre Completo" required>
                    </label>
                    <label>
                        <i class='bx bxs-lock-open'></i>
                        <input type="number" name="NumeroTelefono" placeholder="Número de Teléfono" required>
                    </label>
                    <label>
                        <i class='bx bxs-envelope'></i>
                        <input type="email" name="email" placeholder="Correo Electrónico" required>
                    </label>
                    <label>
                        <i class='bx bxs-lock-open'></i>
                        <input type="password" name="password" placeholder="Contraseña" required>
                    </label>

                    <input type="submit" value="Registrarme">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
