
<?php 

if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];
	// use . to add strings in echo output
	//echo $username . $password;	

	/*
	if (strlen($username) < 5) {
		# code...
		echo "Username have to be longer than five";
	}*/

	$connection = mysqli_connect('localhost', 'root','','loginapp');


	if ($connection) {
		# code...
		echo "we are connected";
	}else{
		die("database connection failed");
	};

	$query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

	$result = mysqli_query($connection, $query);

	if (!$result) {
		# code...
		die("Query failed" .mysqli_error());
	};
	/*
	if ($result = mysqli_query($link, "SELECT Name FROM City LIMIT 10")) {
	    printf("Select returned %d rows.\n", mysqli_num_rows($result));
	    mysqli_free_result($result);
	}
	*/

}

?>
