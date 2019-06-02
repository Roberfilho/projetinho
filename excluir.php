<?php
session_start();
include 'conexao.php';
$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "DELETE FROM usuario WHERE id = '$id'";
$resultado_usuario= mysqli_query($cone, $result_usuario);

if(mysqli_affected_rows($cone)){
    echo"<script>
        alert('USUARIO EXCLUIDO COM SUCESSO!!');
        window.location.href='usuarios.php';
        </script>";
}else{
    echo 'USUARIO NAO FOI EXCLUIDO !!';
}
?>
