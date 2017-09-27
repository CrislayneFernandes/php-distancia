

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
// acentuacao: header('Content-Type: text/html; charset=utf-8'); 

$nome= 'Crislayne';
$crislayne= <<<QQC
exemplo de variavel definida pela sintaxe heredoc <br/>
é possivel expandir variaveis $nome;
QQC;

echo $crislayne;
?>
    </body>
</html>