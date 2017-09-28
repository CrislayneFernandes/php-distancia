<?php

header('Content-Type: text/html; charset=utf-8');

for ($i = 0; $i < 10; $i++){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';

for ($i = 10; $i > 0; $i--){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';

$i = 0;
while ($i < 10){
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}

echo '<br><hr><br>';

//do while vai mostrar o numero 10 pq sempre executa primeiro depois confere
$i = 0;
do {
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while ($i < 10);