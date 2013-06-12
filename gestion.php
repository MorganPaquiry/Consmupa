<?php
  include('conf.php');
  if(isset($_POST['sup']))
  {
    $id=$_POST['upd'];
    $dat=$_POST['dd'];
    $d_l=explode('-',$dat);
    $mois=$d_l[1];
    $anne=$d_l[0];
    $lien="&annee=".$anne."&mois=".$mois;
    $l=$_POST['lieu'];
    $e=$_POST['event'];
    $o=$_POST['obra'];
    $a=$_POST['autor'];
    $pi=$_POST['pianista'];
    $al=$_POST['alumno'];
    $p=$_POST['professora'];

    if($_POST['sup']==1)
      $sql="delete from agenda where id=$id";
    else
      $sql="update agenda set lieu='$l' , event='$e' , obra='$o', autor='$a' , pianista='$pi' , alumno='$al' , professora='$p' where id=$id";
    mysql_query($sql);
    header("location:agenda.php?admin&mod$lien");
  }
  else if(isset($_POST['lieu']))
  {
    $dat=$_POST['dd'];
    $l=$_POST['lieu'];
    $e=$_POST['event'];
    $o=$_POST['obra'];
    $a=$_POST['autor'];
    $pi=$_POST['pianista'];
    $al=$_POST['alumno'];
    $p=$_POST['professora'];

    $d_l=explode('-',$dat);
    $mois=$d_l[1];
    $anne=$d_l[0];
    $lien="&annee=".$anne."&mois=".$mois;
    $sql="insert into agenda (dt,lieu,event,obra,autor,pianista,alumno,professora) values('$dat','$l','$e','$o','$a','$pi','$al','$p')";
    mysql_query($sql);
    //echo $sql;
    header("location:agenda.php?admin&add$lien");
  }
  else
  {
    $d=$_GET['dt'];
?>

<!DOCTYPE html>
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
            <li><a href="agenda.php">Concierto</a></li>
            <li class="last-item"><a href="contacts.php">Contacto</a></li>
            <li class="last-item"><a href="contacts.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- content -->
    <section id="content">
      <?php echo htmlentities(trim($_SESSION[''])); ?><br />
            <?php

              // Connection à la BDD:
                $link = mysql_connect("localhost","root","root");
                mysql_select_db("conservatoire",$link) or die('Impossible de se connecter : ' . mysql_error());;
                mysql_query("SET NAMES utf8" ); 
            ?>

<?php
  $sql="select * from agenda where dt='$d'";
  $req=mysql_query($sql);
  if(mysql_num_rows($req)==1)
    while($data=mysql_fetch_array($req))
    {
      $mod=1;
      $id=$data['id'];
      $loc=$data['event'];
      $eve=$data['lieu'];
      $obr=$data['obra'];
      $aut=$data['autor'];
      $pia=$data['pianista'];
      $alu=$data['alumno'];
      $pro=$data['professora'];
    }
 
?>
<div class="indent">
              <h2 class="p0">Concierto : </h2>

                <form name="gr" action="gestion.php" method="post"><input type='hidden' id='dd' name='dd' size="30" value='<?php echo $d; ?>'>
<table >
        <tr height="50px"><td width="150px"><strong>Hora :</strong></td><td><input type="text" name="lieu" size="30" value="<?php echo $eve;?>"/></td></tr>
        <tr height="50px"><td><strong>Lugar :</strong></td><td>
          <select type="text" name="event" value="<?php echo $loc;?>"/>
                                    <option value="Sala de Camara">Sala de Camara</option>
                                    <option value="Auditorio">Auditorio</option>
          </select>
        <tr height="50px"><td><strong>Obra :</strong></td><td><textarea name='obra' cols='25' rows='5' value="<?php echo $obr;?>"/></textarea></td></tr>
        <tr height="50px"><td><strong>Autor :</strong></td><td><input type="text" name="autor" size="30" value="<?php echo $aut;?>"/></td></tr>
        <tr height="50px"><td><strong>Pianista :</strong></td><td><input type="text" name="pianista" size="30" value="<?php echo $pia;?>"/></td></tr>
        <tr height="50px"><td><strong>Alumno :</strong></td><td><textarea name='alumno' cols='25' rows='5' value="<?php echo $alu;?>"/></textarea></td></tr>
        <tr height="50px"><td><strong>Professora :</strong></td><td><input type="text" name="professora" size="30" value="<?php echo $pro;?>"/></td></tr>
        <tr height="50px">
       <td colspan='2'><input type="submit" name="anadir" value="Anadir"></td> 
     
    
        </tr>
</table>
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
<?php
}
?>
