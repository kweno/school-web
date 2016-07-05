  <?php
  
  include 'index.php';



session_start();

if($_SESSION['loggedin2'] == true)
{
	session_destroy();
	
	unset($_SESSION);

}



			echo'<script>window.location = "index.php"</script>';



?>