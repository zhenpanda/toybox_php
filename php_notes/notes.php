<!--  basic open/close tag for php -->
<?php
	/* This is commenting in php */
	/*
		<!-- other php short hand -->
		<? some code; ?>
		<?= some other code; ?>
	*/
?> 


<!-- but these are bad form because not all server can read it -->

<!-- php need to have .php extention to work even as a html file -->

<!-- simple php string -->
<?php 
echo "hello world?"; 
echo "<br>";

?>

<!-- switch statements -->
<?php

	$num = 1;
	switch ($num) {
		case 1:
			# code...
			echo "wudup tho";
			break;
		
		default:
			# code...
			break;
	}
	echo "<br>";

	$count = 5;
	while ($count < 10) {
		# code...
		echo $count;
		$count++;
	};
	echo "<br>";

	for($s = 0; $s < 10; $s++) {
		echo $s;
	}
	echo "<br>";

	// arrays
	$numbersAry = array(1,2,3,4,5);

	foreach ($numbersAry as $v) {
		# code...
		echo $v;
	}
	echo "<br>";

	// functions

	// input of php augment is impec declared as a variable
	function say($input) {
		echo "oh hi";
		echo "<br>";
		echo $input;
		echo "<br>";
	}
	say("dis is the input msg");

	function add ($num1, $num2) {
		$sum = $num1 + $num2;
		return $sum;
		echo "<br>";
	}
	// returning a result into a variable
	$s = add(111,222);
	echo $s;
	echo "<br>";

	// global varaible
	// scope inside of php
	$x = "out ";
	function tell() {

		global $x;
		echo $x;
		$x = "in ";

	}
	echo $x;
	tell();
	echo $x;
	echo "<br>";


	// constants
	define('NAME', 'This is a constant');
	echo NAME;
	echo "<br>";

	// math func
	echo rand(1,1000);
	echo rand(1,1000);
	echo rand(1,1000);
	echo rand(1,1000);
	echo "<br>";

	$string = "this is the a sentence yo222ee";
	echo strlen($string);
	echo "<br>";

	$list = [11,22,33,44];
	echo max($list);
	echo "<br>";

?>







