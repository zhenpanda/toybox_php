<!-- connect to db -->
<?php include "db.php" ?>

<?php

// func create a new user and save to db, shared in db_func
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// save to db entered data
	$query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query failed" .mysqli_error());
	};
}

// func finds all users and store in $results
function showAllUsers() {
	// using connection from db.php
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query failed" .mysqli_error());
	};

	return $result;
};

?>