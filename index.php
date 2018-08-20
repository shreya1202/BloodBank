<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank</title>
</head>
<body>

<div class="a1">
	<h1>Welcome to the Blood Bank!</h1>
	<h4>Select a category:</h4>
	<p>
		<form action="" method="get">
			<input type="radio" name="var" value="donor">Donor
			<input type="radio" name="var" value="user">User<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</p>
</div>

<?php
	if(isset($_GET['submit']))
	{
		if($_GET['var']=='donor')
			header('location: donor.php');
		else
			header('location: user.php');
	}
?>
</body>
</html>