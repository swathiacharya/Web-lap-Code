<html>
	<head>
		<style>
			div{
				background-color: aqua;
				font-size:35px
			}
		</style>
	</head>
	<body>
		<div>
			<?php
				$res = shell_exec("python states.py");
				$states  = explode("\n",$res);
				
				echo "Statement   <b>".$states[4]."</b><br>";
				echo "word in variable states that ends in xas  <b> ".$states[0] ."</b><br>";
				echo "word in states that begins with k and ends in s  <b> ".$states[1] ."</b><br>";
				echo "word in states that begins with k and ends in s  <b> ".$states[2]."</b><br>";
				echo "word in states that ends in a  <b> ".$states[3]."</b><br>";
				
			?>
		</div>
	</body>

</html>
