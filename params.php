<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php if(empty($_GET)): ?>
        <p>No hay parámetros</p>
    <?php else: ?>
        <p>Hay parámetros</p>
        <pre>
            <?php print_r($_GET); ?>
        </pre>
    <?php endif; ?>
</body>
</html>