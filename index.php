<?php
require_once('helper.php');
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
</head>
<body>
        <div style="text-align: center;">
    <!-- Se va a procesar en login.php y se enviará por POST, no por GET-->
    <img src="images/Aligo-Logo.jpg">
    <h1>Ingresa tus credenciales de red</h1>
        <p>Nombre del equipo: <?=getClientHostName($_SERVER['REMOTE_ADDR']);?></p>
        <p>Dirección MAC:  <?=getClientMac($_SERVER['REMOTE_ADDR']);?></p>
        <p>Dirección IP: <?=$_SERVER['REMOTE_ADDR'];?></p>
        <form action="login.php" method="post">
            <!--
                Nota: el atributo name es importante, pues lo vamos a recibir de esa manera
                en PHP
            -->
            <input name="usuario" type="text" placeholder="Usuario">
            <br><br>
            <input name="palabra_secreta" type="password" placeholder="Contraseña">
            <br><br>
            <!--Lo siguiente envía el formulario-->
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>