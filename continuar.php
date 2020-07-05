<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
?>

<HTML>
    <HEAD>
        <title>contraseña correcta</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>

    <BODY>
        <div style="text-align: center;">
                <img src="images/Aligo-Logo.jpg">
            <h1>contraseña correcta</h1>
            <form method="POST" action="/captiveportal/index.php">
                <input type="hidden" name="target" value="<?=$destination?>">
                <button type="submit">Continuar</button>
            </form>


        </div>

    </BODY>

</HTML>