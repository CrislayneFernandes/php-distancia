<?php 
    
    $_sucesso = false;
    
    if (isset($_POST['nome'])){
        $_aviso = '';      
        $_nome = $_POST['nome'];
        $_email = $_POST['email'];
        $_area = $_POST['area'];
        $_mensagem = $_POST['mensagem'];
        
        if (empty($_nome)){
            $_aviso .= 'Favor preencher o nome <br/>';
        }
        if (empty($_email)){
            $_aviso .= 'Favor preencher o email <br/>';
        }
        if  (empty($_area)){
            $_aviso .= 'Favor preencher a area <br/>';
        }
        if (empty($_mensagem)){
            $_aviso .= 'Favor preencher a mensagem <br/>';
        }
        if (empty($_aviso)){
            $_aviso  = 'Recebemos sua mensagem. Dados enviados: <br/>';
            $_aviso .= 'Nome: '. $_nome .'<br/>';
            $_aviso .= 'Email: ' . $_email . '<br/>';
            $_aviso .= 'Mensagem: ' . $_mensagem . '<br/>';
            $_aviso .= '<br/><br/><a href = "contato.php">Voltar</a>';
            
            $_sucesso = true;
        }        
        else{
            $_aviso = 'Você não enviou o formulario';
        }
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
        <?php if (!empty($_aviso)): ?>
            <h2><?php print $_aviso; ?></h2>
        <?php endif; ?>
        <?php if (!$_sucesso): ?>    
            <form action="contato.php" method="post">
                <label for="nome">Nome:</label><input type="text" name="nome"  id="nome" value="<?php if (isset($_nome)){ echo $_nome; }?>"/> <br/>
                <label for="email">Email:</label><input type="text" name="email"  id="email" value="<?php if (isset($_email)){ echo $_email; }?>"/> <br/>
                Selecione para quem quer enviar a mensagem: <br/>
                <select name="area">
                    <option value="vendas">Vendas</option>
                    <option value="suporte">Suporte</option>
                </select><br/>
                Mensagem:<br/>
                <textarea name="mensagem" cols="40" rows="10"><?php if (isset($_mensagem)){ echo $_mensagem; }?></textarea>
                <br/>
                <input type="submit" value="Enviar"/>
            </form>
        <?php endif; ?>
        </body>
</html>
