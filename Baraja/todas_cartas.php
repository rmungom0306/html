<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraja de cartas</title>
</head>
<body>
    <?php for($i=1; $i<=13; $i++): ?>
        <img style="height:170px;" src="cartas/c<?php echo $i ?>.svg">
    <?php endfor; ?>
    <hr>
    <?php for($i=1; $i<=13; $i++): ?>
        <img style="height:170px;" src="cartas/p<?php echo $i ?>.svg">
    <?php endfor; ?>
    <hr>
    <?php for($i=1; $i<=13; $i++): ?>
        <img style="height:170px;" src="cartas/d<?php echo $i ?>.svg">
    <?php endfor; ?>
    <hr>
    <?php for($i=1; $i<=13; $i++): ?>
        <img style="height:170px;" src="cartas/t<?php echo $i ?>.svg">
    <?php endfor; ?>
</body>
</html>