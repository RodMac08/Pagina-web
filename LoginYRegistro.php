<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="StyleRegistro.css">
    <script>
        function validarRegistro() {
            var id = document.getElementById('id').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var phone = document.getElementById('phone').value;

            // Expresiones regulares para validación
            var regexId = /^[a-zA-Z0-9]+$/;
            var regexName = /^[a-zA-Z\s]+$/;
            var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var regexPassword = /^[a-zA-Z0-9]+$/;
            var regexPhone = /^[0-9]+$/;

            // Validar id
            if (!regexId.test(id)) {
                alert('Por favor, ingresa un id válido (solo letras y números).');
                return false;
            }

            // Validar nombre
            if (!regexName.test(name)) {
                alert('Por favor, ingresa un nombre válido.');
                return false;
            }

            // Validar correo electrónico
            if (!regexEmail.test(email)) {
                alert('Por favor, ingresa un correo electrónico válido.');
                return false;
            }

            // Validar contraseña
            if (!regexPassword.test(password)) {
                alert('Por favor, ingresa una contraseña válida (solo letras y números).');
                return false;
            }

            // Validar teléfono
            if (!regexPhone.test(phone)) {
                alert('Por favor, ingresa un número de teléfono válido.');
                return false;
            }

            return true; // Si todas las validaciones pasan, el formulario es válido
        }

        function validarInicioSesion() {
            var nameL = document.getElementById('nameL').value;
            var emailL = document.getElementById('emailL').value;
            var passwordL = document.getElementById('passwordL').value;

            // Expresiones regulares para validación
            var regexNameL = /^[a-zA-Z\s]+$/;
            var regexEmailL = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var regexPasswordL = /^[a-zA-Z0-9]+$/;

            // Validar nombre
            if (!regexNameL.test(nameL)) {
                alert('Por favor, ingresa un nombre válido.');
                return false;
            }

            // Validar correo electrónico
            if (!regexEmailL.test(emailL)) {
                alert('Por favor, ingresa un correo electrónico válido.');
                return false;
            }

            // Validar contraseña
            if (!regexPasswordL.test(passwordL)) {
                alert('Por favor, ingresa una contraseña válida (solo letras y números).');
                return false;
            }

            return true; // Si todas las validaciones pasan, el formulario es válido
        }
    </script>
</head>
<body>
    <!--Inicio header-->
    <header class="header">
        <!--Inicio menu-->
        <div class="menu container">
            <a href="index.html" class="logo">TecNopolis</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
        </div>
        <!--Fin menu-->        
     </header>
     <!--Fin header-->

    <!--Inicio del formulario de registro--> 
    <form method="post" id="formulario" onsubmit="return validarRegistro();">
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input id="id" type="text" name="id" placeholder="id personalizado">
        </div>

        <div class="input-wrapper">
            <input id="name" type="text" name="name" placeholder="Nombre">
        </div>

        <div class="input-wrapper">
            <input id="email" type="text" name="email" placeholder="Correo">
        </div>

        <div class="input-wrapper">
            <input id="password" type="password" name="password" placeholder="Contraseña">
        </div>

        <div class="input-wrapper">
            <input id="phone" type="tel" name="phone" placeholder="Telefono">
        </div>

        <input class="btn" type="submit" name="register" value="Registrarse">
    </form>
    <!--Fin del formulario de registro-->
    <br><br>
    <h2>O</h2>
    <!--Inicio del formulario de inicio-->
    <form action="controlador.php" method="post" id="formulario" onsubmit="return validarInicioSesion();">
        <p>Inicia sesión</p>
        <?php
            include ("user.php");
            include ("controlador.php");
        ?>

        <div class="input-wrapper">
            <input id="nameL" type="text" name="nameL" placeholder="Nombre">
        </div>

        <div class="input-wrapper">
            <input id="emailL" type="email" name="emailL" placeholder="Correo">
        </div>

        <div class="input-wrapper">
            <input id="passwordL" type="password" name="passwordL" placeholder="Contraseña">
        </div>

        <input class="btn" type="submit" name="login" value="Iniciar sesión">
    </form>

    
     <?php
    include("RegistrarPag.php");
    ?>
</body>
</html>