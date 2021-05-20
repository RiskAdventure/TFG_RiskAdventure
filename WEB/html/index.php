<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Risk Adventure</title><!-- título-->
    <meta charset="utf-8"> <!--juego caracteres del lengiaje-->
    <meta name="keywords" content="Eventos,Empresas,Despedidas,Grupos,Familias,Parejas,Tierra,Treeking,Raquetas,Agua,Surf,Esquí,Aire,Globo,Aladelta,Blog,Aventura,Multiaventura,Riesgo,Home,Experiencias,Eventos,Packs,Grupos,Team Building,Incentive Day,Fin de semana,Escalada,Quads,Alpinismo,Montaña,Outdoor"><!-- palabras clave-->
    <meta name="description" content="Risk Adventure buscador y guía de experiencias únicas de calidad para todos los usuarios, donde encontrarás las mejores empresas de Multiaventura"><!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/indexx.css" type="text/css"> <!--Enlace externo a CSS-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
          
         <!-- menu ------------NAV INTEGRADO EN EL HEADER---COMÚN-->
          <div class="row" id="nav"> 
            <nav class="navbar navbar-default" role="navigation" id="menu">
                  <!-- El logotipo y el icono que despliega el menú se agrupan
                      para mostrarlos mejor en los dispositivos móviles -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Desplegar navegación</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="../imagenes/header_logo_peque2.png"/></a>
                  </div>
                  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                  otro elemento que se pueda ocultar al minimizar la barra -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                    <ul class="nav navbar-nav">
                      <li><a id="home" href="index.php">HOME</a></li>
                      <li><a id="experiencias" href="experiencias.php">EXPERIENCIAS</a></li>
                      <li><a id="eventos" href="eventos.php">EVENTOS EMPRESA</a></li>
                      <li><a id="packs" href="packs.php">PACKS & GRUPOS</a></li>
                      <li><a id="sobre" href="nosotros.php">NOSOTROS</a></li>
                      <li><a id="blog" href="blog.php">BLOG</a></li>
                      <li><a id="contacto" href="contacto.php">CONTACTO</a></li>
                    </ul>
                  </div>
            </nav>
          </div>
        </header>                                                  
                                                       <!-- SECTION-->
        <!-- carrusel-->
        <section class="row" id="carru" >
          <div class="col-md-12 " id="carrusel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <!--Cuerpo Carrusel con imágenes tamaño de las imagenes 1800x480-->
              <div class="carousel-inner">
                <div class="item active">
                  <a href="experiencias.php"><img src="../imagenes/carrusel_portada.jpg"></a>
                  <div class="carousel-caption">
                    <h3>EXPERIENCIAS ÚNICAS</h3>
                    <p>Sin riesgo no hay aventura, sumérgete en una nueva sensación...</p>
                  </div>
                </div>
                <div class="item">
                  <a href="experiencias.php"><img src="../imagenes/carrusel_portada2.jpg"></a>
                  <div class="carousel-caption">
                  <h3>SEGURAS</h3>
                    <p>Te proporcionamos la mejor seguridad, 100% seguro 100% feliz...</p>
                  </div>
                </div>
                <div class="item">
                  <a href="experiencias.php"><img src="../imagenes/carrusel_portada3.jpg"></a>
                  <div class="carousel-caption">
                  <h3>DE CALIDAD</h3>
                    <p>No es solamente una aventura, es una experiencia de Calidad...</p>
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
            </div>
          </div>  
        </section>
       
        <!-- texto bajo carrusel-->
        <section class="row">
            
          <div id="texto" class="col-md-12  ">
            <div>En Risk Adventure, desde nuestros orígenes hemos tenido una obsesión, sorprender y emocionar
                ofreciendo un servicio y una calidad excelente, experimentando las emociones, la adrenalina, la diversión,
                con los mejores equipos técnicos...
                Somos los únicos que garantizamos una "EXPERIENCIA ÚNICA". 
            </div>
          </div>
        </section>
                                                <!-- efecto bolitas--- COMÚN-->
        <hr>
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
                                            <!--Continuamos con el SECTION-->
        <!-- tarjetas circulares con sus botones,texto y boton central-->  
        <!-- imágenes circulares y botones-->  
        <section class="row"  >
          <div class="col-md-3" id="circ1">
             <img src="../imagenes/home_packs_despedida2.jpg" alt="Despedidas" title="Despedidas"></img>
             <a href="packs.php"><div class="boton" id="boton1"> DESPEDIDAS</div></a>
          </div>
          <div class="col-md-3" id="circ2">
             <img src="../imagenes/home_packs_grupos1.jpg" alt="Grupos" title="Grupos"></img>
             <a href="packs.php"><div class="boton" id="boton2"> GRUPOS</div></a>
          </div>
          <div class="col-md-3" id="circ3">
             <img src="../imagenes/home_packs_familias1.jpg" alt="Familias" title="Familias"></img>
             <a href="packs.php"><div class="boton" id="boton3"> FAMILIAS</div></a>
          </div>
          <div class="col-md-3" id="circ4">
             <img src="../imagenes/home_packs_parejas1.jpg" alt="Parejas" title="Parejas"></img>
             <a href="packs.php"><div  class="boton" id="boton4"> PAREJAS</div></a>
          </div>
        </section>
        <!-- texto bajo imágenes-->
        <section class="row">
            <div class="col-md-12 " id="texto2">
               <div>
                 Encontrarás todo lo que necesitas para una experiencia única e inigualable, 
                diferentes packs individual en grupo y para todas las edades... Deslízate hasta nuestro especial
                PACKS & GRUPOS y encontrarás muchas más opciones... PAQUETES A MEDIDA, FINES DE SEMANA... 
              </div>
            </div>
        </section>
        <!-- botón central imágenes-->
        <section class="row" >
            <div class="col-md-12 " id="boton_packs" > 
              <a href="packs.php"><div  class="boton_pack" id="boton5"> PACKS & GRUPOS</div></a>
            </div>
        </section>    
                                          <!-- efecto bolitas----COMÚN-->   
        <hr>          
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
                                                   <!--CONTINUAMOS CON EL SECTION-->
        <!-- parte central listos,texto y botones ver más y contacto-->
        <section class="row" >
        <!-- imagen listos paracaidas-->
            <div class="col-md-7 col-xs-12 col-xm-12  " id="listos" > 
              <img src="../imagenes/home_contacto_paracaidas.jpg" alt="Parapente" title="Eventos empresa">
            </div>
            <!-- texto estamos listos-->
            <div class="col-md-5 col-xs-12 col-xm-12 " id="boton_packs" > 
                <div id="listo">Estamos listos para tu evento</div>
                <div id="texto3">Contamos con todas las medidas de seguridad, sanitarias,
                    sociales y legales para que tu evento pueda celebrarse.
                    Mejoramos las políticas de cancelación y te facilitamos
                    alternativas efectivas para tu evento presencial. Lo importante
                    es que no dejes de comunicar ni celebrar con tu equipo...
                    !Lo merecéis!
                </div>
            </div>
        </section> 
        <!-- botones ver más y contacto-->
        <section class="row" >
            <div class="col-md-12 " id="boton_listo" > 
              <a href="eventos.php"><div  class="boton_pack" id="ver"> VER MÁS</div></a>
              <a href="contacto.php"><div  class="boton_pack" id="contact"> CONTÁCTANOS</div></a>  
            </div>
        </section>   
                                               <!-- efecto bolitas----COMÚN-->
        <hr>
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
        <footer class="row" >
            <!-- Logo risk adventure negativo-->
            <div class="col-md-8 col-xs-8"  id="adventure"><img src="../imagenes/footer_logo.png"></div>
            <!-- sección de contáctanos-->
            <div class="col-md-2 col-xs-2  " id="texto_footer"><p>CONTÁCTANOS</p></div>
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
          
          <!--enlaces a aviso legal, política de privacidad y cookies--> 
          <div class="col-md-12 col-xs-12 " id="privacidad"> <a href="aviso_legal.php" id="aviso_legal">Aviso Legal</a> | <a href="politica_privacidad.php" id="politica_privacidad">Política de privacidad</a> | <a href="cookies.php" id="cookies"> Cookies</a></div>
        </footer>
      <script type="text/javascript" src="../js/index.js"></script> <!--Enlace externo a archivo JS-->
    </div> 
  </body>
</html>