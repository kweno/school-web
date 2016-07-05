<?php
// Written By: Mr. Jake R. Pomperada
// October 2, 2011
error_reporting (E_ALL ^ E_NOTICE);
include('sql.php');



mysql_select_db("prototype");

$tbl_name="inquiry_message";

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  	

    <script type="text/javascript" src="sorted-tables/sorted-tables/javascript/sortedtable-event.js"></script>
		<script type="text/javascript" src="sorted-tables/sorted-tables/javascript/sortedtable.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="sorted-tables/sorted-tables/css/common.css"/>
    
     <link rel="stylesheet" type="text/css" href="all_css.css"/>
    
</head>

<body>

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
		

		
	<div class="contentcss">				
			

          
<table class="sorted" id="s" cellpadding="0" cellspacing="0" align="center">
            <form name="form1" method="post" action="">

				<thead>
					<tr>
                    <th style="cursor: pointer;" id="sid"><span>Read/Del</span></th>
						<th style="cursor: pointer;" id="sid"><span>ID</span></th>
						<th style="cursor: pointer;" id="sname"><span>Name</span></th>
						<th style="cursor: pointer;" id="sbirth"><span>Email</span></th>
                        	<th style="cursor: pointer;" id="sbirth"><span>Message</span></th>
					</tr>
				</thead>
			
<?php
while($rows=mysql_fetch_array($result)){
?>

                
                <tr style="cursor: pointer;">
                
                <td align="center"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['ID']; ?>">
                
                </td>
				
				<td><?php echo $rows['ID']; ?></td>
				<td><?php echo $rows['Name']; ?></td>
					
					
				<td><?php echo $rows['Email']; ?></td>
				<td><?php echo $rows['Message']; ?></td>
					
       </tr>
                    
   
                    
                    <?php
}
?>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<input name="delete" type="submit" id="delete2" value="Refresh" >


     <input name="delete" type="submit" id="delete1" value="Delete">
     




</form>
			</table>
           
            
            
            <br /><br /><br /><br /><br />
       
			<form id="tabletool" action="#" method="post">
<div  id="move">
<fieldset>
					<legend>Move rows</legend>
					<input value="UP" onclick="moveRows(destTable,sourceTable)" type="button"><br />
					<input value="DOWN" onclick="moveRows(sourceTable,destTable)" type="button">
				</fieldset>
                <br />
               &nbsp;&nbsp; <input name="delete" type="submit" id="delete" value="Delete">
<input name="delete" type="submit" id="delete" value="Refresh">
                <br /><br /><br /><br /><br />	</div>
			
			<table class="sorted" id="d" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th style="cursor: pointer;" id="did" align="center"><span>Read/Del</span></th>
						<th style="cursor: pointer;" id="dname"><span>ID</span></th>
						<th style="cursor: pointer;" id="dbirth"><span>Name</span></th>
                        	<th style="cursor: pointer;" id="dbirth"><span>Email</span></th>
                            	<th style="cursor: pointer;" id="dbirth"><span>Message</span></th>
					</tr>
				</thead>
				
				<tbody><tr style="cursor: pointer;">
						
					</tr></tbody>
			</table>
            </form>
		
</div>
    
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
echo'<script>
alert("Record is successfully deleted")</script>';
echo "<br><br>";
// echo "<meta http-equiv=\"refresh\" content=\"0;URL=del.php\">";
}
}
// mysql_close();
?>
        
	</body></html>