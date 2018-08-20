<?php
	mysql_connect('localhost','root','');
	mysql_select_db('BloodBank');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donor Details</title>
</head>
<body>

<h3>Welcome Donor!</h3><br>
<h4>Please fill in your details:</h4><br>

<div class="form">
	<form method="post">
		Full Name<input type="text" name="name"><br><br>
		Gender:<br>
		Male<input type="radio" name="sex" value="m"><br>
		Female<input type="radio" name="sex" value="f">
		<br><br>
		Age<input type="number" name="age"><br><br>
		Address<input type="text" name="addr"><br><br>
		Email Address<input type="email" name="email"><br><br>
		Mobile Number<input type="number" name="mobile"><br><br>
		Blood Group:<select name="group">
			<option value="a+">A positive</option>
			<option value="a-">A negative</option>
			<option value="b+">B positive</option>
			<option value="b-">B negative</option>
			<option value="ab+">AB positive</option>
			<option value="ab-">AB negative</option>
			<option value="o+">O positive</option>
			<option value="o-">O negative</option>
		</select><br><br>
		<input type="reset" name="reset" value="Reset">
		<input type="submit" name="submit" value="submit">
	</form>
</div>

<?php
	if(isset($_POST['submit']))
	{
		$n=$_POST['name'];
		$gen=$_POST['sex'];
		$age=$_POST['age'];
		$addr=$_POST['addr'];
		$email=$_POST['email'];
		$number=$_POST['mobile'];
		$bg=$_POST['group'];
		switch ($bg) {
			case 'a+':
				$group="A positive";
				break;
			case 'a-':
				$group="A negative";
				break;
			case 'b+':
				$group="B positive";
				break;
			case 'b-':
				$group="B negative";
				break;
			case 'ab+':
				$group="AB positive";
				break;
			case 'ab-':
				$group="AB negative";
				break;
			case 'o+':
				$group="O positive";
				break;
			case 'o-':
				$group="O negative";
				break;
		}
		if($gen=='m')
			$gender="Male";
		else
			$gender="Female";
		$query= "INSERT INTO Donor(Name,Gender,Age,Address,Email,Mobile,BGroup) VALUES('$n','$gender','$age','$addr','$email','$number','$bg')";
		if(mysql_query($query))
			header('location:interim.php');
	}
?>

</body>
</html>