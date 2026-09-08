<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP básico</title>
</head>
<body>
    <?php
        $x = 'abc';
        $$x = 'def';
        echo 'A variável $x é '. $x .'<br>';
        echo 'A variável variável $$x é '. $$x .'<br>';
    ?>
</body>
</html> 