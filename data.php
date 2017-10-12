<?php
echo date('d') . '/' . date('m') . '/' . date('y');
echo '<br/>';
echo date('d/m/Y');
echo '<br/><hr/><br/>';
echo time();
echo '<br/><hr/><br/>';
$agora = time();
$prazo = time() + ((60*60*24) + 30);
echo $prazo;
echo '<br/><hr/><br/>';
echo date('d/m/Y', $prazo);
$fim_do_mundo = mktime(0,0,0,12,11,2019);
echo '<br/><hr/><br/>';
echo $fim_do_mundo;
echo '<br/><hr/><br/>';
echo date('d/m/y', $fim_do_mundo);
$fim_do_mundo_seg = $fim_do_mundo - time();
echo '<br/><hr/><br/>';
echo 'Faltam ' . number_format($fim_do_mundo_seg, '0', ',', '.'). ' seg para o fim do mundo';

