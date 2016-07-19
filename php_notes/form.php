<!-- import php func -->
<?php include "db_func.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<span>Create User</span>
	<br>
	<form action="db_read.php" method="post">
	
		<input type="text" name="username" placeholder="Enter Username">		
		<input type="password" name="password" placeholder="Enter password">	
		<br>
		<input type="submit" name="submit">	

	</form>

</body>
</html>