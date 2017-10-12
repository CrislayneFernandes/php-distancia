<?php
if (isset($_GET['minimo']) && isset($_GET['maximo']) && isset($_GET['quantidade'])){
    echo '<a href =gerador=numeros.php>Voltar</a><br/>';
    $_minimo = $_GET ['minimo'];
    $_maximo = $_GET ['maximo'];
    $_quantidade = $_GET ['quantidade'];
    
    for ($_i=0; $_i<$_quantidade; $_i ++){
    echo mt_rand($_minimo, $_maximo) . ' ';
}
}else{
    $_quantidade = 10000;
?>
<a href="gerador=numeros.php?minimo=10&maximo=19&quantidade=100">Minimo=10 Maximo=19</a><br/>
<a href="gerador=numeros.php?minimo=20&maximo=29&quantidade=100">Minimo=20 Maximo=29</a><br/>
<a href="gerador=numeros.php?minimo=30&maximo=39&quantidade=100">Minimo=30 Maximo=39</a><br/>
<a href="gerador=numeros.php?minimo=40&maximo=49&quantidade=100">Minimo=40 Maximo=49</a><br/>
<?php
}
?>

