<?php

function data_por_extenso($time){
    //$dias_da_semana = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui' , 'Sex', 'Sab');
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
    
    return date('d', $time) . ' de ' . $meses[date('m', $time)-1] . ' de ' . date('Y', $time);
}

