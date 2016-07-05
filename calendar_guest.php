<?php 
	session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Calendar</title>
    
	<link rel="stylesheet" href="css/calendar.css" type="text/css" />
    
    <!-- Navigation -->
	<script type="text/javascript" src="nav_js/jquery.js" ></script>
	<script type="text/javascript" src="nav_js/jquery-bp.js" ></script>
	<script type="text/javascript" src="nav_js/navigation.js" ></script>
    
    <!-- login_panel -->
    <script src="login_panel/js/jquery-1.3.2.min.js" type="text/css" media="screen"></script>
    <script src="login_panel/js/slide.js" type="text/css" media="screen"></script>
    <link href="login_panel/css/slide.css" rel="stylesheet" type="text/css">
    <link href="login_panel/css/style.css" rel="stylesheet" type="text/css">
    
    <!-- calendar -->
    <link rel='stylesheet' type='text/css' href='fullcalendar-1.5.2/fullcalendar-1.5.2/fullcalendar/fullcalendar.css' />
    <link rel='stylesheet' type='text/css' href='fullcalendar-1.5.2/fullcalendar-1.5.2/fullcalendar/fullcalendar.print.css' media='print' />
    <script type='text/javascript' src='fullcalendar-1.5.2/fullcalendar-1.5.2/jquery/calendar.min.js'></script>
    <script type='text/javascript' src='fullcalendar-1.5.2/fullcalendar-1.5.2/jquery/jquery-ui-1.8.11.custom.min.js'></script>
    <script type='text/javascript' src='fullcalendar-1.5.2/fullcalendar-1.5.2/fullcalendar/fullcalendar.min.js'></script>
	<script type='text/javascript'>
	$(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		$('#calendar').fullCalendar( {
			editable: false,
			events: [ {
				title: 'All Day Event',
				start: new Date(y, m, 1)
			},
			{
				title: 'Long Event',
				start: new Date(y, m, d-5),
				end: new Date(y, m, d-2)
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d-3, 16, 0),
				allDay: false
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d+4, 16, 0),
				allDay: false
			},
			{
				title: 'Meeting',
				start: new Date(y, m, d, 10, 30),
				allDay: false
			},
			{
				title: 'Lunch',
				start: new Date(y, m, d, 12, 0),
				end: new Date(y, m, d, 14, 0),
				allDay: false
			},
			{
				title: 'Birthday Party',
				start: new Date(y, m, d+1, 19, 0),
				end: new Date(y, m, d+1, 22, 30),
				allDay: false
			},
			{
				title: 'Click for Google',
				start: new Date(y, m, 28),
				end: new Date(y, m, 29),
				url: 'http://google.com/'
			}]
		});
	});
	</script>
	<style type='text/css'>
		body {
			font-size: 14px;
			font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}
		
		#loading {
			position: absolute;
			top: 5px;
			right: 5px;
		}

		#calendar {
			position:absolute;
			top:270px;
			left:280px;
			width: 600px;
			z-index:2;
		}
	</style>
</head>

