<?php

include('sql.php');

function asd(){

$username 	= 	mysql_escape_string($_POST['username']);
$password 	= 	mysql_escape_string($_POST['password']);
$age 		= 	mysql_escape_string($_POST['age']);

			

mysql_select_db("mydb", $conn);

$sql = mysql_query( 

"CREATE TABLE login(
Username varchar(255),
Password varchar(255),
Age int
)");
  
$sql= mysql_query("INSERT INTO login (Username,Password,Age)
								VALUES ('".$username."','".$password."','".$age."') ");
  	

}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="POST">

Username:<input type="text" name="username" /><br />
Password:<input type="password" name="password" /><br />

Age:<input type="text" name="age" /><br />
	<input type="submit" value="Register" />

</form>
</body>
</html>