<html> 
    <body>
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
    </head>
        <iframe   
            width="1500"   
            height="1000"   
            frameborder="0" 
            style="border:0"   
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyACZpY0MqnxqseMOFt8EnSTUAicGNYfMMc&q=Alemanha" allowfullscreen>
        </iframe> 
      </body> 
       
</html>
  