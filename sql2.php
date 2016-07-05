<?php
	$con= mysql_connect("localhost","root","k123");
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	} elseif (!mysql_query("CREATE DATABASE prototype",$con)) {
	  	echo"";
	} else {
		echo"success";
	}
?>