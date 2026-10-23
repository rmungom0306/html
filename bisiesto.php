<?php

    if (isset($_GET['a'])) { // Hay un parámetro 'a' en GET ?
        $a = $_GET['a'];
        if (($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0) {
            $mensaje = "$a es bisiesto";
        } else {
            $mensaje = "$a no es bisiesto";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="">
        Año <input type="number" name="a">
        <button>Comprobar</button>
    </form>

    <?php if (isset($mensaje)): ?>
        <?= $mensaje ?>
    <?php endif; ?>

</body>
</html>