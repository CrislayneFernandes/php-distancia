<?php

$var1 = 10;
$var2 = 20;
$var3 = 30;

echo $var1 + $var2;

echo '<br>';

echo $var1 - $var2;

echo '<br>';

echo $var1 * $var2;

echo '<br>';

echo $var1 / $var2;

echo '<br>';

//modulo (resto da divisao)
echo $var1 % 3;
echo '<br>';
echo $var2 % 3;
echo '<br>';
echo $var3 % 3;
echo '<br>';

echo $var1 + $var2 * $var3;
echo '<br>';
echo ($var1 + $var2) * $var3;

//incremento
$var1 = $var1 + 1;
$var1++;
$var1--;

$var1 = $var1 + 10;
//ou
$var1 += 10;
//praticamente
$aviso= '';
$aviso .= 'minha mensagem de aviso';
//ou
$aviso = $aviso . 'minha mensagem de aviso';
echo $var1;
