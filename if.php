<?php

$idade= 18;

if ($idade >= 18){
    echo 'Você é maior de idade';
}

/*==
 * !=
 * >
 * <
 * >=
 * <=
 */

echo '<br><hr><br>';

$nacionalidade= 'brasileira';

if ($idade >=18 && $nacionalidade != 'brasileira'){
    echo 'Seja bem vindo';
}
else{
    echo 'Voce nao tem acesso a isto';
    
    }
    
/*&&
 * ||
 * 
 */
    
echo '<br><hr><br>';

if ($idade >=18 && $nacionalidade != 'brasileira'){
    echo 'Seja bem vindo';
}
elseif($idade < 18){
    echo 'Voce precisa ter 18 anos ou mais';
    
    }
else{
    echo 'Em breve estaremos chegando no Brasil';
}

echo '<br><hr><br>';

$verdade= false;

if (!$verdade){
    echo 'Nao é veradade';
}
