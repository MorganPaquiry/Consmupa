<!DOCTYPE html>
<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
    // on teste les deux mots de passe
    if ($_POST['pass'] != $_POST['pass_confirm']) {
      $erreur = 'Las 2 contraseñas son diferentes.';
    }
    else {
      $base = mysql_connect ("localhost", 'root', 'root');
      mysql_select_db ('conservatoire', $base);

      // on recherche si ce login est déjà utilisé par un autre membre
      $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"';
      $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
      $data = mysql_fetch_array($req);

      if ($data[0] == 0) {
        $sql = 'INSERT INTO membre VALUES("", "'.mysql_escape_string($_POST['login']).'", "'.mysql_escape_string(md5($_POST['pass'])).'")';
        mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

        session_start();
        $_SESSION['login'] = $_POST['login'];
        header('Location: admin.php');
        exit();
      }
      else {
        $erreur = 'Un miembro ya posee este login.';
      }
    }
  }
  else {
    $erreur = 'Por lo menos uno de los campos está vacío.';
  }
}
?>

<html lang="en">
<head>
<title>Conservatorio Superior de Música "Eduardo Martínez Torner" | Concierto</title>
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
<body id="page4">
<!-- header -->
<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <img src="images/Img1.png" alt="Logo de Conservatorio" id="logo"/><strong class="slog">Conservatorio Superior de Musica</strong> </h1>
        </div>
      <div class="row-2">
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php">Acogida</a></li>
            <li><a href="professora.php">Professora</a></li>
            <li><a href="admin_index.php">Administracion</a></li>
            <li><a href="concierto.php">Concierto</a></li>
            <li class="last-item"><a href="contacts.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- content -->
    <section id="content">
      <div class="indent">
              <h2 class="p0">Inscripcion: </h2>
             <form id="contact-form" action="inscription.php" method="post">
                <fieldset>
                  <label><span class="text-form">Login:</span>
                    <input name="login"  type="text" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"/>
                  </label>
                  <label><span class="text-form">Password:</span>
                    <input name="pass" type="password" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"/>
                  </label>
                  <label><span class="text-form">Confirm:</span>
                    <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"/>
                  </label>
                   <input  class="connexion" type="image" name="connexion" value="Connexion" src="images/inscricion.png">
                  
                </fieldset> 
                
        
        <?php
          if (isset($erreur)) echo '<br />',$erreur;
        ?>
              </form>
            </div>
    </section>
    <!-- footer -->
    <footer>
      <div class="row-top">
        <div class="row-padding">
          <div class="wrapper">
            <div class="col-1">
              <h4>Direccion :</h4>
              <dl class="address">
                <dt><span>Pais:</span>Espana</dt>
                <dd><span>Ciudad:</span>Oviedo, Asturias</dd>
                <dd><span>Direccion:</span>Conservatorio Superior de Musica "Eduardo Martinez" del principal de Oviedo</dd>
                <dd><span>Email:</span><a href="#">diego@consmupa.com</a></dd>
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
