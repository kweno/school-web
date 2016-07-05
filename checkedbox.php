<?php
include('sql.php');

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name=mysql_select_db("prototype"); // Database name
$tbl_name=mysql_query("SELECT * FROM register");
 // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$result=mysql_query("SELECT * FROM register");
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>
<html>
<body>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><center>
<strong>Delete multiple Records in MySQL</strong> </center></td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Lastname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $row['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['lastname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['email']; ?></td>
</tr>
<?php
}
?>

<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF">
<input name="delete" type="submit" id="delete" value="Delete">
<input name="delete" type="submit" id="delete" value="Refresh" onclick="<meta http-equiv=\"refresh\" content=\"0;URL=del.php\">
</td>
</tr>

</table>
</form>
</td>
</tr>
</table>
</body>
</html>
<?php

// Check if delete button active, start this  

 if(isset($_POST['delete'])){ 

 for($i=0;$i<count($_POST['checkbox']);$i++){ 

 $del_id = $_POST['checkbox'][$i]; 

 $sql = "DELETE FROM $tbl_name WHERE id='$del_id'"; 

$result = mysql_query($sql); 

} 

// if successful redirect to delete_multiple.php 
if($result){
echo "<br>";
echo "<h3> Record is successfully deleted. </h3>";
echo "<br><br>";
// echo "<meta http-equiv=\"refresh\" content=\"0;URL=del.php\">";
}
}
// mysql_close();
?>
