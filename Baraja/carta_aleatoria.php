<?php
$palos=['c','p','d','t'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img style="height: 400px;" src="cartas/<?= $palos[rand(0,3)].rand(1,13) ?>.svg">
</body>
</html>