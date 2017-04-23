<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/login.css">

   </head>

  

  <body>

  <section id="contenedorTitulo">
      <div class="callout text-center">
        <img src="../assets/img/logos/logo.png">
      </div>
    </section>

    <section id="contenedorMenu">
        <ul class="menu dropdown fontTitle align-spaced"data-dropdown-menu>
            <li><a href="home.php">Inicio</a></li>
            <li><a href="juegos en android.php">Juegos en android</a></li>
            <li><a href="retos.php">Retos</a></li>
            <li><a href="crea y publica.php">Crea y publica</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </section>

    <section>
      <div style="background-color: #494B58; border-color: #494B58;" class="callout text-center">
      </div>
    </section>

 

  <section> 
      <div class="input">
      <!--<h1 class="titulo">Logín</h1><br><br>-->
        <label class="text-input"> Usuario <input type="text" name="usuario"></label>
        <label class="text-input"> Contraseña <input type="password" name="contraseña"></label><br><br>
        <input class="button-input text-input" text-input" type="button" name="entrar" value="Entrar"><br><br>
      <div class="input">
        <p>¿Nuevo usuario?, <a class="a-input" href="registrarse.php">registrarse</a></p>
      </div>
    </div>


  </section>
  	
 
  
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
