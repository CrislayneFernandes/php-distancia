<?php

header('Content-Type: text/html; charset=utf-8');

echo 'Ola mundo';
echo "Ola mundo";
echo ('Ola mundo');
echo ("Ola mundo");

$variavel= 13;
echo 'ola mundo' . '!' . $variavel;
// . concatenação
echo '<br>';
echo "ola mundo" . "!" . $variavel;
echo '<br>';
echo 'ola mundo . ! . $variavel';
//aspas simples nao procura variavel
echo '<br>';
echo "ola mundo . ! . \n$variavel";
//aspas duplas procura variavel
echo '<br>';
$var= print 'Ola mundo';

//print é um pouco mais lento que o echo
// echo nao permite $var
echo '<br>';
echo '<a href= "http://www.iparos.com.br">iparos</a>';
echo '<br>';
echo 'E ele falou: "Use aspas simpes. \'aspas simples com barrinha de escape\'"';