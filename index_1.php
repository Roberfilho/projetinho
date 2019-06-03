
<!doctype html>
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
                                    <a class="nav-link" href="sair.php"><span class="icon"></span> Sair</a>
                                    
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
                        <p>Alguns carros marcantes</p>
                        <h2>Brasil, Alemanha e Itália </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/golquadrado1.jpg" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Gol</h3>
                            <p>Ele pode não estar no seu auge, mas tem uma longa e importante história no Brasil. Estamos falando do Volkswagen Gol, modelo que completa neste mês 35 anos, sendo que destes, passou 27 na liderança do mercado nacional. Projetado e desenvolvido no Brasil, o Gol foi lançado no dia 8 de maio de 1980 e está em sua 5ª geração. Em seu histórico há marcas importantes, recordes e inovações do setor. Desde seu lançamento, já foram produzidas mais de 8,7 milhões de unidades, sendo 7.755.071 feitas no Brasil e as demais na Argentina, com peças enviadas daqui. Outra marca importante é a soma de 6.581.972 unidades comercializadas no mercado nacional e 1,2 milhão de unidades exportadas para 66 países, números que o transforma no automóvel brasileiro historicamente mais produzido, comercializado e exportado da indústria nacional. O Gol também é o 8° modelo mais produzido do Grupo Volkswagen no mundo e o 7º mais produzido da marca Volkswagen no mundo. Antes dele os mais produzidos são, na ordem: Golf, Beetle, Jetta (incluindo Bora, Vento e Sagitar), Polo (hatch), Passat (incluindo Santana), Tranporter e Audi A4.</p>
                            <a href="brasil.php" class="btn_3">Ver mapa <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/fusca.jpg" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Fusca</h3>
                            <p>Se você acha que vamos falar que o Fusca é o carro mais alemão de todos por causa de sua nefasta associação com o regime nazista, se enganou – é muito mais do que isto. É muito mais do que isto: estamos falando de um projeto que nasceu nos anos 1930 como um meio de transporte popular e barato, mas acabou ajudando a estabelecer uma fabricante de automóveis, lutou na Segunda Guerra, motorizou a Alemanha depois do conflito e permaneceu em produção por mais seis décadas. </p>
                            <a href="alemana.php" class="btn_3">Ver mapa <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/alfa.jpg" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Alfa Romeo Spider</h3>
                            <p>O Alfa Spider foi produzido entre 1966 e 1994, com discretas mudanças estéticas. A pequena Alfa foi muitas vezes apelidada de “Ferrari dos pobres”, mas isso até pode ser visto como um elogio. Sobreviveu ao tempo e ficou bem cotada entre os jornalistas especializados e pelo público, pelas belas linhas. dirigibilidade agradável e carroceria conversível.

Lançada no Salão de Genebra em março de 1966, utilizava inicialmente motor 1.6 de quatro cilindros, com o de 1.750 cm3 apresentado em 1967 e um menor, de 1.290 cm3 (num carro mais básico) acrescentado em 1968. A Alfa Romeo continuou a refinar o carrinho nas décadas seguintes, mas manteve o estilo do original, que só saiu de linha em 1994. </p>
                            <a href="italia.php" class="btn_3">Ver mapa <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                        <img src="img/carro4.jpeg" alt="">
                    </div>
                </div>
                
                        
</body>

</html>

