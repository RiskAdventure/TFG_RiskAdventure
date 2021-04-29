<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
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
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
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
                                    <hr>
                                    <!-- efecto bolitas---COMÚN-->  
          <div class="col-md-12 col-xs-12" id="bolitas_footer">
            <div id="bola1" class="bola_footer"></div>
            <div id="bola2" class="bola_footer"></div>
            <div id="bola3" class="bola_footer"></div>
            <div id="bola4" class="bola_footer"></div>
            <div id="bola5" class="bola_footer"></div>
            <div id="bola6" class="bola_footer"></div>
            <div id="bola7" class="bola_footer"></div>
            <div id="bola8" class="bola_footer"></div>
            <div id="bola9" class="bola_footer"></div>
            <div id="bola10" class="bola_footer"></div>
            <div id="bola11" class="bola_footer"></div>
            <div id="bola12" class="bola_footer"></div>
            <div id="bola13" class="bola_footer"></div>
            <div id="bola14" class="bola_footer"></div>
            <div id="bola15" class="bola_footer"></div>
            <div id="bola16" class="bola_footer"></div>
            <div id="bola17" class="bola_footer"></div>
            <div id="bola18" class="bola_footer"></div>
            <div id="bola19" class="bola_footer"></div>
            <div id="bola20" class="bola_footer"></div>
            <div id="bola21" class="bola_footer"></div>
            <div id="bola22" class="bola_footer"></div>
            <div id="bola23" class="bola_footer"></div>
            <div id="bola24" class="bola_footer"></div>
            <div id="bola24" class="bola_footer"></div>
            <div id="bola25" class="bola_footer"></div>
            <div id="bola26" class="bola_footer"></div>
          </div>
          <!--enlaces a aviso legal, política de privacidad y cookies--> 
          <div class="col-md-12 col-xs-12 " id="privacidad"> <a href="aviso_legal.php" id="aviso_legal">Aviso Legal</a> | <a href="politica_privacidad.php" id="politica_privacidad">Política de privacidad</a> | <a href="cookies.php" id="cookies"> Cookies</a></div>
        </footer>
      <script type="text/javascript" src="../js/contacto.js"></script> <!--Enlace externo a archivo JS-->
  

</div>
</body>
</html>