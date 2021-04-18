<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nosotros Risk Adventure</title><!-- título-->
    <meta charset="utf-8"> <!--juego caracteres del lengiaje-->
    <meta name="keywords" content=""><!-- palabras clave-->
    <meta name="description" content=""><!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/nosotro.css" type="text/css"> <!--Enlace externo a CSS-->
  </head>
  <body>

    <!-- va todo el documento dentro de una caja con clase container que mediante Bootstrap nos permitirá hacer
     nuestra página responsive y que se adapte a diferentes tamaños de pantalla. Para ello nos serviremos también
      de las media queries @-->

    <div class="container">
                                                      <!-- HEADER----COMUN-->
        <!-- iconos-->
        <header>
          <div class="row">
              <div id="iconos" class="col-md-12 col-xs-12 ">
                <i class="fa fa-shopping-cart" id="carrito"></i>
                <i class="fas fa-user" id="login"></i>
                <i class="fas fa-search" id="buscar"></i>
              </div>
          </div>
          <div class="row">
          <!-- logo-->
            <div class="col-md-4 " id="logo1"><img src="../imagenes/header_logo.png" id="logo"/> </div>
            <!-- menu ------------NAV INTEGRADO EN EL HEADER---COMÚN-->
            <nav class="col-md-8 col-xs-12 " id="menu">
                <ul>
                  <li ><a id="home" href="home.php">HOME</a></li>
                  <li ><a id="experiencias" href="experiencias.php">EXPERIENCIAS</a></li>
                  <li ><a id="eventos" href="eventos.php">EVENTOS EMPRESA</a></li>
                  <li ><a id="packs" href="packs.php">PACKS & GRUPOS</a></li>
                  <li ><a id="sobre" href="nosotros.php">NOSOTROS</a></li>
                  <li ><a id="blog" href="blog.php">BLOG</a></li>
                  <li ><a id="contacto" href="contacto.php">CONTACTO</a></li>
                </ul>
            </nav>
          </div>
        </header>
        <!-- texto inicio-->
        <section class="row">
          <div id=textonosotros class="col-md-12">
          <div>Quiénes Somos</div>
        </div>
          <div id="texto" class="col-sm-12">
            <div> Risk Adventure, desde nuestros orígenes hemos tenido una obsesión , sorprender y emocionar ofreciendo un servicio y una experiencia
única, exprimiendo las emociones, la adrenalina, la diversión, con los mejores equipos técnicos...<br>
RISK ADVENTURE nació tras una tredipante aventura de 3 amigos, tras las dificultades de esaaventura decidimos que cualquier aventurero
necesitaba un servicio completo, seguro y de calidad y estaba en nuestras manos como profesionales ofrecer una experiencia de calidad,
única para que todos tuvieran la oportunidad de disfrutar 100% de un servicio TOP.
Somos los únicos que te garantizamos una "EXPERIENCIA ÚNICA"
            </div>
          </div>
        </section>                                             
                                                       <!-- SECTION-->
                                                     <!-- FOOTER-----COMÚN-->
        <footer class="row" >
            <!-- Llogo risk adventure negativo-->
            <div class="col-md-8 col-xs-8"  id="adventure">
               <img src="../imagenes/footer_logo.png" alt="adventure">
            </div>
            <!-- sección de contáctanos-->
            <div class="col-md-2 col-xs-2  " id="texto_footer"><p>CONTÁCTANOS</p></div>
            <div class="col-md-4 col-xs-4 " id="contacto_footer">
            <div id="dire">
                <p class="texto_contacto">Dirección :</p>
                <p>123 Avenida de Bolonia, Madrid</p>
              </div>
              <div id="email">
                <p class="texto_contacto">Email :</p>
                <p>info@riskadventure.es</p>
              </div>
              <div>
                <p class="texto_contacto">Teléfono :</p>
                <p>(+34)677 899 900</p>
              </div>
            </div>
          <!-- imágenes publicitarias-->  
          <div class="col-md-12 col-xs-12" id="publi">
              <a href="#"><img src="../imagenes/footer_oneill.png" id="oneill"/></a>
              <a href="#"><img src="../imagenes/footer_columbias.jpg" id="columbia"/></a>
              <a href="#"><img src="../imagenes/footer_escapada rural.jpg" id="escapada"/></a>
              <a href="#"><img src="../imagenes/footer_la esportiva 1.jpg" id="esportiva"/></a>
              <a href="#"><img src="../imagenes/footer_decathlon.png" id="decathlon"/></a>
              <a href="#"><img src="../imagenes/footer_restaurante.jpg" id="restaurante"/></a>
          </div>
          <!-- iconos redes sociales y copyright-->
          <div class="col-md-12 col-xs-12" id="redes">
              <p>Síguenos en:</p>
              <a href="#"><i class="fab fa-facebook-f" id="face"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <p>2020 © Copyright</p>
          </div>
          
          <!--enlaces a aviso legal, política de privacidad y ayuda--> 
          <div class="col-md-12 col-xs-12 " id="privacidad"> <a href="aviso_legal.php">Aviso legal</a> | <a href="politica_privacidad.php">Politica de privacidad</a> | <a href="ayuda.php"> Ayuda</a></div>
        </footer>
      <script type="text/javascript" src="../js/nosotros.js"></script> <!--Enlace externo a archivo JS-->
    </div> 
  </body>
</html>