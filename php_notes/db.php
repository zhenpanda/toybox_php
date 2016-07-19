<?php 
// connecting to the db
$connection = mysqli_connect('localhost', 'root','','loginapp');
if ($connection) {
	echo "we are connected!";
	echo "<br>";
	echo "<br>";
}else{
	die("database connection failed");
};

?>