<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age = 30;
        $money = 1420;
        $name = 'Wesley Anjos';
        echo $age.'<br>';
        echo number_format($money, 2, ',', '.').'<br>';
        echo $name.'<br>';
    ?>
</body>
</html>