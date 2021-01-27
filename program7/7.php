<html>
	<head>
		<meta http-equiv="refresh" content="1">
		<title>Clock</title>
		<style type="text/css">
			h1,h2{
				text-align:center;
				//color: red;
				
			}
			div{
				 background-color: coral;
				 
			}
			body{
			background-color: #92a8d1;
			}
		</style>
	</head>
	<body>
		<h1>Server Time</h1>
		
		<?php
			echo "<div><h1>Time </h1><h2>".date('h:i:s A')."</h2></div>";
			date_default_timezone_set("Asia/Kolkata");
			
			echo "<div><h1>Server Date </h1><h2>".date('d-m-Y') ."</h2></div>";
			echo "<div><h1>Server Time </h1><h2>".date('h:i:s A')."</h2></div>";
			
		
		
		?>
		</div>
	</body>
</html>
