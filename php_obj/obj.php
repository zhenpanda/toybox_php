<?php 

//php class syntax

class Car {

	// class properties
	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;

	// function inside of a class
	function MoveWheels() {
		// class id itself as "$this"
		$this->wheels = 10;
		echo "Wheels move is now " . $this->wheels;
		echo "<br>";
	}

	function CreateDoors() {
		$this->doors = 60;
	}

}

/*
// check via string for class name...ummm
if (class_exists("Car")) {
	echo "Yeaaa sonn";
	echo "<br>";
	// check if method exists
	if (method_exists("Car", "MoveWheels")) {
		echo "Sure got method";
	}
}else{
	echo "no";
}
*/

/*
// instance out an obj using Car class
$bmw = new Car();

// assign new value to obj
$bmw->wheels = 8;

// echoing obj proprty
echo $bmw->wheels;
echo "<br>";

// obj calling the function from itself
$bmw->MoveWheels();

// create anther object
$truck = new Car();
$truck->CreateDoors();
echo $truck->doors;
echo "<br>";
*/


?>