<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Risk Adventure</title><!-- título-->
    <meta charset="utf-8"> <!--juego caracteres del lengiaje-->
    <meta name="keywords" content="blog, artículos, multiaventura, material deportivo, alojamientos, gastronomía, restaurantes, recomendaciones, aventura"><!-- palabras clave-->
    <meta name="description" content="Blog donde te contamos todas las experiencias de aventura, te recomendamos material deportivo, te hablamos de gastronomía y alojamiento para poder completar tu pack de multiaventura"><!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/blog.css" type="text/css"> <!--Enlace externo a CSS-->
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
          <div class="row" id="logo_menu">
          <!-- logo-->
          <div class="col-md-4 col-xs-12 col-xm-12 " id="logo1"> <a href="index.php"><img src="../imagenes/header_logo.png" id="logo"/> </div>
            <!-- menu ------------NAV INTEGRADO EN EL HEADER---COMÚN-->
            <nav class="col-md-8 col-xs-12 col-xm-12 " id="menu">
                <ul>
                  <li ><a id="home" href="index.php">HOME</a></li>
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
                                                       <!-- SECTION-->

        

        <?php
        define('WP_USE_THEMES', false);
        require_once($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-blog-header.php');
        query_posts('showposts=4');

        echo '<ul>';

        while (have_posts ()): the_post();
        echo "<li><a href='" . get_permalink($post->ID) . "'>";
        the_title();
        echo '</a></li>';
        endwhile;

        echo '</ul>';
        ?>


        <?php
        global $post;

        $last_posts = get_posts(array('posts_per_page' => 4));

        foreach ( $last_posts as $post ) :
        setup_postdata( $post );?>

        <div class="last-posts-wrap">
        <?php the_post_thumbnail();?>
        <h3><?php the_title();?></h3>
        <p><?php the_excerpt();?></p>
        </div>

        <?php endforeach;
        wp_reset_postdata();
        ?>


        
            <!-- FOOTER-----COMÚN-->
            <footer class="row" >
            <!-- Logo risk adventure negativo-->
            <div class="col-md-8 col-xs-8"  id="adventure">
               <img src="../imagenes/footer_logo.png" alt="logo ris adventure" title="logo risk adventure">
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
                <p>info@riskadventureclub.com</p>
              </div>
              <div>
                <p class="texto_contacto">Teléfono :</p>
                <p>(+34)677 899 900</p>
              </div>
            </div>
          <!-- Logos publicitarios-->  
          <div class="col-md-12 col-xs-12" id="publi">
              <a href="https://eu.oneill.com/"><img src="../imagenes/footer_oneill.png" id="oneill" alt="logo oneill" title="logo oneill"/></a>
              <a href="https://www.columbia.com/"><img src="../imagenes/footer_columbias.jpg" id="columbia" alt="logo columbia" title="logo columbia"/></a>
              <a href="https://www.escapadarural.com/"><img src="../imagenes/footer_escapada_rural.jpg" id="escapada" alt="logo la escapada" title="logo la escapada"/></a>
              <a href="https://www.lasportiva.com/es"><img src="../imagenes/footer_la_esportiva.jpg" id="esportiva" alt="logo la esportiva" title="logo la esportiva"/></a>
              <a href="https://www.decathlon.es/es/"><img src="../imagenes/footer_decathlon.png" id="decathlon" alt="logo decathlon" title=" logo decathlon"/></a>
              <a href="http://www.bardis.com/"><img src="../imagenes/footer_restaurante.jpg" id="restaurante" alt="logo bardir restaurante" title="logo bardis restaurante"/></a>
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
          <div class="col-md-12 col-xs-12 " id="privacidad"> <a href="aviso_legal.php" id="aviso_legal">Aviso Legal</a> | <a href="politica_privacidad.php" id="politica_privacidad">Política de privacidad</a> | <a href="cookies.php" id="cookies"> Cookies</a></div>
        </footer>
      <script type="text/javascript" src="../js/blog.js"></script> <!--Enlace externo a archivo JS-->
    </div> 
  </body>
</html>