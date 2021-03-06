<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='../jquery/jquery-1.5.2.min.js'></script>
<script type='text/javascript' src='../jquery/jquery-ui-1.8.11.custom.min.js'></script>
<script type='text/javascript' src='../fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript'>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
		
			editable: true,
			
			events: "json-events.php",
			
			eventDrop: function(event, delta) {
				alert(event.title + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
			
		});
		
	});

</script>
<style type='text/css'>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		
		}
		
	#loading {
		position: absolute;
		top: 5px;
		right: 5px;
		}

	#calendar {
		width: 500px;
		margin: 0 auto;
		}

</style>
</head>
<body>
<div id='loading' style='display:none'>loading...</div>
<div id='calendar'></div>
<p>json-events.php needs to be running in the same directory.</p>




<?php

	$year = date('Y');
	$month = date('m');

	echo json_encode(array(
	
		array(
			'id' => 111,
			'title' => "Event1",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"
		),
		
		array(
			'id' => 222,
			'title' => "Event2",
			'start' => "$year-$month-20",
			'end' => "$year-$month-22",
			'url' => "http://yahoo.com/"
		)
	
	));

?>
</body>
</html>
