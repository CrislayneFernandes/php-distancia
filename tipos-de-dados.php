<?php

//numeros inteiros
$variavel = 13;
echo is_integer($variavel);
echo '<br>';

// numeros com ponto flutuante - float
$variavel = 13.10;
echo is_float($variavel);
echo '<br>';

// string - texto
$variavel= 'Crislayne';
$variavel= "Crislayne";
echo is_string($variavel);
echo '<br>';


//boolean
$variavel= true;
$variavel = false;
echo is_bool($variavel);
echo '<br>';

//array
$variavel= array(1,2,3,10.1,'Crislayne',true);
echo is_array($variavel);
echo '<br>';

//objetos
//$variavel= new Objeto();

//recurso
// $variavel= mysql_connect('localhost','root');

//nulo
$variavel= null;

echo gettype($variavel);

