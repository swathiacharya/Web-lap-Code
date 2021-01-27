<html>
	<head>
		<style>
			*{
				text-align:center;
			}
		</style>		
	</head>
	<body>
		
		<?php
			$op1 = $_POST['op1'];
			$op2 = $_POST['op2'];
			$operation = $_POST['operation'];
			switch($operation)
			{
				case '+' : $res = $op1+$op2;
						   break;
				case '-' : $res = $op1-$op2;
						   break;
							
				case '*' : $res = $op1*$op2;
						   break;
				case '/' : if($op2==0)
							$res = 0;
						   else
						   	$res = $op1/$op2;
						   break;
			}
			echo '<h1>Calculation:</h1>';
			echo "<h3>".$op1." ".$operation." " . $op2." = ".$res."</h3>";
		?>
	</body>
</html>
