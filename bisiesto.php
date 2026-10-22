<?php
    if(!empty($_GET)){
        $a = $_GET['a'];

        if(($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0){
            $bisiesto = true;
        }else{
            $bisiesto = false;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisiesto</title>
</head>
<body>
    <form method="GET" action="">
        Año <input type="number" name="a" required>
        <button type="submit">Comprobar</button>
    </form>

    <?php if(isset($bisiesto)): ?>
        <?php if($bisiesto): ?>
            <p>Es bisiesto</p>
        <?php else: ?>
            <p>No es bisiesto</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
