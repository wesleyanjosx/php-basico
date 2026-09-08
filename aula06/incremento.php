<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP básico</title>
</head>
<body>
    <?php
        $year = $_GET['a'];
        echo 'O ano atual é '. $year. ' e o ano anterior é '. --$year .'<br>';

    ?>
</body>
</html> 