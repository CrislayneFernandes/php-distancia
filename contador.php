<?php

//include erro nao fatal
//require erro fatal
//require_once ou include_once só permite incluir uma vez o arquivo

require_once 'funcoes/data-por-extenso.inc.php';

$fim_do_mundo = mktime(0,0,0,12,11,2019);
$fim_do_mundo_seg = $fim_do_mundo - time();


echo data_por_extenso($fim_do_mundo);
echo '<br>';
echo 'Faltam ' . number_format($fim_do_mundo_seg, 0, ',' , '.') . ' seg para o fim do mundo';