<?php
session_start();

?>


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
		

    
    <script type="text/javascript" src="sorted-tables/sorted-tables/javascript/sortedtable-event.js"></script>
		<script type="text/javascript" src="sorted-tables/sorted-tables/javascript/sortedtable.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="sorted-tables/sorted-tables/css/common.css" />
    
      

</head>

<body id="dt_example">

<!--sorted tables script code-->



<script type="text/javascript">
    function moveRows(s,d) {
				var a = new Array();
				for (var o in s.selectedElements) {
					a.push(s.selectedElements[o]);
				}
				for (var o in a) {
					var elm = a[o];
					var tds = elm.getElementsByTagName('td');
					for (var i in tds) {
						if (tds[i].headers) tds[i].headers = d.table.id+''+tds[i].headers.substr(d.table.id.length);
					}
					d.body.appendChild(a[o]);
					d.deselect(a[o]);
					d.init(d.table);
					d.sort();
					s.deselect(a[o]);
					s.init(s.table);
				}
			}
    </script>
		
        

<!-- Panel -->



				
            				
                    
<?php

error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');


mysql_select_db("prototype");


$admin = mysql_query("SELECT * FROM register");

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
			<th><font face='trebuchet ms' color='#222222' size='1'>DELETE</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>ID</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>FIRSTNAME</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>LASTNAME</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>AGE</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>GENDER</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>EMAIL</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>USERNAME</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>PASSWORD</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>CON-PASSWORD</font></th>
			<th><font face='trebuchet ms' color='#222222' size='2'>STATUS</font></th>
			
			</tr>
			</thead>
			";
			
			
			
		while ($row = mysql_fetch_array($admin))
			{
			
	
			echo "<tr style='cursor: pointer;'>";
		
		
        
        echo"<td><form method='post' action='del_user.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								<input type='checkbox' name='ae' value='".$row['ID']."'></td>";
        
        
     
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>". $row['ID'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>". $row['Firstname'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Lastname'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Age'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Gender'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Email'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Username'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Password'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['CPassword'] ."</font>"."</td>";
			echo "<td align='center'>" ."<font color='#333333' face='trebuchet ms'>" . $row['Status'] ."</font>"."</td>";
			
			
			echo "</tr>";
			echo "</tr>";
			}
			
			
			echo "</table>";
			
			echo'<br><br>

    <input type="text" name="del" maxlength="3" />
   
    <input type="submit" name="button" id="button" value="Delete" />
	

  </form></div></div>
  
  ';
  
  
    
    $delete=$_POST['ae'];
  
  if(isset($_POST['button']))
  
  { 

 for($i=0;$i<$delete;$i++)
 
 { 

 $del_id = $delete; 

 mysql_query ("DELETE FROM register WHERE id = '".$del_id."'");
		
	
 }
 

} 

  
  ?>
  

<script type="text/javascript">
			var sourceTable, destTable;
			function init() {
				sourceTable = new SortedTable('s');
				destTable = new SortedTable('d');
				mySorted = new SortedTable();
				mySorted.colorize = function() {
					for (var i=0;i<this.elements.length;i++) {
						if (i%2){
							this.changeClass(this.elements[i],'even','odd');
						} else {
							this.changeClass(this.elements[i],'odd','even');
						}
					}
				}
				mySorted.onsort = mySorted.colorize;
				mySorted.onmove = mySorted.colorize;
				mySorted.colorize();
				secondTable = SortedTable.getSortedTable(document.getElementById('id'));
				secondTable.allowDeselect = false;
			}
      init();
			
		</script>   
        
        


  
 
			
</body>
</html>