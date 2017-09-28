<?php

/*
for ($i=0; $i<10000; $i++){
    echo mt_rand(0, 9).' ';
}
 * 
 */

//arredonda pra baixo
echo floor(5.9);
echo '<br>';
//arredonda pra cima
echo ceil(5.9);
echo '<br>';
//arredonda mais proximo
echo round(5.9);
echo '<br>';

//formato de valor em real
$valor= 1234555.91;
echo 'R$ '. number_format($valor,2,',','.');
echo '<br>';

//tira o negativo - numero absoluto
echo abs(-10);
echo '<br>';
echo abs(10);
echo '<br>';
//pow potencializa o numero
echo pow(2, 4);
echo '<br>';
//maximo e minimo
echo max(1,2,3,4,5,6,7);
echo '<br>';
echo min(1,3,5,6,7,98,5);
echo '<br>';

//converte para hexadecimal e vice versa
echo dechex(255);
echo '<br>';
echo hexdec(100);
echo '<br>';

//converte para binario e vice versa
echo decbin(2);
echo '<br>';
echo bindec(101);

