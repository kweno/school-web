<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<script type="text/javascript">
function valid()
{


var email = document.getElementById('emailadd').value
var name = document.getElementById('username_contact').value


var comment = document.getElementById('message').value



 if(name.indexOf('1')!==-1 || name.indexOf('2')!==-1 || name.indexOf('3')!==-1 || name.indexOf('4')!==-1 || name.indexOf('5')!==-1
 || name.indexOf('6')!==-1 || name.indexOf('7')!==-1 || name.indexOf('8')!==-1|| name.indexOf('9')!==-1)
{

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
// End -->
</script>



		
            
            

				
           






	<div id="form">
	  <form id="form1" name="myform" method="post" action="" onSubmit="return valid()">
	    <p>
	      <label for="emailadd"></label>
        Name:
        <label for="username_contact"></label>
        <input type="text" name="username_contact" id="username_contactad" />
	    *</p>
	    <p>Email Add:
	      <input type="text" name="emailaddad" id="emailadd" />
      *</p>
	    <p>Comment Box:*</p>
	    <p>
	      <label for="comment"></label>
          <textarea id="comment" name="messagead" wrap="physical" cols=60 rows=10
onKeyDown="textCounter(this.form.message,this.form.remLen,500);" 
onKeyUp="textCounter(this.form.message,this.form.remLen,500);"></textarea>
	      
         <input readonly type="text" name="remLen" size="3" maxlength="3"value="500"> characters left
         
	    </p>
	    <p>
	      <input type="submit" name="button" id="button" value="Send" />
	      <input type="reset" name="button2" id="button2" value="Clear" />
	    </p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	   
	  </form>
	</div>


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



