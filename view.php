<?php
	mysql_connect('localhost','root','');
	mysql_select_db('BloodBank');
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>

<div class="a2">
	<h4><strong>Filters:</strong></h4>

</div>

<div class="a3">
	<table>
		<th>S. No.</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Address</th>
		<th>Email Id</th>
		<th>Blood Group</th><br>
			<?php
				$query="SELECT `Name`, `Gender`, `Age`, `Address`, `Email`, `Mobile`, `BGroup` FROM `Donor` WHERE 1";
				$res=mysql_query($query);
				{
					$i=1;
					while ($row=mysql_fetch_assoc($res))
					{
						$n=$row['Name'];
						$gen=$row['Gender'];
						$age=$row['Age'];
						$addr=$row['Address'];
						$email=$row['Email'];
						$number=$row['Mobile'];
						$bg=$row['BGroup'];
						?>
						<tr>
						<td><?php echo $i; $i++; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $gen; ?></td>
						<td><?php echo $age; ?></td>
						<td><?php echo $addr; ?></td>
						<td><?php echo $email; ?></td>
						<td><?php echo $number; ?></td>
						<td><?php echo $bg; ?></td>
						</tr><?php
					}
				}
			?>
		</td>
	</table>
	<?php

	?>
</div>

</body>
</html>