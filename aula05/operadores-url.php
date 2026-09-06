<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 PHP</title>
</head>
<body>
    <?php
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];

        echo 'A soma vale '. $n1 + $n2.'<br>';
        echo 'A subtração vale '. $n1 -$n2.'<br>';
        echo 'A multiplicação vale '. $n1 * $n2.'<br>';
        echo 'A divisão vale '. $n1 / $n2.'<br>';
        echo 'A modulo vale '. $n1 % $n2.'<br>';

        $m = ($n1 + $n2) / 2;
        echo 'A média vale '. $m.'<br>';
    ?>
</body>
</html>