<!DOCTYPE html>
<html lang="en">

<head>
    <title>Experiencias Risk Adventure</title><!-- título-->
    <meta charset="utf-8">
    <!--juego caracteres del lengiaje-->
    <meta name="keywords"
        content="Eventos,Empresas,Despedidas,Grupos,Familias,Parejas,Tierra,Treeking,Raquetas,Agua,Surf,Esquí,Aire,Globo,Aladelta,Blog,Aventura,Multiaventura,Riesgo,Home,Experiencias,Eventos,Packs,Grupos,Nosotros,Contacto,Team Building,Incentive Day,Empresas,Paquete,Día,Fin de semana,Gastronomía,Alojamiento,Lili,Pilu,Raúl,Materiales,Clientes,Escalada,Quads,Alpinismo,Material,Calzado,Bicicletas,Montaña,Accesorio, Outdoor,Consulta, Chat, Online, cookies,Soporte,Opiniones">
    <!-- palabras clave-->
    <meta name="description"
        content="Página web que contacta usuarios con empresas que ofrecen experiencias multiaventura de todo tipo para todos los públicos.">
    <!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/experiencias.css" type="text/css">
    <!--Enlace externo a CSS-->
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
            <div class="row" id="logo_menu">
                <!-- logo-->
                <div class="col-md-4 col-xs-12 col-xm-12 " id="logo1"> <a href="index.php"><img src="../imagenes/header_logo.png" id="logo"/> </div>
                <!-- menu ------------NAV INTEGRADO EN EL HEADER---COMÚN-->
                <nav class="col-md-8 col-xs-12 col-xm-12 " id="menu">
                    <ul>
                        <li><a id="home" href="index.php">HOME</a></li>
                        <li><a id="experiencias" href="experiencias.php">EXPERIENCIAS</a></li>
                        <li><a id="eventos" href="eventos.php">EVENTOS EMPRESA</a></li>
                        <li><a id="packs" href="packs.php">PACKS & GRUPOS</a></li>
                        <li><a id="sobre" href="nosotros.php">NOSOTROS</a></li>
                        <li><a id="blog" href="blog.php">BLOG</a></li>
                        <li><a id="contacto" href="contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- SECTION-->
       
        <section class="row" id="imagenes" >
          <div class="col-md-3" id="exp1">
             <img src="../imagenes/exp_tierra2.jpg" alt="Experiencias tierra" title="Tierra"></img>
             <a href="tierra.php"><div class="button" id="boton1"> TIERRA</div></a>
          </div>
          <div class="col-md-3" id="exp2">
             <img src="../imagenes/exp_agua.jpg" alt="Experiencias agua" title="Agua"></img>
             <a href="agua.php"><div class="button" id="boton2"> AGUA</div></a>
          </div>
          <div class="col-md-3" id="exp3">
             <img src="../imagenes/exp_aire.jpg" alt="Experiencias aire" title="Aire"></img>
             <a href="aire.php"><div class="button" id="boton3"> AIRE</div></a>
          </div>
        </section>

        <!-- texto bajo imágenes-->
        <section class="row" id="texto1">
            <div class="col-md-12 " id="texto2">
                <!-- texto central entre partners-->
                <div>
                    Sin riesgo no hay aventura, sumérgete<br>
                    en una nueva sensación...
                </div>
            </div>
            <!-- imagen sportiva-->
            <div class="col-md-7 col-xs-12 col-xm-12" id="sportiva">
                <img src="../imagenes/la_sportiva.jpg">
            </div>
            <!-- imagen grill-->
            <div class="col-md-2 col-xs-12 col-xm-12" id="grill">
                <img src="../imagenes/logo_grill.png">
            </div>
        </section>
        <hr>
        <!--PARTE CENTRAL VER MAS-->
        <section class="row">
            <div class="col-md-3 col-xs-12" id="circ2">
            <a href="tierra.php"><img src="../imagenes/mas_tierra.jpg" alt="Tierra"
                    title="Experiencias Tierra"></img></a>
            </div>
            <div class="col-md-2 col-xs-12 nombre">TIERRA</div>
            <div class="col-md-7 col-xs-12 descripcion">
                <article class="row">
                    <div class="col-md-12 col-xs-12  " id="div2_1">
                        <a href="tierra.php" id="consulta"><div>TREKKING</div></a>
                        <a href="tierra.php"><div>RAQUETAS</div></a>
                        <a href="tierra.php"><div>SENDERISMO</div></a>
                        <a href="tierra.php"><div>ESCALADA</div></a>
                        <a href="tierra.php"><div>QUADS</div></a>
                        <a href="tierra.php"><div>SUPERVIVENCIA</div></a>
                        <a href="tierra.php"><div>ESPELEOLOGÍA</div></a>
                        <a href="tierra.php"><div>MICOLOGÍA</div></a>
                        <a href="tierra.php"><div>RÁPEL</div></a>
                        <a href="tierra.php"><div>ALPINISMO</div></a>
                        <p><a href="tierra.php" id="vermas">Ver más TIERRA...</p></a>
                    </div>            
            </article>
            </div>
        </section>
        <hr>
        <section class="row">
            <div class="col-md-3 col-xs-12" id="circ2">
            <a href="agua.php"><img src="../imagenes/mas_agua.jpg" alt="Agua"
                    title="Experiencias Agua"></img></a>
            </div>
            <div class="col-md-2 col-xs-12 nombre">AGUA</div>
            <div class="col-md-7 col-xs-12 descripcion">
                <article class="row">
                    <div class="col-md-12 col-xs-12  " id="div2_1">
                        <a href="agua.php" id="consulta"><div>BARRANCOS</div></a>
                        <a href="agua.php"><div>SURF</div></a>
                        <a href="agua.php"><div>VELA</div></a>
                        <a href="agua.php"><div>PIRAGUAS</div></a>
                        <a href="agua.php"><div>BUCEO</div></a>
                        <a href="agua.php"><div>ESQUÍ</div></a>
                        <a href="agua.php"><div>FLYBOARD</div></a>
                        <a href="agua.php"><div>RAFTING</div></a>
                        <a href="agua.php"><div>PARASAILING</div></a>
                        <a href="agua.php"><div>KITE SURF</div></a>
                        <p><a href="agua.php" id="vermas">Ver más AGUA...</p></a>
                    </div>            
                </article>
            </div>
        </section>
        <hr>
        <section class="row">
            <div class="col-md-3 col-xs-12" id="circ2">
            <a href="aire.php"><img src="../imagenes/mas_aire.jpg" alt="Aire"
                    title="Experiencias Aire"></img></a>
            </div>
            <div class="col-md-2 col-xs-12 nombre">AIRE</div>
            <div class="col-md-7 col-xs-12 descripcion">
                <article class="row">
                    <div class="col-md-12 col-xs-12  " id="div2_1">
                        <a href="aire.php" id="consulta"><div>PARAPENTE</div></a>
                        <a href="aire.php"><div>GLOBO</div></a>
                        <a href="aire.php"><div>VUELO SIN MOTOR</div></a>
                        <a href="aire.php"><div>ULTRALIGERO</div></a>
                        <a href="aire.php"><div>ALADELTA</div></a>
                        <a href="aire.php"><div>PARACAIDISMO</div></a>
                        <a href="aire.php"><div>SALTO BASE</div></a>
                        <a href="aire.php"><div>TUNEL VIENTO</div></a>
                        <a href="aire.php"><div>WINGFLY</div></a>
                        <a href="aire.php"><div>S.RIDING</div></a> 
                        <p><a href="aire.php" id="vermas">Ver más AIRE...</p></a>                       
                    </div>            
                </article>
            </div>
        </section>
        
        <!--FIN PARTE CENTRAL VER MAS-->
        <hr>
                                                   <!--CONTINUAMOS CON EL SECTION-->
        <!-- parte INFERIOR enlace blog-->
        <section class="row" >
        <!-- imagen blog-->
            
            <!-- texto enlace a blog-->
            <div class="col-md-12 col-xs-12 col-xm-12 " id="textoblog" > 
                <div id="tituloblog">Confiamos en los mejores</div>
                <div id="texto3">Las <b>experiencias outdoor</b> cuentan con más fans cada vez. 
                    Salir de acampada, hacer barrancos, practicar senderismo o escalar son deportes de naturaleza y aventura con un <b>creciente número de aficionados</b>, 
                    que huyen del turismo de ciudad o de aglomeraciones, y que desean encontrar <b>alternativas naturales</b>, en pleno contacto con el entorno natural y rural. Este tipo 
                    de <b>experiencias</b> son una gran opción de dexconexión y se ofertan cada vez más, sobre todo en tiempos de estress y de no tener tiempo para nada. 
                    Muchas son las opciones que ofrece este tipo de turismo...apuntarnos a cursos con monitores experimentados en 
                    diversos <b>deportes de aventura</b>, actividades de tipo cultural, gastronómico y rural asociadas a los alojamientos donde cerca puedes vivir una experiencia única, 
                    o tiendas especializadas para la compra  de equipos y gadgets muy útiles para emprender la aventura de irnos de vacaciones en contacto con 
                    parajes naturales, los <b>más bonitos que podamos imaginar</b>. En nuestro BLOG te mostraremos las últimas novedades y te hablaremos de 
                    nuestros proveedores y empresas asociadas, de las experiencias de nueestros clientes y de los servicios que ofrecemos, siempre ofreciendo <b>CALIDAD</b>. 
                </div>
            </div>
            <section class="row" id="imagenes2" >
                <div class="col-md-3" id="blog1">
                    <img src="../imagenes/material_escalada.jpg" alt="Experiencias tierra" title="Tierra"></img>
                    <a href="https://www.riskadventureclub.com/blog/material-adecuado-de-escalada/"><p>Material adecuado de escalada</p></a>
                    
                </div>
                <div class="col-md-3" id="blog2">
                    <img src="../imagenes/calzado_senderismo.jpg" alt="Experiencias agua" title="Agua"></img>
                    <a href="https://www.riskadventureclub.com/blog/mejor-calzado-de-senderismo/"><p>Mejor calzado de Senderismo</p></a>
                </div>
                <div class="col-md-3" id="blog3">
                    <img src="../imagenes/mountain_bikes.jpg" alt="Experiencias aire" title="Aire"></img>
                    <a href="https://www.riskadventureclub.com/blog/seleccion-bicicletas-de-montana-2020/"><p>Selección Bicicletas de Montaña 2020</p></a>
                </div>
                <div class="col-md-3" id="blog4">
                    <img src="../imagenes/accesorios_outdoor.jpg" alt="Experiencias tierra" title="Tierra"></img>
                    <a href="https://www.riskadventureclub.com/blog/accesorios-outdoor-mas-vendidos/"><p>Accesorios Outdoor más vendidos</p></a>
                </div>
                
            </section> 
        <!--fin parte INFERIOR-->
        
        <!-- FOOTER-----COMÚN-->
        <footer class="row">
            <!-- Logo risk adventure negativo-->
            <div class="col-md-8 col-xs-8" id="adventure">
                <img src="../imagenes/footer_logo.png" alt="logo ris adventure" title="logo risk adventure">
            </div>
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
                <a href="https://eu.oneill.com/"><img src="../imagenes/footer_oneill.png" id="oneill" alt="logo oneill"
                        title="logo oneill" /></a>
                <a href="https://www.columbia.com/"><img src="../imagenes/footer_columbias.jpg" id="columbia"
                        alt="logo columbia" title="logo columbia" /></a>
                <a href="https://www.escapadarural.com/"><img src="../imagenes/footer_escapada_rural.jpg" id="escapada"
                        alt="logo la escapada" title="logo la escapada" /></a>
                <a href="https://www.lasportiva.com/es"><img src="../imagenes/footer_la_esportiva.jpg" id="esportiva"
                        alt="logo la esportiva" title="logo la esportiva" /></a>
                <a href="https://www.decathlon.es/es/"><img src="../imagenes/footer_decathlon.png" id="decathlon"
                        alt="logo decathlon" title=" logo decathlon" /></a>
                <a href="http://www.bardis.com/"><img src="../imagenes/footer_restaurante.jpg" id="restaurante"
                        alt="logo bardir restaurante" title="logo bardis restaurante" /></a>
            </div>
            <!-- iconos redes sociales y texto copyright-->
            <div class="col-md-12 col-xs-12" id="redes">
                <p>Síguenos en:</p>
                <a href="https://m.facebook.com/adventurerisk/"><i class="fab fa-facebook-f" id="face"
                        title="facebook"></i></a>
                <a href="https://www.instagram.com/riskadventure/"><i class="fab fa-instagram"
                        title="instagram"></i></a>
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