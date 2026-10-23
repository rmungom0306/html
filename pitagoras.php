<?php

if (isset($_GET['a'])) { // Hay un parámetro 'a' en GET ?
    $a = $_GET['a'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitágoras</title>
</head>

<body>
    <h1>Teorema de Pitágoras</h1>
    <form method="GET" action="">
        <input type="number" name="a" placeholder="<?= isset($a) ? $a : 'Introduce un cateto' ?>">
        <input type="number" name="a" placeholder="<?= isset($a) ? $a : 'Introduce un cateto' ?>">

        <button>Comprobar</button>
    </form>

    <?php if (isset($mensaje)): ?>
        <?= $mensaje ?>
    <?php endif; ?>

</body>
</html>