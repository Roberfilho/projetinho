<?php
include 'conexao.php';

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$result_usuario="INSERT INTO usuario (nome, email, senha) VALUES ('$nome' , '$email', '$senha' )";
$reaultado_usuario=mysqli_query($cone, $result_usuario);

if(mysqli_affected_rows($cone)!=0){
    echo"<script>
     alert('Usuario cadastrado com sucesso!');
     window.location.href='login.php';
     </script>";
           
    
}else{
   echo"<script>
     alert('Usuario nao cadastrado!');
     window.location.href='login.php';
     </script>";
           
}