<?php
    if(!empty($_GET)){
        $a=$_GET['a'];
        if(($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0){
            $bisiesto=true;
        }else{
            $bisiesto=false;
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

    <?php if($bisiesto): ?>
        <p>Es bisiesto</p>
    <?php else: ?>
        <p>No es bisiesto</p>
    <?php endif; ?>
</body>
</html>