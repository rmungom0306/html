<?php
$numero = random_int(1, 6);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dado aleatorio</title>
</head>
<body>

    <h1>Dado aleatorio</h1>

    <img src="<?php echo $numero; ?>.svg"
         alt="Dado"
         width="200">

    <p>Ha salido el número <?php echo $numero; ?></p>

    <form method="post">
        <button type="submit">Tirar el dado</button>
    </form>

</body>
</html>
