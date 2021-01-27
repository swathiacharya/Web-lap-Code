<html>
	<head>
	</head>
	<boby>
		<?php
			$a = array(array(1,2,3), array(4,5,6), array(7,8,9));		
			$b = array(array(7,8,9), array(4,5,6), array(1,2,3));
			
			$m = count($a);
			$n = count($a[2]);
			
			$p = count($b);
			$q = count($b[2]);
			
			
			
			echo "<h1> The Matrix of First Array </h1>";
			for($row = 0; $row<$m; $row++)
			{
				for($col = 0; $col<$n; $col++)
				{
					echo " ". $a[$row][$col];
				}
				echo "<br>";
			}
			
			echo "<br>";
			echo "<h1> The Matrix of Second Array </h1>";
			for($row = 0; $row<$p; $row++)
			{
				for($col = 0; $col<$q; $col++)
				{
					echo " ". $b[$row][$col];
				}
				echo "<br>";
			}
			
			
			echo "<br>";
			echo "<h1> The Transpose of First Array </h1>";
			for($row = 0; $row<$p; $row++)
			{
				for($col = 0; $col<$q; $col++)
				{
					echo " ". $a[$col][$row];
				}
				echo "<br>";
			}
			
			
			echo "<br>";
			echo "<h1> The Addition</h1>";
			if($m==$p && $n == $q)
			{
				for($row = 0; $row<3; $row++)
				{
					for($col = 0; $col<3; $col++)
					{
						echo " ". $a[$row][$col]+$b[$row][$col];
					}
					echo "<br>";
				}
			
			}
			
			
			echo "<br>";
			echo "<h1> The Multiplication</h1>";
			if($n===$p)
			{
				$res = array();
				for($i = 0; $i<$m; $i++)
				{
					for($j = 0; $j<$q; $j++)
					{
						for($k = 0; $k < $n; $k++)
						{
							$res[$i][$j] += $a[$i][$k]*$b[$k][$j];
						}
					}
					
				}
				
				for($row = 0; $row<$m; $row++)
				{
					for($col = 0; $col<$p; $col++)
					{
						echo " ". $res[$row][$col];
					}
					echo "<br>";
				}
				
				
			}
			
			
		?>
	</body>
</html>
