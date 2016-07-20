<?php 

//information saved in super global

$name = "Somename";
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);

//starting using a session
session_start();

$_SESSION['greeting'] = "Hello tho";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php  

		if (isset($_COOKIE["Somename"])) {
			$someOne = $_COOKIE["Somename"];
			echo $someOne;
		}else{
			$someOne = "";
		}

	?>

</body>
</html>