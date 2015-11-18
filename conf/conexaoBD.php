<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$servidor = "localhost";
		$user	  = "root";
		$pwd	  = "";
		$BD 	  = "test";
		$con = mysql_pconnect($servidor, $user, $pwd) or die(mysql_error());
		mysql_select_db($BD) or die(mysql_error());
	?>
</body>
</html>