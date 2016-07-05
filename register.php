
<?php
session_start();

?>


<html>
<body>


<form name="form1" method="post" action="" onSubmit="return ch()">

<h2> REGISTER</h2>

Firstname:<input type="text" name="firstname" id="firstname"/><br />
Lastname:<input type="text" name="lastname" id="lastname"/><br />
Age:<input type="text" name="age"   />
<br />
    <br />
    
Gender:<input type="radio" name="gender"  value="male" id="gender"/>
     
    Male 
 
    <input type="radio" name="gender"  value="female" id="gender"/>
    
    Female<br />
    
Email:<input type="text" name="email" id="email"/><br />
Username:<input type="text" name="username" id="username"/><br />
Password:<input type="password" name="password" id="password"/><br />
Confirm Password:<input type="password" name="cpassword" id="cpassword"/><br />


	<input type="submit" value="Register" />	<input type="reset" value="Clear form" />

</form>

<br /><br /><br /><br /><br /><br />

<?php

error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');



$f			= 	mysql_escape_string($_POST['firstname']);
$l			= 	mysql_escape_string($_POST['lastname']);
$age 		= 	mysql_escape_string($_POST['age']);
$age 		= 	mysql_escape_string($_POST['age']);
$g 			= 	mysql_escape_string($_POST['gender']);
$e 			= 	mysql_escape_string($_POST['email']);
$u			= 	mysql_escape_string($_POST['username']);
$p			= 	mysql_escape_string($_POST['password']);
$cp			= 	mysql_escape_string($_POST['cpassword']);





mysql_select_db("prototype");
$sql 	= mysql_query( 

"CREATE TABLE register(
Firstname varchar(255),
Lastname varchar(255),
Age int,
Bday int,
Gender varchar(255),
Email varchar(255),
Username varchar(255),
Password varchar(255),
CPassword varchar(255),
Status varchar(255)

)");

			
	
  
$insert= 

mysql_query("INSERT INTO register (Firstname,Lastname,Age,Bday,Gender,Email,Username,Password,CPassword)
								VALUES ('".$f."','".$l."','".$age."','".$aasemble."','".$g."','".$e."','".$u."','".$p."','".$cp."') ");
								
						
			echo'<script>alert("Your register")</script>';
			mysql_query("UPDATE register SET Status = 'Registered'
				WHERE Username = '$u' AND Password = '$p'");
			
			echo'<a href="login.php">asdad</a>';
  	

			
			
			

?>
</body>
</html>