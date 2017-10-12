<?php

$dias_da_semana = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui' , 'Sex', 'Sab');
$meses = array(
    'Jan',
    'Fev',
    'Mar',
    'Abr',
    'Mai',
    'Jun',
    'Jul',
    'Ago',
    'Set',
    'Out',
    'Nov',
    'Dez',
);

echo $dias_da_semana[date('w')] . ', ' . date('d') . ' de ' . $meses[date('m')] . ' de ' . date('Y');
echo '<br/><hr/><br/>';
echo '<pre>';
print_r($meses);
print_r($meses[0]);
echo '</pre>';
echo '<br/><hr/><br/>';

echo '<pre>';
var_dump($meses);
var_dump($meses[0]);
echo '</pre>';

