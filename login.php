<?php
	session_start();
?>

<?php
	error_reporting (E_ALL ^ E_NOTICE);
	include('sql.php');
	mysql_select_db("prototype");
	
	if(isset($_POST['submit'])) {
		$username =$_POST['username'];
		$password =$_POST['password'];
		
		if(!empty($username) && !empty($password)) {
			$sql = mysql_query("SELECT * FROM register WHERE Username = '".$username."' AND Password = '".$password."' LIMIT 1");
	
			if(mysql_num_rows($sql)>0) {
				$_SESSION['loggedin']= true;
				$_SESSION['username']= $username;
				$_SESSION['password']= $password;
				
				mysql_query("UPDATE register SET Status = 'IN' WHERE Username = '".$username."' AND Password = '".$password."'");
			} else {
				echo'<script>alert("Fill it up properly")</script>';
			}
		} else {
			echo'<script>alert("You must enter a username and a password")</script>';
		}
	}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
</head>

<body>
    <form id="form1" name="form1" method="post">
        Username:<input type="text" id="username" name="username" /><br />
        Password:<input type="password" id="password "name="password" /><br />
    	<input type="submit" name="submit" value="Login" />
    </form>
</body>
</html>