<?php


  
    $apellido = $_POST['p1']; 
    $expediteur = $_POST['p2']; 
    $message = $_POST['message']; 

$message = "";

while (list($key, $val) = each($HTTP_POST_VARS)) {
  $message .= "$key : $val\n";
}


// Adresse email du destinataire
$sujet = '[ MESSAGE DEPUIS SITE CONCERT]';
// Titre de l'email

$msg .= $message."\r\n";
// Pour envoyer un email HTML, l'en-tête Content-type doit être défini
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers = 'From: '.$apellido.' <'.$expediteur.'>'."\r\n\r\n";

$to = "diego@consmupa.com";
mail($to, $sujet, $msg, $headers);

header("Location: index.php")


?>