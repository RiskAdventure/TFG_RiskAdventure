<!DOCTYPE html>
<html lang="en">

<head>
    <title>Experiencias de Aire</title><!-- título-->
    <meta charset="utf-8"><!--juego caracteres del lengiaje-->
    <meta name="keywords" content="Experiencias únicas, calidad, tierra, agua, mar , aire, ..."><!-- palabras clave-->
    <meta name="description" content="Elige tu experiencia  de Aire y disfruta de una experiencia de aventura inigualable. Elige la actividad y la provincia donde deseas realizar tu actividad. Actividades multiaventura de aire."><!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script><!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/aire.css" type="text/css"><!--Enlace externo a CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../imagenes/favicon_risk2.png"><!--Favicon RISK-->
</head>
<body>

    <!-- va todo el documento dentro de una caja con clase container que mediante Bootstrap nos permitirá hacer
     nuestra página responsive y que se adapte a diferentes tamaños de pantalla. Para ello nos serviremos también
      de las media queries @-->
      <div class="container">
                                                      <!-- HEADER----COMUN-->
        <!-- iconos-->
        <header>
          <div class="row" id="icon">
              <div id="iconos" class="col-md-12 col-xs-12 ">
                <a href="carrito.php"><i class="fa fa-shopping-cart" id="carrito" title="carrito"></i></a>
                <a href="login.php"><i class="fas fa-user" id="login" title="login"></i></a>
                <i class="fas fa-search" id="buscar" title="buscar"></i>
              </div>
          </div>
          
         <!-- menu ------------NAV INTEGRADO EN EL HEADER---COMÃN-->
         <div class="row" id="nav"> 
            <nav class="navbar navbar-default" role="navigation" id="menu">
                  <!-- El logotipo y el icono que despliega el menÃº se agrupan
                      para mostrarlos mejor en los dispositivos mÃ³viles -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Desplegar navegaci&oacute;n</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="../imagenes/header_logo_peque2.png"/></a>
                  </div>
                  <!-- Agrupar los enlaces de navegaciÃ³n, los formularios y cualquier
                  otro elemento que se pueda ocultar al minimizar la barra -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                    <ul class="nav navbar-nav">
                      <li><a id="home" href="index.php">HOME</a></li>
                      <li class="dropdown">
				        <a href="experiencias.php" class="dropdown-toggle" data-toggle="dropdown">
				          EXPERIENCIAS<b class="caret"></b>
				        </a>
				        <ul class="dropdown-menu">
				          <li><a href="experiencias.php">EXPERIENCIAS</a></li>
				          <li class="divider"></li>
				          <li><a href="tierra.php">TIERRA</a></li>
				          <li><a href="agua.php">AGUA</a></li>
				          <li><a href="aire.php">AIRE</a></li>
				          <li class="divider"></li>
				          <li><a href="ofertas.php">OFERTAS</a></li>
				          <li class="divider"></li>
				        </ul>
				      </li>
                      <li><a id="eventos" href="eventos.php">EVENTOS EMPRESA</a></li>
                      <li><a id="packs" href="packs.php">PACKS &amp; GRUPOS</a></li>
                      <li><a id="sobre" href="nosotros.php">NOSOTROS</a></li>
                      <li class="dropdown">
				        <a href="blog" class="dropdown-toggle" data-toggle="dropdown">
				          BLOG<b class="caret"></b>
				        </a>
				        <ul class="dropdown-menu">
				        	<li><a href="blog.php">BLOG</a></li>
				          <li><a href="vermasblog.php">ARTÍCULOS</a></li>
				          </ul>
                      <li><a id="contacto" href="contacto.php">CONTACTO</a></li>
                    </ul>
                  </div>
            </nav>
          </div>
        </header>

        <!-- SECTION-->
        <section class="row" id="imagenes" >
          <div class="col-md-12 col-xs-12 col-xm-12" id="aire">
             <img src="../imagenes/mas_wind.jpg" alt="Más experiencias Aire" title="Más Aire"></img>
             <a href="aire.php"></a>
          </div>

        </section>

        <section class="row justify-content-center">
            <div id=textoaire class="col-md-12">
                <div>EXPERIENCIAS DE AIRE</div>
            </div>
            <div id="texto" class="col-md-12">
                <div> Experiencias de <b>aventura en Aire</b>, vientos, nubes los pájaros,... todas las actividades que te harán
                  sentirte en libertar... Sientete como un pájaro con nuestras experiencias en el Aire.
                </div>
            </div>
        </section>  

        <hr>


        <hr>

        <article class="row">
            <div class="col-md-12 col-xs-12  " id="div2_1">
              <a href="tierra.php" id="consulta"><div>IR A TIERRA</div></a>
              <a href="ofertas.php"><div>OFERTAS</div></a>
              <a href="agua.php"><div>IR A AGUA</div></a>
            </div>            
        </article>
       
       
        <!-- efecto bolitas----COMÚN-->  
        <section class="row">
          <div class="col-md-12" id="bolitas">
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
            <div id="bola24" class="bola"></div>
            <div id="bola25" class="bola"></div>
            <div id="bola26" class="bola"></div>
          </div>
        </section> 
        
        <!-- FOOTER-----COMÚN-->
        <footer class="row">
            <!-- Logo risk adventure negativo-->
            <div class="col-md-8 col-xs-8"  id="adventure"><img src="../imagenes/footer_logo.png"></div>
            <!-- sección de contáctanos-->
            <div class="col-md-2 col-xs-2  " id="texto_footer">
                <p>CONTÁCTANOS</p>
            </div>
            <div class="col-md-4 col-xs-4 " id="contacto_footer">
                <div id="dire">
                    <p class="texto_contacto">Dirección :</p>
                    <p>123 Avenida de Bolonia, Madrid</p>
                </div>
                <div id="email">
                    <p class="texto_contacto">Email :</p>
                    <p>info@riskadventureclub.com</p>
                </div>
                <div>
                    <p class="texto_contacto">Teléfono :</p>
                    <p>(+34)677 899 900</p>
                </div>
            </div>
            <!-- Logos publicitarios-->  
          <div class="col-md-12 col-xs-12" id="publi">
              <a href="https://eu.oneill.com/"><img src="../imagenes/footer_oneill.png" id="oneill"/></a>
              <a href="https://www.columbia.com/"><img src="../imagenes/footer_columbias.jpg" id="columbia"/></a>
              <a href="https://www.escapadarural.com/"><img src="../imagenes/footer_escapada_rural.jpg" id="escapada"/></a>
              <a href="https://www.lasportiva.com/es"><img src="../imagenes/footer_la_esportiva.jpg" id="esportiva"/></a>
              <a href="https://www.decathlon.es/es/"><img src="../imagenes/footer_decathlon.png" id="decathlon"/></a>
              <a href="http://www.bardis.com/"><img src="../imagenes/footer_restaurante.jpg" id="restaurante"/></a>
          </div>
            <!-- iconos redes sociales y texto copyright-->
          <div class="col-md-12 col-xs-12" id="redes">
              <p>Síguenos en:</p>
              <a href="https://m.facebook.com/adventurerisk/"><i class="fab fa-facebook-f" id="face" title="facebook"></i></a>
              <a href="https://www.instagram.com/riskadventure/"><i class="fab fa-instagram" title="instagram"></i></a>
              <a href="https://cutt.ly/UvIKPOG"><i class="fab fa-whatsapp" title="whatsapp"></i></a>
              <a href="https://twitter.com/adventurerisk"><i class="fab fa-twitter" title="twitter"></i></a>
              <p>2020 © Copyright</p>
          </div>
            <hr>
            <!-- efecto bolitas---COMÚN-->

            <!--enlaces a aviso legal, política de privacidad y cookies-->
            <div class="col-md-12 col-xs-12 " id="privacidad"> <a href="aviso_legal.php" id="aviso_legal">Aviso
                    Legal</a> | <a href="politica_privacidad.php" id="politica_privacidad">Política de privacidad</a> |
                <a href="cookies.php" id="cookies"> Cookies</a></div>
        </footer>
        <script type="text/javascript" src="../js/experiencias.js"></script>
        <!--Enlace externo a archivo JS-->
    </div>
</body>

</html>