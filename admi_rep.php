<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Rep</title>
</head>

<body>


<?php
error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');


$uc		= 	mysql_escape_string($_POST['username_contactad']);
$ea		= 	mysql_escape_string($_POST['emailaddad']);
$com 		= 	mysql_escape_string($_POST['messagead']);



mysql_select_db("users_messages");
				
$mail 	= mysql_query( 

"CREATE TABLE kwino(

MessageADMIN varchar(255)

)");


		
		$insert= 

mysql_query("INSERT INTO kwino (MessageADMIN)
								VALUES ('".$com."') ");									
						
  	

	
	
			
			
		
		

		
		?>


</body>
</html>