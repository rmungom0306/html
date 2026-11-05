<?php
$n = $_GET['n'] ?? 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>
<body>

    <h1 style="font-size: 60px;">Tablas de Multiplicar</h1>

    <form method="GET">
        <select name="n" style="font-size: 25px;">
            <?php for($i=1; $i<=10; $i++): ?>
                <option value="<?= $i ?>" <?= $n == $i ? 'selected' : '' ?>>
                    Tabla del <?= $i ?>
                </option>
            <?php endfor; ?>
        </select>

        <button type="submit" style="font-size: 25px;">Mostrar</button>
    </form>

    <?php if(isset($_GET['n'])): ?>

        <table border="1" style="font-size: 30px;">
            <tr>
                <?php for($i=1; $i<=10; $i++): ?>
                    <td><?= $n * $i ?></td>
                <?php endfor; ?>
            </tr>
        </table>

    <?php endif; ?>

</body>
</html>
