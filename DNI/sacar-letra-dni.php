<?php

/**
 * letra_dni: Usando array de letras
 */
function letra_dni($dni)
{
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    $resto = $dni % 23;

    return $letras[$resto];
}

/**
 * letra_dni_2: Usando cadena de caracteres
 */
function letra_dni_2($dni)
{
    $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';

    return $letras[$dni % 23];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular letra DNI</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        img {
            width: 300px;
            margin-top: 15px;
        }
    </style>

</head>

<body>

    <form method="POST" action="">
        <input type="number" name="dni" placeholder="Introduce los números" min="0" max="99999999" required>
        <button type="submit">Calcular</button>
    </form>

    <?php if (isset($_POST['dni']) && $_POST['dni'] !== '' && is_numeric($_POST['dni']) && $_POST['dni'] >= 0 && $_POST['dni'] <= 99999999): ?>

        <p>La letra es <?= letra_dni_2((int)$_POST['dni']) ?></p>

    <?php elseif (isset($_POST['dni'])): ?>

        <p>DNI incorrecto</p>

    <?php endif; ?>

    <img src="mclovin.jpg" alt="McLovin">

</body>

</html>