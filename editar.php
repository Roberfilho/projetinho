<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <?php
        $id = filter_input(INPUT_GET, "id");
        $nome= filter_input(INPUT_GET, "nome");
        $email = filter_input(INPUT_GET, "email");
        $senha = filter_input(INPUT_GET, "senha");
                
        
        ?>
    </head>
    <body>
        <div id="conteudo">
            <h1>Alterar contato</h1>
            <p>
            <form action="alterar.php">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                Nome: <input type="text" name="nome" value="<?php echo $nome ?>"/><br>
                E-mail: <input type="text" name="email" value="<?php echo $email ?>"/><br>
                Senha: <input type="text" name="senha" value="<?php echo $senha ?>"/><br>
                
                <input type="submit" value="Alterar" />
                
            </form>
        </p>
    </body>
</html>
