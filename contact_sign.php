<?php 
  session_start(); 
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dominican College of Tarlac</title>
    
	<link rel="stylesheet" href="css/contact.css" type="text/css" />
    
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
    <style type="text/css">
        #success_message { 
			border: 1px solid #000; 
			width: 550px; 
			text-align: left; 
			padding: 10px 7px; 
			background: #33ff33; 
			color: #000; 
			font-weight; bold; 
			font-size: 1.2em; 
			border-radius: 4px; 
			-moz-border-radius: 4px; -
			webkit-border-radius: 4px; 
		}
        fieldset { 
			width: 90%; 
		}
        legend { 
			font-size: 24px; 
		}
        .note { 
			font-size: 18px; 
		}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js"></script>
    <script type="text/javascript" language="javascript">
		function reloadCaptcha() {
			document.getElementById('siimage').src = './securimage_show.php?sid=' + Math.random();
		}
		function processForm() {
			var textVal=document.getElementById('emailadd').value;
			var regExpr=new RegExp("^([a-zA-Z0-9_.-]+[@][a-z]+[.](([a-z]{3})|([a-z]{2}[.][a-z]{2})))+$","g");
			
			if(textVal.match(regExpr)) {
				alert("Correct Email");
			}
			
			new Ajax.Request('<?php echo $_SERVER['PHP_SELF'] ?>', {
				method: 'post',
				parameters: $('contact_form').serialize(),
				onSuccess: function(transport) {
					try {
						var r = transport.responseText.evalJSON();
	
						if (r.error == 0) {
							$('success_message').show();
							$('contact_form').reset();
							reloadCaptcha();
							setTimeout("$('success_message').hide()", 30000);
						} else {
							alert("There was an error with your submission.\n\n" + r.message);
						}
					} catch(ex) {
						alert("There was an error parsing the json");
					}
				},
				onFailure: function(err) {
					alert("Ajax request failed");
				}
			});
			return false;
			}
	</script>
	<SCRIPT LANGUAGE="JavaScript">
		function textCounter(field, countfield, maxlimit) {
			if (field.value.length > maxlimit)
			field.value = field.value.substring(0, maxlimit);
		else 
			countfield.value = maxlimit - field.value.length;
    	}
    </script>
	<script type="text/javascript">
        function valid() {
            var email = document.getElementById('emailadd').value
            var name = document.getElementById('username_contact').value
            var comment = document.getElementById('message').value
        
            if(name.indexOf('1')!==-1 || name.indexOf('2')!==-1 || name.indexOf('3')!==-1 || name.indexOf('4')!==-1 || name.indexOf('5')!==-1
             || name.indexOf('6')!==-1 || name.indexOf('7')!==-1 || name.indexOf('8')!==-1|| name.indexOf('9')!==-1) {
                alert("Numbers in name is not allowed");
                return false;
            }
        }
    </script>
    <SCRIPT LANGUAGE="JavaScript">
        function textCounter(field, countfield, maxlimit) {
            if (field.value.length > maxlimit)
                field.value = field.value.substring(0, maxlimit);
            else 
                countfield.value = maxlimit - field.value.length;
            }
    </script>

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
                            <div id="commentbar">
                                <div id="form">
                                    <form id="form1" name="myform" method="post" action="" onSubmit="return processForm()">
                                        <label for="emailadd"></label>
                                        <p>Name:
                                        <label for="username_contact"></label>
                                        <input type="text" name="username_contact" id="username_contact" size="40"/>
                                        *</p>
                                        <p>Email Add:
                                        <input type="text" name="emailadd" id="emailadd" size="35"/>
                                        *</p>
                                        <p>Comment Box:  *</p>
                                        <p>
                                        <label for="comment"></label>
                                        <textarea id="comment" name="message" wrap="physical" cols=60 rows=10
                                        onKeyDown="textCounter(this.form.message,this.form.remLen,500);" 
                                   		onKeyUp="textCounter(this.form.message,this.form.remLen,500);"></textarea>
                                    	<br><input readonly type="text" name="remLen" size="3" maxlength="3"value="500"> characters left
                                    	</p>
                                        <p>
                                        <img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="./securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
                                        <object type="application/x-shockwave-flash" data="./securimage_play.swf?audio_file=./securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" height="32" width="32">
                                        <param name="movie" value="./securimage_play.swf?audio_file=./securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000">
                                        </object>
                                        
                                        &nbsp;
                                        <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onClick="reloadCaptcha(); this.blur(); return false"><img src="./images/refresh.png" alt="Reload Image" onClick="this.blur()" align="bottom" border="0"></a><br />
                                        <strong>Enter Code*:</strong><br />
                                        <input type="text" name="ct_captcha" size="12" maxlength="8" />
                                        </p>
                                        <p>
                                        <input type="submit" name="button" id="button" value="Send" />
                                        <input type="reset" name="button2" id="button2" value="Clear" />
                                        </p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        </p>
									</form>
								</div>
                            </div>
                        </div>    
                        <div id="sidebar2">
                            <div id="information">
                            </div>
                            <div id="map">
                            	<img src="img/map.png" width="250" height="218">
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
	
	$uc = mysql_escape_string($_POST['username_contact']);
	$ea	= mysql_escape_string($_POST['emailadd']);
	$com = mysql_escape_string($_POST['message']);

	mysql_select_db("prototype");
	
	if($uc >=1) {
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($uc == "" && $ea == "" && $com == "") {
		echo'<div id="validation_contact_name">Please dont leave this field blank</div>';
		echo'<div id="validation_contact_email">Please dont leave this field blank</div>';
		echo'<div id="validation_contact_comment">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';	
	} elseif($ea == "" && $com == "") {
		echo'<div id="validation_contact_email">Please dont leave this field blank</div>';
		echo'<div id="validation_contact_comment">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($uc == ""  && $com == "") {
		echo'<div id="validation_contact_name">Please dont leave this field blank</div>';
		echo'<div id="validation_contact_comment">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($uc == "" && $ea == "") {
		echo'<div id="validation_contact_name">Please dont leave this field blank</div>';
		echo'<div id="validation_contact_email">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($uc == "") {	
		echo'<div id="validation_contact_name">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($ea == "") {
		echo'<div id="validation_contact_email">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($com == "") {
		echo'<div id="validation_contact_comment">Please dont leave this field blank</div>';
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif(strlen($uc)<6 || strlen($ea)<3 || strlen($com)<7) {
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif($uc >=1 || $ea >1 || $com >1 ) {
		echo'<script>alert("Please fill in the forms properly");return false;
		</script>';
	} elseif((!empty ($uc)  && !empty ($ea)) && (!empty ($com))) {
		$insert = mysql_query("INSERT INTO inquiry_message (Name,Email,Message) VALUES ('".$uc."','".$ea."','".$com."') ");									
	} else {
		echo"luse";
	}
?>
</body>
</html>


