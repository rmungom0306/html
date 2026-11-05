<?php
function calcular_letra($numero)
{
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    return $letras[$numero % 23];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular letra DNI</title>
</head>

<body>

    <form method="POST" action="">
        <input type="number" name="dni" placeholder="Introduce los números del DNI">
        <button>Calcular</button>
    </form>

    <?php if (isset($_POST['dni'])): ?>

        <p>
            La letra de tu DNI es:
            <?= calcular_letra($_POST['dni']) ?>
        </p>

    <?php endif; ?>

</body>

</html>