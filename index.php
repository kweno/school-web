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
    
    <!-- gallery -->
 	<link href="css/school_img.css" rel="stylesheet"" type="text/css">
    <script type="text/javascript" src="slideshow_js/jquery.min.js"></script>
	<script type="text/javascript" src="slideshow_js/jquery.scrollTo.js"></script>
    <script>
		$(document).ready(function() {
			var speed = 5000;
			$('#mask-gallery, #gallery li').width($('#slider').width());	
			$('#gallery').width($('#slider').width() * $('#gallery li').length);
			$('#mask-gallery, #gallery li, #mask-excerpt, #excerpt li').height($('#slider').height());
		
			var run = setInterval('newsscoller(0)', speed);	
			$('#gallery li:first, #excerpt li:first').addClass('selected');
			$('#btn-pause').click(function () {
			  clearInterval(run);
			  return false;	
		});
	
		$('#btn-play').click(function () {
			run = setInterval('newsscoller(0)', speed);	
			return false;
		});
	  
		$('#btn-next').click(function () {
			newsscoller(0);	
			return false;	
		});	
	  
		$('#btn-prev').click(function () {
			newsscoller(1);	
			return false;
		});
	  
		$('#slider').hover(
			function() {
			clearInterval(run);
		}, function() {
			  run = setInterval('newsscoller(0)', speed);	
		   });	
		});
		
		function newsscoller(prev) {
			var current_image = $('#gallery li.selected').length ? 
			$('#gallery li.selected') : 
			$('#gallery li:first');
			var current_excerpt = 
			$('#excerpt li.selected').length ? $('#excerpt li.selected') : 
			$('#excerpt li:first');
			
		if (prev) {
			var next_image = (current_image.prev().length) ? current_image.prev() : 
			$('#gallery li:last');
	
			var next_excerpt = (current_excerpt.prev().length) ? current_excerpt.prev() :
			$('#excerpt li:last');
			} else {
				var next_image = (current_image.next().length) ? current_image.next() : 
				$('#gallery li:first');
				var next_excerpt = (current_excerpt.next().length) ? current_excerpt.next() : 
				$('#excerpt li:first');
			}
		
		  $('#excerpt li, #gallery li').removeClass('selected');next_image.addClass('selected');
		  next_excerpt.addClass('selected');
		  $('#mask-gallery').scrollTo(next_image, 800);	
		  $('#mask-excerpt').scrollTo(next_excerpt, 800);				
		}
	</script>
</head>
<body>
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
                <div id="sidebar">
                <div id="sidebar1">
                        <div id="subsidebar1"><br><br><br><br>
                          <div id="debug"></div>
                            <div id="slider">
                                <div id="mask-gallery">
                                    <ul id="gallery">
                                        <li><img src="img/1.jpg" width="300" height="186" alt=""/></li>
                                        <li><img src="img/2.jpg" width="300" height="186" alt=""/></li>
                                        <li><img src="img/3.jpg" width="300" height="186" alt=""/></li>
                                    </ul>
                                </div>
                                <div id="mask-excerpt">
                                    <ul id="excerpt">
                                        <li>School Chapel</li>
                                        <li>School Library</li>
                                        <li>School</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="subsidebar2">
                        
                        	<p>Variety Show<br>
                            Science and Math Exhibit<br>
                            Linggo ng Wika<br>
                            No classes</p>
                        </div>
                    </div>
                    <div id="sidebar2">
                        <div id="sub1">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Education is dynamic. Changes occur daily, therefore it is increasingly important to maintain stability through a system which embraces the values of traditional teaching while enhancing it with modern resources and technology so that our children can function competently in today's and tomorrow's world" . . . </p>                            
                        </div>
                        <div id="sub2">
                        </div>
                    </div>
                    
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

