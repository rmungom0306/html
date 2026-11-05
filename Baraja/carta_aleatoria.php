<?php
$palos = ['c', 'p', 'd', 't'];
$cartas = [];

while(count($cartas) < 5) {
    $carta = $palos[rand(0,3)] . rand(1,13);

    if(!in_array($carta, $cartas)) {
        $cartas[] = $carta;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Póker</title>
</head>
<body>

    <?php foreach($cartas as $carta): ?>
        <img style="height: 200px;" src="cartas/<?= $carta ?>.svg">
    <?php endforeach; ?>

</body>
</html>