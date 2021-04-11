<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Eventos</title>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Raúl,Lili,Pilu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!--cdn para los iconos-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/eventos.css" type="text/css"> <!--Enlace externo a CSS-->
  </head>
  <body>
    <div class="container">
      <header>
        <img src="../imagenes/logo.png" id="logo"/>
        <div id="carrito"><i class="fa fa-shopping-cart" ></i></div>
        <div id="login"><i class="fas fa-user"></i></div>
        <div id="search"><i class="fas fa-search" ></i></div>
        <ul>
          <li ><a id="home" href="home.php">HOME</a></li>
          <li ><a id="experiencias" href="experiencias.php">EXPERIENCIAS</a></li>
          <li ><a id="eventos" href="eventos.php">EVENTOS EMPRESA</a></li>
          <li ><a id="packs" href="packs.php">PACKS & GRUPOS</a></li>
          <li ><a id="sobre" href="nosotros.php">NOSOTROS</a></li>
          <li ><a id="blog" href="blog.php">BLOG</a></li>
          <li ><a id="contacto" href="contacto.php">CONTACTO</a></li>
        </ul>
      </header>
      <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="../imagenes/aircraft-1499171__480.webp" alt="Los Angeles" >
              <div class="carousel-caption">
                <h3>EXPERIENCIAS ÚNICAS</h3>
                <p>Sin riesgo no hay aventura, sumérgete en una nueva sensación...</p>
              </div>
            </div>

            <div class="item">
              <img src="../imagenes/mountains-276995__480.jpg" alt="Chicago" >
              <div class="carousel-caption">
              <h3>EXPERIENCIAS ÚNICAS</h3>
                <p>Sin riesgo no hay aventura, sumérgete en una nueva sensación...</p>
              </div>
            </div>
          
            <div class="item">
              <img src="../imagenes/man-384178__480.webp" alt="New York" >
              <div class="carousel-caption">
              <h3>EXPERIENCIAS ÚNICAS</h3>
                <p>Sin riesgo no hay aventura, sumérgete en una nueva sensación...</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
        <!-- Texto bajo carrusel -->
        <div id="texto">
          En Risk Adevntura, desde nuestros orígenes hemos tenido una obsesión, sorprender y emocionar
          ofreciendo un servicio y una experiencia única, experimentando las emociones, la adrenalina, la diversión,
          con los mejores técnivos...
          Somos los únicos que garantizamos una "EXPERIENCIA ÚNICA".
        </div>
        <!-- Separador efecto bolas -->
        <div id="bolitas">
          <div id="bola1" class="bola"></div>
          <div id="bola2" class="bola"></div>
          <div id="bola3" class="bola"></div>
          <div id="bola4" class="bola"></div>
          <div id="bola5" class="bola"></div>
          <div id="bola6" class="bola"></div>
          <div id="bola7" class="bola"></div>
          <div id="bola8" class="bola"></div>
          <div id="bola9" class="bola"></div>
          <div id="bola10" class="bola"></div>
          <div id="bola11" class="bola"></div>
          <div id="bola12" class="bola"></div>
          <div id="bola13" class="bola"></div>
          <div id="bola14" class="bola"></div>
          <div id="bola15" class="bola"></div>
          <div id="bola16" class="bola"></div>
          <div id="bola17" class="bola"></div>
          <div id="bola18" class="bola"></div>
          <div id="bola19" class="bola"></div>
          <div id="bola20" class="bola"></div>
          <div id="bola21" class="bola"></div>
          <div id="bola22" class="bola"></div>
          <div id="bola23" class="bola"></div>
          <div id="bola24" class="bola"></div>
          <div id="bola25" class="bola"></div>
          <div id="bola26" class="bola"></div>
        </div>
        <!-- Linea y circulo separador derecho -->
        <div id="linea"></div>
        <div id="circulo"></div>
      </section>  
      <footer>
      
      
      </footer>
      <script type="text/javascript" src="../js/eventos.js"></script> <!--Enlace externo a archivo JS-->
    </div> 
  </body>
</html>