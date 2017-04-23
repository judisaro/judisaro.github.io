<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jegos en Canvas</title>
    <link rel="stylesheet" href="../../css/foundation.css">
    <link rel="stylesheet" href="../../css/app.css">
    <script type="text/javascript" src="serpiente.js"></script>

   </head>

  

  <body>

  <section id="contenedorTitulo">
      <div class="callout text-center">
        <img src="../../../assets/img/logos/logo.png">
      </div>
    </section>

    <section id="contenedorMenu">
        <ul class="menu dropdown fontTitle align-spaced"data-dropdown-menu>
            <li><a class="boton" href="home.php">Inicio</a></li>
            <li><a href="juegos en android.php">Juegos en android</a></li>
            <li><a href="retos.php">Retos</a></li>
            <li><a href="crea y publica.php">Crea y publica</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </section>

    <section style="text-align:center; position: relative; top: 20px;" id="contenedorCanvas">
      <canvas style="display: inline; " width="900" height="500" id="canvas"></canvas>
    </section>

    <script type="text/javascript">
      inicio();
    </script>
    
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/vendor/what-input.js"></script>
    <script src="../../js/vendor/foundation.js"></script>
    <script src="../../js/app.js"></script>
  </body>
</html>
