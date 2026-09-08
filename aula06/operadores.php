<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP básico</title>
</head>
<body>
    <?php
        $price = $_GET['p'];
        echo 'O preço do produto é R$'. number_format($price, 2, ',', '.'). '<br>';

        $price = $price + ($price * 10 / 100);
        echo 'O novo preço com 10% de aumento é R$'. number_format($price, 2, ',', '.');
    ?>
</body>
</html>