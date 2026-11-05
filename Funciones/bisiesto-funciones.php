<?php

/**
 * es_bisiesto: Devuelve true si el año es bisiesto, false en caso contrario
 */
function es_bisiesto($a)
{
    if (($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0) {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es Bisiesto</title>
</head>

<body>

    <form method="POST" action="">
        <input type="number" name="a" placeholder="<?= isset($a) ? $a : 'Introduce un año' ?>">
        <button>Comprobar</button>
    </form>

    <?php if (isset($_POST['a'])): ?>

        <?php if (es_bisiesto($_POST['a'])): ?>
            <p><?= $_POST['a'] ?> es bisiesto</p>
        <?php else: ?>
            <p><?= $_POST['a'] ?> no es bisiesto</p>
        <?php endif; ?>

    <?php endif; ?>

</body>

</html>