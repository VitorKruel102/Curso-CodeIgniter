<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale='1.0'">
    <title>Document</title>
</head>
<body>
    <h1>Olá, Mundo! <?=$frase?></h1>

    <ul>
        <?php foreach ($marcas as $marca): ?>
            <li><?= $marca ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>