<?php

/*
 * count() - retorna o numero de posições existentes no array
 * 
 * in_array() -  retorna verdadeiro se o conteudo existe no array
 * array_key_exists() - retorna verdadeiro se a posição existe no array
 * isset() - retorna verdadeiro se existe algum conteudo valido na posicao do array
 * 
 * array_pop() - retira um elemento do final do array diminuindo o mesmo
 * array_shift() - retira um elemento do inicio do array diminuindo o mesmo
 * array_unshift() - adiciona valores no inicio do array
 * array_push() - adiciona valores no final do array
 * $array[] - adiciona valores no final do array
 * 
 * sort() - ordena o array pelos valores
 * asort() - ordena o array mantendo a associacao existente
 * ksort() - ordena pelas chaves
 * shufle() - mistura os valores
 */


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

$dados_pessoais = array(
                        'nome' => 'Crislayne',
                        'sobrenome' => 'Fernandes',
                        'sexo' => 'feminino',
                        'email' => 'cris2emalu@gmail.com',
                );

echo count($meses);

echo '<br><hr></br>';

if (in_array('Jan', $meses)){
    echo 'achei';
}else{
    echo 'Não achei';
}

echo '<br><hr></br>';

if (isset($dados_pessoais['telefone'])){
    echo 'achei';
}else{
    echo 'Não achei';
}

echo '<br><hr></br>';

if (array_key_exists('telefone', $dados_pessoais)){
    echo 'achei';
}else{
    echo 'Não achei';
}

echo '<br><hr></br>';

array_pop($dados_pessoais);
array_shift($dados_pessoais);
sort($dados_pessoais);
asort($dados_pessoais);
$dados_pessoais['nome'] = 'Crislayne Fernandes';


echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<br><hr></br>';

list ($janeiro, $fevereiro, , , $maio) = $meses;
echo $janeiro;
echo '<br>';
echo $fevereiro;
echo '<br>';
echo $maio;
echo '<br>';


