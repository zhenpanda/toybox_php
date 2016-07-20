<?php 
//super global variable $_GET
//scoped globally
print_r($_GET);
?>

<?php 
	echo $_POST['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$id = 10;
		$button = "CLICK HERE"
	?>
	<!-- dynamically send data to page -->
	<a href="web_notes.php?id=<?php echo $id;?>"><?php echo $button;?></a>


	<form action="web_notes.php" method="post">
		
		<input type="text" name="name">
		<input type="submit">
	</form>

</body>
</html>