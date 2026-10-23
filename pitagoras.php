<?php
// Comprobamos que se han enviado los dos números por el formulario
// y que ninguno está vacío.
if (isset($_GET['a']) && isset($_GET['b']) && $_GET['a'] != "" && $_GET['b'] != "") {

    // Guardamos el primer cateto en la variable $a
    $a = $_GET['a'];

    // Guardamos el segundo cateto en la variable $b
    $b = $_GET['b'];

    // Calculamos la hipotenusa con el teorema de Pitágoras
    $h = sqrt(($a * $a) + ($b * $b));

    // Guardamos el resultado en un mensaje para mostrarlo después
    $mensaje = "La hipotenusa es: " . $h;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Indicamos que usamos caracteres como la ñ y las tildes -->
    <meta charset="UTF-8">

    <!-- Adaptamos la página al tamaño de la pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título que aparece en la pestaña del navegador -->
    <title>Pitágoras</title>
</head>
<body>

    <!-- Título principal de la página -->
    <h1>Teorema de Pitágoras</h1>

    <!-- Formulario que envía los datos mediante GET -->
    <form method="GET" action="">

        <!-- Campo para introducir el primer cateto.
             Si ya se ha enviado, mostramos el número anterior. -->
        <input type="number" step="any" name="a"
               placeholder="<?= isset($a) ? $a : 'Introduce un cateto' ?>" required>

        <!-- Campo para introducir el segundo cateto -->
        <input type="number" step="any" name="b"
               placeholder="<?= isset($b) ? $b : 'Introduce otro cateto' ?>" required>

        <!-- Botón para enviar los números y calcular -->
        <button type="submit">Comprobar</button>

    </form>

    <!-- Si existe el mensaje, mostramos el resultado -->
    <?php if (isset($mensaje)): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>

</body>
</html>
