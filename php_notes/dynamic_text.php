<!DOCTYPE html>
<html lang="en">
	<head></head>
	<meta>
	<title>DOC</title>
	<body>
		

		<?php 
			/*variables in php*/
			$title = "Some Title";
			$numbers = 12;

			$wurd = "wurd";

			/* assign html to php variable*/
			$hello = "<h1>HELLO</h1>";
		?>

		<h1><?php echo $title; ?></h1>

		<!-- php concate -->
		<h1><?php echo $wurd . " " . $numbers; ?></h1>

		<!-- php html string -->
		<?php echo $hello; ?>

		<!-- php math -->
		<?php 
			echo 50+1;
			echo "<br>";
			echo 4*3;
			echo "<br>";
		?>

		<!-- php arrays -->
		<?php 

			$numList = array(1,2,3,4,5,6,'seven');
			echo $numList[6];
			//print_r($numList);
			echo "<br>";

			//associative arrays
			$nameList = array("first_name" => "Zhenting", "last_name" => "Zhou");
			//print_r($nameList);
			echo "<br>";

			echo $nameList["first_name"] . " " . $nameList["last_name"];
			echo "<br>";

		?>

		<!-- php control flow -->
		<?php 

			//if statment
			if (11 < 10) {
				echo "3 is less than 10";
			} elseif (13 > 4) {
				echo "13 is greater than 4";
			} else {
				echo "something else ";
			};
			echo "<br>";

			//logical operators
			if (1 != 2) {
				echo "not equals";
			};


		?>
	

	</body>
</html>