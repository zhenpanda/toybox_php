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

// func update existing users in db, shared in db_func
if (isset($_POST['update'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	echo "updated user!" . $id;
	// update user data sql
	$query = "UPDATE users SET username='$username', password='$password' WHERE id= $id";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query failed" .mysqli_error($result));
	};
}

// delete selected user from db, shar in db_func
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	echo "delete user!" . $id;
/*	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	echo "updated user!" . $id;
	// update user data sql
	$query = "UPDATE users SET username='$username', password='$password' WHERE id= $id";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query failed" .mysqli_error($result));
	};*/
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