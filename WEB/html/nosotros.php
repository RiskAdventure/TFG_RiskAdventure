<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nosotros</title><!-- título-->
    <meta charset="utf-8"><!--juego caracteres del lengiaje-->
    <meta name="keywords" content="Multiaventura,Experiencias,Nosotros, contacto, aventureros, dudas, ayuda"> <!-- palabras clave-->
    <meta name="description" content="Somos Especialistas en Organizar Team Building para Empresas, Escapadas, Fines de Semana en la naturaleza. Multiaventura y Opción Alojamiento, Infinidad de Actividades. Vive una EXPERIENCIA ÚNICA"><!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script><!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/nosotros.css" type="text/css"><!--Enlace externo a CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../imagenes/favicon_risk2.png" sizes="64x64"><!--Favicon RISK-->
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
        <!-- texto inicio-->
        <section class="row justify-content-center">
            <div id=textonosotros class="col-md-12">
                <div>Quiénes Somos</div>
            </div>
            <div id="texto" class="col-md-12">
                <div> En <b>Risk Adventure</b>, desde nuestros orígenes hemos tenido una obsesión , sorprender y emocionar
                    ofreciendo un servicio y una experiencia
                    única, exprimiendo las emociones, la adrenalina, la diversión, con los mejores equipos
                    técnicos...<br>
                    RISK ADVENTURE nació tras una tredipante aventura de 3 amigos, tras las dificultades de esa aventura
                    decidimos que cualquier aventurero
                    necesitaba un servicio completo, seguro y de calidad y estaba en nuestras manos como profesionales
                    ofrecer una experiencia de calidad,
                    única para que todos tuvieran la oportunidad de disfrutar 100% de un servicio TOP.
                    Somos los únicos que te garantizamos una <b>"EXPERIENCIA ÚNICA"</b>
                </div>
            </div>
        </section>
        <!-- efecto bolitas--- COMÚN-->
        <section class="row">
            <div class="col-md-12 col-xs-12" id="bolitas">
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
        <section class="row">
            <div class="col-md-3 col-xs-12" id="circ2">
            <a href="mailto:raul@riskadventureclub.com?Subject=Pedir%20más%20información"><img src="../imagenes/nosotros_surf.jpg" alt="imagen aventura despedidas"
                    title="Experto Agua Raúl"></img></a>
            </div>
            <div class="col-md-2 col-xs-12 nombre">RAÚL</div>
            <div class="col-md-7 col-xs-12 descripcion">
                <b>Licenciado en INEF</b>, apasionado de los deportes acuáticos, pudo ser Tritón anteriormente porque el agua
                es su medio de vida.
                Con gran experiencia en deportes de riesgo formando parte durante 12 años del <b>equipo de salvamento de
                Alta Montaña</b> de la provincia de Andalucía.
                Málaga en la sangre y Cádiz en el corazón, pero su mente no para de viajar por el mundo...
            </div>
        </section>
        <hr>
        <section class="row">
            <div class="col-md-3 col-xs-12" id="circ2">
            <a href="mailto:lidia@riskadventureclub.com?Subject=Pedir%20más%20información"><img src="../imagenes/nosotros_montana.jpg" alt="imagen aventura despedidas"
                    title="Experto Tierra Lidia"></img></a>
            </div>
            <div class="col-md-2 col-xs-12 nombre">LIDIA</div>
            <div class="col-md-7 col-xs-12 descripcion">
                <b>Guía de Alta Montaña</b> con la credencial de la UIAGM, cumple los más altos estándares de técnicas y
                conocimientos de la montaña.
                Durante los últimos años ha estado revisando el material y coordinando las experiencias con más riesgo
                en todas las <b>competiciones de alta montaña en España y Resto del Mundo</b>...
                No perdona su café mañanero, un buen entrenamiento, ni un buen concierto de Rock.
            </div>
        </section>
        <hr>
        <section class="row">
            <div class="col-md-3 col-xs-12" id="circ2">
            <a href="mailto:pilar@riskadventureclub.com?Subject=Pedir%20más%20información"><img src="../imagenes/nosotros_paracaidas.jpg" alt="imagen aventura despedidas"
                    title="Experto Aire Pilar"></img></a>
            </div>
            <div class="col-md-2 col-xs-12 nombre">PILAR</div>
            <div class="col-md-7 col-xs-12 descripcion">
                <b>Licenciada por la FADA</b> con más de 30000 vuelos realizados y títulada en paracaidísmo con 2000 saltos...
                Ha estado más tiempo en el cielo que en la tierra...
                Se encarga de la coordinación de los deportes aéreos de riesgo a Nivel Nacional colaborando con el
                escuadrón de <b>Zapadores Paracaidistas del Ejercito Español</b> para sus formaciones.
                Cree que no hay mejor momento que el estar con la familia y amigos,... y si es posible, al lado de las
                nubes.
            </div>
        </section>

        <!-- efecto bolitas--- COMÚN-->
        <section class="row">
            <div class="col-md-12 col-xs-12" id="bolitas">
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
        <div class="child-page-listing">

            <h2>Nuestros Partners</h2>

            <div class="grid-container">
                <article id="3685" class="location-listing">
                    <a class="location-title" href="https://www.asics.com/es/es-es/" target="_blank">Asics</a>
                    <div class="location-image">
                        <a href= "https://www.asics.com/es/es-es/"><img width="300" height="169" src="../imagenes/asics.jpg" alt="asics"> </a>
                    </div>
                </article>
                <article id="3688" class="location-listing">
                    <a class="location-title" href="https://www.salomon.com/es-es" target="_blank" >Salomon </a>
                    <div class="location-image">
                        <a href="#"><img width="300" height="169" src="../imagenes/salomon.jpg" alt="Salomon"> </a>
                    </div>
                </article>
                <article id="3691" class="location-listing">
                    <a class="location-title" href="https://www.merrell.com/ES/es_ES/home" target="_blank">Merrell </a>
                    <div class="location-image">
                        <a href="#"><img width="300" height="169" src="../imagenes/merrell.svg" alt="Merrell"> </a>
                    </div>
                </article>
                <article id="3694" class="location-listing">
                    <a class="location-title" href="https://www.thenorthface.es/" target="_blank" >The North Face</a>
                    <div class="location-image">
                        <a href="#"><img width="300" height="169" src="../imagenes/thenorthface.jpg" alt="The North Face"> </a>
                    </div>
                </article>
                <article id="3697" class="location-listing">
                    <a class="location-title" href="http://www.borealoutdoor.com/es" target="_blank"> Boreal </a>
                    <div class="location-image">
                    <a href="#"><img width="300" height="169" src="../imagenes/boreal.png" alt="Boreal"> </a>
                    </div>
                </article>
                <article id="3700" class="location-listing">
                    <a class="location-title" href="https://www.lasportiva.com/es" target="_blank"">La Sportiva </a>
                    <div class="location-image">
                        <a href="#"><img width="300" height="169" src="../imagenes/lasportiva.png" alt="La Sportiva"></a>
                    </div>
                </article>
            </div>
            <!-- end grid container -->
        </div>
        <hr>
        <!-- FOOTER-----COMÚN-->
        <footer class="row">
            <!-- Logo risk adventure negativo-->
            <div class="col-md-8 col-xs-8" id="adventure"><img src="../imagenes/footer_logo.png"> </div>
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
                <a href="cookies.php" id="cookies"> Cookies</a>
            </div>
        </footer>
        <script type="text/javascript" src="../js/nosotros.js"></script>
        <!--Enlace externo a archivo JS-->
    </div>
</body>

</html>