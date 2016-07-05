<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    

  	<meta name="description" content="Demo of a Sliding Login Panel using jQuery 1.3.2" />
  	<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	

<!--try search bar-->
<style type="text/css" title="currentStyle">
			@import "DataTables-1.8.2/DataTables-1.8.2/media/css/demo_page.css";
			@import "DataTables-1.8.2/DataTables-1.8.2/media/css/demo_table.css";
		</style>
		<script type="text/javascript" language="javascript" src="DataTables-1.8.2/DataTables-1.8.2/media/js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="DataTables-1.8.2/DataTables-1.8.2/media/js/jquery.dataTables.js"></script>
		




</head>

<body id="dt_example">

<!--sorted tables script code-->



                    
<?php

error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');


mysql_select_db("prototype");


$admin = mysql_query("SELECT * FROM inquiry_message");

?>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>

<?php
			echo "<div id='container'><div id='demo'><table class='sorted' cellspacing='0' cellpadding='0' id='example'>
			<thead>
			<tr>
			<th><font face='trebuchet ms' color='#222222' size='2'>Name</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>Email Add</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>Message</font></th>
			
			
			</tr>
			</thead>
			";
			
			
			
		while ($row = mysql_fetch_array($admin))
			{
			
	
			echo "<tr style='cursor: pointer;'>";
		
		
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>". $row['Name'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>". $row['Email'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Message'] ."</font>"."</td>";
			
			
			
			echo "</tr>";
			echo "</tr>";
			}
			
			
			echo "</table></div></div>";
			
  
  
 
        ?>
						
				
</div>

</body>
</html>