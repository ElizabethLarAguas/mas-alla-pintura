<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>

        <header>
          </header>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
        href="https://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;
        600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>INICIO DE SESIÓN</title>
        </head><head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
            href="https://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;
            600;700&display=swap" rel="stylesheet">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="inicio.css">
            
            <title>INICIO DE SESIÓN</title>
</head>
<body>
    <div class="container-from">
        <div class="information">
            <div class="info-childs">
                <h2>! Hola, Bienvenidos ¡</h2>
                <p>Si no Tienes cuenta te puedes Registrar, Dale al siguiente boton y Unete a esta comunidad 
                </p>
                <input type="button" value="Registrar" id="sign-in">

    <script>
        document.getElementById('sign-in').addEventListener('click', function() {
            window.location.href = 'registro.php';
        });

    </script>
            </div>
        </div>
        <div class="form-information">
            <div class="from-information-childs">
                <h2>Iniciar Sesion </h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook' ></i>
                    <i class='bx bxl-instagram-alt' ></i>
                </div>
                <p>Si ya Tienes Cuenta puedes dilijenciar tus datos en le siguiente formulario</p>

            <form class="form">
            <label>
                <i class='bx bxs-envelope' ></i>
                <input type="email" placeholder="Correo Electronico">
            </label>
            <label>
                <i class='bx bxs-lock-open' ></i>
                <input type="password" placeholder="Contraseña">
            </label>


            <input type="button" value="Iniciar Sesion" id="defi">

    <script>
        document.getElementById('defi').addEventListener('click', function() {
            window.location.href = 'servicio.html';
        });

    </script>

            </form>
            </div>
        </div>
    </div>    
</body>
</html>
