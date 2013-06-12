 <html>
<head>

<meta http-equiv="refresh" content="0; URL=./admin.php">

</head>

<body>

 <?php

 $link = mysql_connect("localhost", "root", "root");
 mysql_select_db("conservatoire",$link);
 
 $id = $_GET['id'];



      $del=mysql_query('DELETE FROM * agenda');
header('Location: admin.php');
 	
?>
</body>

</html>
