<?php

/**
 * letra_dni
 */
function letra_dni($dni)
{
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    $resto = $dni % 23;

    return $letras[$resto];
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
        <input type="number" name="dni" placeholder="Introduce los números">
        <button>Calcular</button>
    </form>

    <?php if (isset($_POST['dni']) && $_POST['dni'] !== ''): ?>

        <p>
            La letra de tu DNI es:
            <?= letra_dni($_POST['dni']) ?>
        </p>

    <?php endif; ?>

    <img src="mclovin.jpg" alt="McLovin">

</body>

</html>