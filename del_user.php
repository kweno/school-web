
  <?php
  include 'sql.php';
  include 'admin_info_reg.php';
	
  
  mysql_select_db("prototype");
  
      
		if ($del_id =="")
		{
		echo '<script>alert ("Please enter the Id number to DELETE files")</script>';
		}
		elseif($del_id == TRUE)
		{
		mysql_query ("DELETE FROM register WHERE id = '".$del_id."'");
		echo '<script>alert ("You succesfully deleted an item");window.location ="admin_info_reg.php"</script>';
	}
	
	else
	
	{
	
	echo"sdasdasdasd";	
		
	}
	
		?>