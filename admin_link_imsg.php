<?php

include('sql.php');

mysql_select_db("prototype");

$result=mysql_query("SELECT * FROM inquiry_message");

$as=$_POST['checkbox'];

$count=mysql_num_rows($result);

echo "Pageviews=". $_SESSION['checkbox'];

 for($i=0;$i<count($as);$i++){ 

 $del_id = $as[$i]; 

 $sql = "DELETE FROM inquiry_message WHERE id='".$del_id."'"; 

$result = mysql_query($sql); 

} 
mysql_close($con);
?>
