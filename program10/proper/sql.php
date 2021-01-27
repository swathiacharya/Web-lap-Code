<?php
	$sql=mysqli_connect("localhost","root","password","prog10");
?>




<html>
	<head>
	<style>
		*{
			text-align:center;
		}
	</style>
	</head>
	<body>
		<h1>Selection Sort for Student</h1>
		<form action="" method="post">
			<h1> Sort By
				<select name = 'field'>
					<option name="" disabled selected>Choose Field</option>
					<option name="name">Name</option>
					<option name="usn">Usn</option>
					<option name="year">Year</option>
					<option name="marks">Marks</option>
					<option name="coll">College</option>
				</select>
			</h1>
			<h1> 
				<input type = 'submit' name = 'submit' value='Submit' />
				<input type = 'reset' name = 'reset' value='Reset' />
			
			</h1>
		</form>
		
		
		
		<?php
		
			function selection_sort($data, $key)
			{
				for($i = 0; $i<count($data)-1; $i++)
				{
					$min = $i;
					for($j = $i+1; $j<count($data); $j++)
					{
						if($data[$j]<$data[$min])
						{
							$min = $j;
						}
					}
					$data = swap_position($data, $i, $min);
					$key = swap_position($key, $i, $min);
				}
				return $key;
			}
				
			function swap_position($data1, $left,$right)
			{
				$temp = $data1[$right];
				$data1[$right] = $data1[$left];
				$data1[$left] = $temp;
				
				return $data1;
			}
		

		
		
			
			$sql = mysqli_connect('localhost','root','','prog10');
			$str = "SELECT * FROM studentdetails";
			$res = mysqli_query($sql,$str);
			
			$field = 'none';
			$myarr = [];
			$original = [];
			$i=1;
			
			while($arr = mysqli_fetch_assoc($res))
			{
				$myarr[] = $arr;
			}
			echo $myarr;
			
			if(isset($_POST['submit']) &&  isset($_POST['field']))
			{
				$field = $_POST['field'];
				$original = array_column($myarr,$field,'id');
				$originalKey = array_keys($original);
				$originalVal = array_values($original);
				
				$sortedKeys = selection_sort($originalVal,$originalKey);
				$myarr =[];
				
				
				foreach ($sortedkeys as $keys)
				{
					$str = "SELECT * FROM studentdetails WHERE id = '$keys'";
					$res = mysqli_query($sql,$str);
					$myarr[] =  mysqli_fetch_assoc($res);
				}
			}
		?>
		<table border = "1" width= "80%"; align="center">
			<tr>
				<th colspan = "6">
				Student Details [sorted By: <?php echo $field; ?> ]
				</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>USN</th>
				<th>YEAR</th>
				<th>MARKS</th>
				<th>COLLEGE</th>
				
			</tr>
			<?php foreach($myarr as $arr): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $arr['name']; ?></td>
				<td><?php echo $arr['usn'];?></td>
				<td><?php echo $arr['year'];?></td>
				<td><?php echo $arr['marks'];?></td>
				<td><?php echo $arr['coll'];?></td>
			
			</tr>
			<?php endforeach; ?>
		<table>	
	</body>
</html>













