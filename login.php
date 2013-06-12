<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Connexion</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

    
</head>
<body bgcolor="#00658a">

  <?php 
  include_once("context.php");

  echo "<di>".$context->get_attribute("error")."</di>";

  ?>
<div id="container">
 <form action="controleur.php?action=login" method="post" class="niceform">
	<fieldset>
    	<legend>&nbspConnexion </legend>
        <dl>
        	<dt><label for="user">Utilisateur:</label></dt>
            <dd><input type="text" name="user" id="user" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
        	<dt><label for="password">Mot de passe:</label></dt>
            <dd><input type="password" name="pwd" id="pwd" size="32" maxlength="32" /></dd>
        </dl>
    </fieldset>
	<div><input type="submit" name="Connectez vous" id="submit" value="Connecter vous" /></div>
	</form>

 
   
                        

                    

  </body>

</html>
