<?php if(!empty($_POST['nome'])){ 
    $_mensagem ='';
    $_mensagem .= 'Obrigado(a)';
    $_mensagem .= $_POST['nome'] .'<br/>';
    $_mensagem .= $_POST['email'].'<br/>';
    $_mensagem .= $_POST['area'].'<br/>';
    $_mensagem .= $_POST['mensagem'].'<br/>';
    }else{
        $_mensagem = 'Favor preencher corretamente o formulario' . '<br>';
        $_mensagem .= '<a href="formulario.html">Voltar</a>';
    } 
      ?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php echo $_mensagem; ?> 
        
        </form>
    </body>
</html>
