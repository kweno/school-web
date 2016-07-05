
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    

  	<meta name="description" content="Demo of a Sliding Login Panel using jQuery 1.3.2" />
  	<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	

	<!-- stylesheets -->
  	<link rel="stylesheet" href="Sliding_login_panel_jquery/Sliding_login_panel_jquery/css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="Sliding_login_panel_jquery/Sliding_login_panel_jquery/css/slide.css" type="text/css" media="screen" />
    
	
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="Sliding_login_panel_jquery/Sliding_login_panel_jquery/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="Sliding_login_panel_jquery/Sliding_login_panel_jquery/js/slide.js" type="text/javascript"></script>
    
   <link rel="stylesheet" href="css/main.css" type="text/css" />
	
	<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/jquery-bp.js" ></script>
	<script type="text/javascript" src="js/navigation.js" ></script>





</head>

<body>

<script type="text/javascript">
function validreg()
{

var gender = document.getElementById('gender').value
var email = document.getElementById('email').value
var fn = document.getElementById('firstname').value
var ln = document.getElementById('lastname').value
var user = document.getElementById('username').value
var pass = document.getElementById('password').value
var repass = document.getElementById('cpassword').value
var age = document.getElementById('age').value


if(fn.indexOf('0')!==-1 || fn.indexOf('1')!==-1 || fn.indexOf('2')!==-1 || fn.indexOf('3')!==-1 || fn.indexOf('4')!==-1 || fn.indexOf('5')!==-1
 || fn.indexOf('6')!==-1 || fn.indexOf('7')!==-1 || fn.indexOf('8')!==-1|| fn.indexOf('9')!==-1)
{

alert("Numbers in name is not allowed");
return false;
}


else if(ln.indexOf('0')!==-1 || ln.indexOf('1')!==-1 || ln.indexOf('2')!==-1 || ln.indexOf('3')!==-1 || ln.indexOf('4')!==-1 || ln.indexOf('5')!==-1 || ln.indexOf('6')!==-1 || ln.indexOf('7')!==-1 || ln.indexOf('8')!==-1|| ln.indexOf('9')!==-1)
{

alert("Numbers in name is not allowed");
return false;
}


else if(fn == "" || gender == "" || ln == "" || email == ""  || age == "")
{

alert("Fill in the fields");
return false;
	
}
else if((email.indexOf('@')==-1) || (email.indexOf('.')==-1))
{

alert("Incorrect email");
return false;

}


else{
	
}


}

</script>


<!-- Panel -->

<div id="header"></div>
	<div id="navigation" class="container">
		<div id="home" class="pri-nav"><div>
        <a href="login.php">home</a></div></div>
		<div id="about" class="pri-nav"><div><a href="about">about</a></div></div>
		<div id="services" class="pri-nav"><div><a href="services">services</a></div></div>
		<div id="solutions" class="pri-nav"><div><a href="solutions">solutions</a></div></div>
		<div id="contact" class="pri-nav"><div><a href="contact">contact</a></div></div>
	</div>
	<div class="container">
		<div class="content">
			<div id="content-title"></div>
		
		</div>
	</div>

<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
			
				
				<p class="grey"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sample.png" width="150" height="150"/></p>
			</div>
			<div class="left">
				
                <h2>Welcome to Dominican College of Tarlac</h2>
				<h2>Sliding login panel Demo with jQuery</h2>		
				<p class="grey">You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!</p>
				<h2>Download</h2>
				<p class="grey">To download this script go back to <a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Download">article &raquo;</a></p>
                
				
			</div>
            
            
	  <div class="left right">			
				<!-- Register Form -->
				
                 	
                <form class="clearfix" action="#" method="post">
               
					<h1>Login:</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
                   
			
				</form>
                
                 <form class="clearfix" action="#" method="post">
               
					
					<input type="submit" name="reg_submit" value="Register" class="bt_login" />
                   
			
				</form>
               
			</div>
	  </div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Clock </a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

 <div id="reg_form">	
                  
   
<form name="form1" method="post" action="#" onSubmit="return validreg()">

<h2> REGISTER</h2>

Firstname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstname" id="firstname"/><br /><br />
Lastname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" id="lastname"/><br /><br />
Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="age" name="age" type="text" maxlength="2"   />
<br />
    <br />
    
Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender"  value="male" id="gender"/>
     
    Male 
 
    <input type="radio" name="gender"  value="female" id="gender"/>
    
    Female<br /><br />
    
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email"/><br /><br />
Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="username"/><br /><br />
Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password"/><br /><br />
Confirm Password:<input name="cpassword" type="password" id="cpassword" size="15"/><br /><br />


	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register" />	<input type="reset" value="Clear form" />

</form>
</div>

<br /><br /><br /><br /><br /><br />

<?php

error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');



$f			= 	mysql_escape_string($_POST['firstname']);
$l			= 	mysql_escape_string($_POST['lastname']);
$age 		= 	mysql_escape_string($_POST['age']);
$g 			= 	mysql_escape_string($_POST['gender']);
$e 			= 	mysql_escape_string($_POST['email']);
$u			= 	mysql_escape_string($_POST['username']);
$p			= 	mysql_escape_string($_POST['password']);
$cp			= 	mysql_escape_string($_POST['cpassword']);





mysql_select_db("prototype");

$checki = "SELECT Email from register where Email ='".$e."'";
	$creates =mysql_query($checki);
	
if($f >=1)
{
		echo'<script>alert("Please fill in the forms properly");return false;
			</script>';
	
	
}


		
	
	
	elseif(mysql_fetch_array($creates))
	{
	?>
	<script type="text/javascript">
	alert("Sorry,the email you entered is already exist, \n Please choose another email");
	</script>
    
    <?php
			
		
		}


	
			
			elseif($u == "" || $p == "" || $f == "" || $age == "" || $l == "" || $e == "" || $cp== "")
			
			{
			
					echo"";
	
			}
		
			
	elseif(strlen($p)<3 || strlen($cp)<3)
			
			{
			
			echo'<script>alert("Password character is too weak");
			</script>';
			
			
			}
			
		
			elseif($p !== $cp)
			{
			
			echo'<script>alert("Password do not matched")</script>';
			
			
			}
			
			
			
			elseif(strlen($p)>15 || strlen($cp)>15 )
			
			{
			
			echo'<script>alert("Password exceeds maximum character");
			</script>';
			
			
			}
			
				
			
			elseif((!empty ($u) && !empty ($p)) && (!empty ($f) && (!empty ($age)) && !empty ($l)) && (!empty ($e) && !empty ($cp)) )
			{
			
			$check = "SELECT Username from register where Username ='".$u."'";
	$create =mysql_query($check);
	
	if(mysql_fetch_array($create))
	{

	echo'<script>alert("Sorry,the username you entered is already exist, \n Please choose another username")</script>;';
	
			}
			
			else
			{
			

  
$insert= 

mysql_query("INSERT INTO register (Firstname,Lastname,Age,Gender,Email,Username,Password,CPassword)
								VALUES ('".$f."','".$l."','".$age."','".$g."','".$e."','".$u."','".$p."','".$cp."') ");
								
						
						echo'<script>alert("Your register")</script>';
			mysql_query("UPDATE register SET Status = 'Registered'
				WHERE Username = '$u' AND Password = '$p'");
			
			echo'<a href="login.php">asdad</a>';
						
						
			}
			
			}
  	

			
			
			

?>

</body>
</html>