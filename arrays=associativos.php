<?php

$dados_pessoais = array(
                        'nome' => 'Crislayne',
                        'sobrenome' => 'Fernandes',
                        'sexo' => 'feminino',
                        'email' => 'cris2emalu@gmail.com',
                );

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<br><hr></br>';

echo $dados_pessoais['nome'];

/* get e post sao arrays associativos
$_GET['variavel'];
$_POST['variavel'];
*/