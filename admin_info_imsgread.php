<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> 



		
        




				
                    
<?php

error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');



mysql_select_db("prototype");


$admin = mysql_query("SELECT * FROM inquiry_message");
						
			
		while ($row = mysql_fetch_array($admin))
			{
			
	
			echo "<tr style='cursor: pointer;'>";
		
			
		
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>". $row['Name'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>". $row['Email'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Message'] ."</font>"."</td>";
			
			
			
			echo "</tr>";
			
			}
			
			
			echo "</table>	<form method='post'>
			<input type='submit' name='read' value='BACK'>
			
			</form>	
			
		";
		
		
			
			
  
  
 
        ?>
						
				


</body>
</html>