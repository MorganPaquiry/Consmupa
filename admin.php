<!DOCTYPE html>
<html lang="fr">
<head>
<title>Conservatorio Superior de Música "Eduardo Martínez Torner" | Administracion</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
</head>
<body id="page3">
<!-- header -->
<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <img src="images/Img1.png" alt="Logo de Conservatorio" id="logo" /><strong class="slog">Conservatorio Superior de Musica</strong> </h1>
      </div>
      <div class="row-2">
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php">Acogida</a></li>
            <li><a href="professora.php">Professora</a></li>
            <li><a href="admin_index.php">Administracion</a></li>
            <li><a href="agenda.php">Concierto</a></li>
            <li class="last-item"><a href="contacts.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- content -->
    <section id="content">
      <div class="indent">
              <h2 class="p0">Bienvenido administrador: </h2>
              <form id="contact-form" action="inscription.php" method="post">
                  <label>Para hacer una incricion de un nuevo professor:</label>
                  <a class="button-2" href="inscription.php">Inscricion</a>
              </form>
              <form id="contact-form" action="delete.php" method="post">
                  <label>Para eliminar todos los conciertos:</label>
                  <a class="button-2" href="delete.php">Eliminar</a>
              </form>
            </div>
     
    </section>
    <!-- footer -->
    <footer>
      <ul class="menu">
      <li class="last-item"><a href="deconnexion.php">Desconexion</a></li>
      </ul>
      <div class="row-top">
        <div class="row-padding">
          <div class="wrapper">
            <div class="col-1">
              <h4>Direccion :</h4>
              <dl class="address">
                <dt><span>Pais:</span>Espana</dt>
                <dd><span>Ciudad:</span>Oviedo, Asturias</dd>
                <dd><span>Direccion:</span>Conservatorio Superior de Musica "Eduardo Martinez" del principal de Oviedo</dd>
                <dd><span>Email:</span><a>diego@consmupa.com</a></dd>
              </dl>
            </div>
            <div class="col-2">
              <h4>Siguenos :</h4>
              <ul class="list-services">
                <li class="item-1"><a href="http://www.facebook.com/CONSMUPA">Facebook</a></li>
                <li class="item-2"><a href="https://twitter.com/consmupa">Twitter</a></li>
              </ul>
            </div>
            <div class="col-4">
              <div class="indent3"> <strong class="footer-logo">CONSMUPA</strong> <strong class="phone"><strong>Tel:</strong> 985 217 256</strong> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-bot">
        <div class="aligncenter">
          <p class="p0">Copyright &copy; <a href="http://www.consmupa.com">Consmupa</a> All Rights Reserved</p>
      
          <!-- {%FOOTER_LINK} -->
        </div>
      </div>
    </footer>
  </div>
</div>
</body>
</html>