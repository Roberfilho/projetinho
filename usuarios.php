
<?php
include 'conexao.php';

$sql_code = "SELECT * FROM usuario";
$sql_query = $cone->query($sql_code) or die ($mysqli->error);
$linha = $sql_query-> fetch_assoc();
?>
<html lang="en">

<head>
     <?php
       
        session_start();
        
        if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])== true))
        {
        session_unset();
        echo"<script>
        alert('Esta página so pode ser acessada por usuario logado');
        window.location.href='login.php';
        </script>";
        }
        $logado= $_SESSION['email'];
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carros</title>
    <link rel="icon" href="img/favicon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/opala.jpeg" alt="logo"> </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index_1.php">Inicio</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="usuarios.php">Usuarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sair.php">Sair</a>
                                </li>
                                <li class="nav-item dropdown">
                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--::exclusive_item_part start::-->
    <section class="exclusive_item_part blog_item_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Lista de usuários cadastrados</p>
                        
                    </div>
               
       <table border="10" cellpading="20">
    <tr class="titulo">
           <td>ID</td>
           <td>NOME </td>
           <td>E-MAIL</td>
           <td>SENHA</td>
           <td>ALTERAR</td>
       </tr>
           <?php
           do{
               
           ?>    
           
       
       <tr>
           <td width="100"><?php echo $linha['id']; ?></td>
           <td width="100"><?php echo $linha['nome']; ?></td>
           <td width="100"><?php echo $linha['email']; ?></td>
           <td width="100"><?php echo $linha['senha']; ?></td>
           <td> <a href=" <?php echo "editar.php?id=" . $linha['id'] . "&nome" . $linha['nome'] . "&email" . $linha['email'] . "&senha" . $linha['senha'] ?>">editar</a>
              <a href=" <?php echo "excluir.php?id=" . $linha['id'] . "&nome" . $linha['nome'] . "&email" . $linha['email'] . "&senha" . $linha['senha'] ?>">excluir</a>
       </td>
       </tr>
           <?php } while($linha = $sql_query-> fetch_assoc());?>
        </table>

        
                
                        
</body>

</html>

