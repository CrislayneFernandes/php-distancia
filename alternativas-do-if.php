<?php



$idade= 18;
$nacionalidade= 'brasileira';


if ($idade >=18 && $nacionalidade != 'brasileira'):
    echo 'Seja bem vindo';

elseif($idade < 18):
    echo 'Voce precisa ter 18 anos ou mais';

else:
    echo 'Em breve estaremos chegando no Brasil';
endif;

echo '<br><hr><br>';

