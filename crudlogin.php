<?php
session_start();
include 'conexao.php';

    $email= $_POST['email'];
    $senha= $_POST['senha'];


   
$pegar = "SELECT * FROM  usuario WHERE email = '$email' AND senha = '$senha'";
$result= $cone->query($pegar);


if($result->num_rows>0){
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    header('location:index_1.php');
}else{
   echo"<script>
     alert('E-mail ou senha inválidos');
     window.location.href='login.php';
     </script>";
           
}

