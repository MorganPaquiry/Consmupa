<?php
$adr_base="localhost";//adresse du base
$log_base="root";//login du base
$pass_base="root";//mot de passe du base
$base="conservatoire";// nom de la base



function connex($adr_base,$log_base,$pass_base,$base)
{	mysql_connect($adr_base,$log_base,$pass_base);
	mysql_select_db($base);
}
connex($adr_base,$log_base,$pass_base,$base);

?>