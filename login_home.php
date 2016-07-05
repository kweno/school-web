<?php 
  session_start(); 
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dominican College of Tarlac</title>
    
	<link rel="stylesheet" href="css/main.css" type="text/css" />
    
    <!-- Navigation -->
	<script type="text/javascript" src="nav_js/jquery.js" ></script>
	<script type="text/javascript" src="nav_js/jquery-bp.js" ></script>
	<script type="text/javascript" src="nav_js/navigation.js" ></script>
    
    <!-- login_panel -->
    <script src="login_panel/js/jquery-1.3.2.min.js" type="text/css" media="screen"></script>
    <script src="login_panel/js/slide.js" type="text/css" media="screen"></script>
    <link href="login_panel/css/slide.css" rel="stylesheet" type="text/css">
    <link href="login_panel/css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
	<div id="header"></div>
	<div id="navigation" class="container">
    	<div id="home" class="pri-nav"><div><a href="login_home.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="about" class="pri-nav"><div><a href="calendar_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="services" class="pri-nav"><div><a href="gallery_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="solutions" class="pri-nav"><div><a href="about_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="contact" class="pri-nav"><div><a href="contact_guest"><img src="home.jpg" width="97" height="50"/></a></div></div>
	</div>
	<div class="container">
		<div class="content">
			<div id="content-title"></div>
			<!-- the rest of the content-->
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
include('sql.php');
	echo ' '.$_SESSION['username'].' ';
	
	if(isset($_POST['submit'])) {
		echo'<script>window.location = "index.php"</script>';
		mysql_query("UPDATE users SET status = 'OUT'");
		unset($_SESSION);
		session_destroy();
	} else {
		echo'<script>alert("Problem in login")</scripts>';
		echo'<script>window.location = "index.php"</script>';
	} 
?>
</body>
</html>

