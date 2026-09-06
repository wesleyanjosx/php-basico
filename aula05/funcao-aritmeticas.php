<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 PHP</title>
    <style type="text/css">
        body {
            background-color: #f2f2f2;
            font-size: 1.2em;
            color: rgba(0,0,255,.8);
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $v1 = $_GET['x'];
        $v2 = $_GET['y'];

        echo '<h2>Valores recebidos: '.$v1.' e '.$v2.'</h2><br>';

        echo 'O valor absoluto de '. $v2 .' é '. abs($v2) .'<br>';
        echo 'O valor de '. $v1 .'<sup>'. $v2 .'</sup> é '. pow($v1, $v2) .'<br>';
        echo 'A raiz de '. $v1 .' é '. sqrt($v1). '<br>';
        echo 'O valor de '. $v2 .' arredondado é '. round($v2). '<br>';
        echo 'O valor de '. $v2 .' arredondado para cima é '. ceil($v2). '<br>';
        echo 'O valor de '. $v2 .' arredondado para baixo é '. floor($v2). '<br>';
        echo 'A parte inteira de '. $v2 .' é '. intval($v2). '<br>';
        echo 'O valoe de '. $v1 .' em moeda é R$'. number_format($v1, 2, ',', '.'). '<br>';
    ?>
</body>
</html>