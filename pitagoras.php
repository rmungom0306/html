
<?php
if (isset($_GET['a']) && isset($_GET['b']) && $_GET['a'] != "" && $_GET['b'] != "") {
    $a = $_GET['a'];
    $b = $_GET['b'];

    $h = sqrt(($a * $a) + ($b * $b));

    $mensaje = "La hipotenusa es: " . $h;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitágoras</title>
</head>
<body>
    <h1>Teorema de Pitágoras</h1>

    <form method="GET" action="">
        <input type="number" step="any" name="a"
               placeholder="<?= isset($a) ? $a : 'Introduce un cateto' ?>" required>

        <input type="number" step="any" name="b"
               placeholder="<?= isset($b) ? $b : 'Introduce otro cateto' ?>" required>

        <button type="submit">Comprobar</button>
    </form>

    <?php if (isset($mensaje)): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>

</body>
</html>
