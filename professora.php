<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

        $base = mysql_connect ("localhost", 'root', 'root');
        mysql_select_db ('conservatoire', $base);

        // on teste si une entrée de la base contient ce couple login / pass
        $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
        $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
        $data = mysql_fetch_array($req);

        mysql_free_result($req);
        mysql_close();

        // si on obtient une réponse, alors l'utilisateur est un membre
        if ($data[0] == 1) {
            session_start();
            $_SESSION['login'] = $_POST['login'];
            header('Location: agenda.php?admin');
            exit();
        }
        // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
        elseif ($data[0] == 0) {
            $erreur = 'Cuenta no reconocida.';
        }
        // sinon, alors la, il y a un gros problème :)
        else {
            $erreur = 'Problema en la base de datos: varios miembros tienen los mismos identificadores de conexión.';
        }
    }
    else {
        $erreur = 'Por lo menos uno de los campos está vacío.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Conservatorio Superior de Música "Eduardo Martínez Torner" | Professora</title>
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
<body id="page2">
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
            <li class="last-item"><a href="deconnexion.php">Desconexion</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- content -->
      <section id="content">
         <div class="indent">
              <h2 class="p0">Professora connexion: </h2>
              <form id="contact-form" action="professora.php" method="post">
                <fieldset>
                  <label><span class="text-form">Login:</span>
                    <input name="login" type="text" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"/>
                  </label>
                  <label><span class="text-form">Password:</span>
                    <input name="pass" type="password" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"/>
                  </label>
                  <input  class="connexion" type="image" name="connexion" value="Connexion" src="images/connexion.png">
                  
                  <!-- <a class="button-2" name="connexion" href="agenda.php?admin" value="Connexion">Connexion</a> -->
                </fieldset>
              </form>
            </div>
    </section>
    <?php
      if (isset($erreur)) echo '<br /><br />',$erreur;
    ?>
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