<body>
	<div id='calendar'></div>
	<div id="header"></div>
	<div id="navigation" class="container">
    	<div id="bg">
            <div id="home" class="pri-nav"><div><a href="index.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="about" class="pri-nav"><div><a href="calendar_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="services" class="pri-nav"><div><a href="gallery_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="solutions" class="pri-nav"><div><a href="about_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="contact" class="pri-nav"><div><a href="contact_sign.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
		</div>
    </div>
	<div class="container">
		<div class="content">
			<div id="content-title">
            	<div id="sidebar1">
            		<div id="calendar"></div>
                 </div>
            </div>
		</div>
        <div id="footer">
            <p class="foot">
            	<a href="index.php"><font color="#FF9900">home</font> </a> |
                <a href="calendar_guest.php"><font color="#FF0000">calendar </font></a> |
                <a href="gallery_guest.php"><font color="#3366CC">gallery </font></a> |
                <a href="about_guest.php"><font color="#33CC33">about</font></a> |
               <a href="contact_sign.php"><font color="#6666FF">contact</font></a>
            </p>
            
            <p class="link">
                <a href="#"><img src="img/fb.png"></a>
                <a href="#"><img src="img/twitter.png"></a>
                </p>
    			</div>
	</div>

	<div id="toppanel">
        <div id="panel">
        	<div class="content clearfix">
        		<div class="left">
        			<p class="grey" align="center">
        				<br><img src="../Images/logo.png" width="150" height="150"/></p>
        		</div>
                <div class="left">
                    <h2>Welcome to Dominican College of Tarlac</h2>
                    <h2>Sliding login panel Demo with jQuery</h2>		
                    <p class="grey">You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!</p> 
                </div>
                <div class="left right">
                	<form class="clearfix" action="#" method="post">
                        <h1>Login:</h1>
                        <label class="grey" for="log">Username:</label>
                        <input class="field" type="text" name="username" id="username" value="" size="23" />
                        <label class="grey" for="pwd">Password:</label>
                        <input class="field" type="password" name="password" id="password" size="23" />
                        <label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
                        <div class="clear">	
                            <input type="submit" name="submit" value="Login" class="bt_login" />
                            <input type="submit" name="reg_submit" value="Register" class="bt_register" />
                        </div>
                	</form>             
				</div>
			</div>
		</div>        
        <div class="tab">
            <ul class="login">
                <li class="left">&nbsp;</li>
                <li>Hello Guest!</li>
                <li class="sep">|</li>
                <li id="toggle">
                <a id="open" class="open" href="#">Log In | Register </a>
                <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
                </li><li class="right">&nbsp;</li>
            </ul> 
        </div>
    </div> 

<?php
  error_reporting (E_ALL ^ E_NOTICE);
  include('sql.php');
  mysql_select_db("prototype");
  $sql = mysql_query("CREATE TABLE register(
					  Firstname varchar(255),
					  Lastname varchar(255),
					  Age int,
					  Gender varchar(255),
					  Email varchar(255),
					  Username varchar(255),
					  Password varchar(255),
					  CPassword varchar(255),
					  Status varchar(255)
					  )");
  
  $admin = mysql_query("CREATE TABLE admin_access(
					  ADMIN_Username varchar(255),
					  ADMIN_Password varchar(255)
					  )");
  
  $mail = mysql_query("CREATE TABLE inquiry_message(
					  Name varchar(255),
					  Email varchar(255),
					  Message varchar(255)
					  )");
  
  if(isset($_POST['submit'])) {
	$username =$_POST['username'];
	$password =$_POST['password'];
	
	if(!empty($username) && !empty($password)) {  
	  $sql = mysql_query("SELECT * FROM register WHERE Username = '".$username."' AND 
	  Password = '".$password."' LIMIT 1");
	  
	  $admin = mysql_query("SELECT * FROM admin_access WHERE ADMIN_Username = '".$username."' AND 
	  ADMIN_Password = '".$password."' LIMIT 1");
  
	  if(mysql_num_rows($sql)>0) {
		$_SESSION['loggedin']= true;
		$_SESSION['username']= $username;
		$_SESSION['password']= $password;
		
		echo'<script>window.location="login_home.php"</script>';
		
		mysql_query("UPDATE register SET Status = 'IN'
		WHERE Username = '".$username."' AND Password = '".$password."'");
	  }
	  if(mysql_num_rows($admin)>0) {
		$_SESSION['username']= $username;
		$_SESSION['password']= $password;
		
		echo'<script>window.location="admin_info_reg.php"</script>';
	  } 
	  else {
		echo'<script>alert("Incorrect password or Username. Please fill it up properly")</script>';
	  }
	}
	else {
	  echo'<script>alert("You must enter a username and a password")</script>';
	}
  }	
?>
</body>
</html>


