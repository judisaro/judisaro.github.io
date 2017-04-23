<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarse</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/registrarse.css">

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
        <div class="row">
          <div class="column small-12 large-6">
            <label class="text-input"> Nombres <input type="text" name="usuario"></label>
          </div>
          <div class="column">
            <label class="text-input"> Apellidos <input type="text" name="usuario"></label>
          </div>
        </div>  

        <div class="row">
          <div class="column small-12 large-6">
            <label class="text-input"> e-mail <input type="text" name="usuario"></label>
          </div>
          <div class="column">
            <label class="text-input"> Contraseña <input type="password" name="usuario"></label>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="column small-12 large-6">
            <input class="button-input text-input text-input" type="button" name="entrar" value="Entrar"><br><br>
          </div>
          
        </div>
        
        <div class="input row centered small-centered">
          <div class="column small-12 large-6">
            <p class="a-input">¿Nuevo usuario?, <a href="login.php">login</a></p>
          </div>
        </div>

      </div>

  </section>
  	
 
  
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
