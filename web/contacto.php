<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/pace.min.js"></script>
  <script src="js/validator.js"></script>
  <script src="js/contact.js"></script>
	<meta name="Keywords" content="gps, seguridad, control">
    <meta name="description" content="Página de la empresa gpstrujillo">
    <meta name="author" content="gpstrujillo">
	<title>GPS TRUJILLO</title>
</head>
<body>	
	<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">GPS TRUJILLO</a>
    </div>
    <div class="container">
    <CENTER>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="somos.php"><span class="glyphicon glyphicon-info-sign"></span> Quienes Somos</a></li>
        <li class="active"><a href="contacto.php"><span class="glyphicon glyphicon-user"></span> Contacto</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      </CENTER>
    </div>
  </div>
  </div>	
</nav>
<div class="container">
  <legend>
  <h1>Contacto:</h1>
  </legend>
  <div class="col-md-8 .col-xs-8">
   <form role="form" action="php/contact.php" method="POST" id="contacto" title="Nombre">
   <div class="messages"></div>
   <div class="form-group">
   <label for="nombre">Nombres :</label>
   <input name="nombre" class="form-control" type="text" required="required" data-error="Sus nombres son requeridos" id="nombre" placeholder="Nombres" tabindex="1" title="Nombre">
   <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
   <label for="email">Correo Electrónico :</label>
   <input name="email" class="form-control" type="text" required="required" data-error="Su email es requerido" id="email" placeholder="Correo electrónico" tabindex="2" title="Email">
   <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
   <label for="telefono">Teléfono :</label>
   <input name="telefono" class="form-control" type="text" required="required" data-error="Su teléfono es requerido" id="telefono" placeholder="Teléfono" tabindex="3" title="Telefono">
   <div class="help-block with-errors"></div>
    </div>
   <label for="Mensaje">Mensaje :</label>
   <textarea name="mensaje" class="form-control" rows="5" id="mensaje" placeholder="Escriba su mensaje..." tabindex="6"></textarea>
   <br>
   <button type="submit" name="enviar" value="Enviar" class="btn btn-danger btn-lg btn-block">Enviar mensaje</button>
   </form>
  </div>
  <div class="col-md-4 .col-xs-4">
  <br>
  <address>
  <strong>GPS TRUJILLO</strong><br>
  Trujillo - Perú<br>
  psj.Canada 255 - V Etapa -Dpto.102 4to piso-Urb.El Recreo <br>
  <abbr title="Telefono">Teléfono:</abbr> (01) 04444044<br>
  <abbr title="Celular">Celular:</abbr> 999999999
  </address>
  <address>
  <strong>Correo electrónico:</strong><br>
  <a href="mailto:#">info@GPS TRUJILLO.com.pe</a>
  </address>
  </div>
  <div class="col-md-12 .col-xs-12">
  <legend>
  <h1>Ubicación en google maps:</h1>
  </legend>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.457747284118!2d-76.99522448596404!3d-12.080783891444652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6347bfd2d17%3A0x7f9bac924e74b174!2sAv.+Canad%C3%A1+3579%2C+Distrito+de+Trujillo+15021!5e0!3m2!1ses-419!2spe!4v1493817493192" class="mapa" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<br>

<footer>
    <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <p>Copyright © 2017 <strong><a href="index.php" id="autor">GPS TRUJILLO</a></strong></p>
      </div>
      <div class="col-xs-6">
        <ul class="list-inline text-right">
        <li>Encuentranos en:</li>
        <li><a href="https://www.facebook.com/gpstrujillo.com" target="_blank"><img src="img/icono-facebook.png" alt="Síguenos en Facebook"/></a></li>
        <li><a href="https://twitter.com/gpstrujillo.com" target="_blank"><img src="img/icono-twitter.png" alt="Síguenos en Twitter"/></a></li>
        <li><a href="https://https://www.youtube.com/watch?v=ifSPPPIo8Dw" target="_blank"><img src="img/icono-youtube.png" alt="Síguenos en Youtube"/></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</html>