<?php include "obj.php" ?>
<?php  

// inheriting Car class
class Plane extends Car {
	// Plane is inheriting for Car class have everything Car has

	// child class can overwrite porpties
	var $wheels = 1;
}

$jet = new Plane();
echo $jet->wheels;

// constructor

class Jeep {

	// constructor function	
	function __construct() {
		echo "Ya this is constructor";
	}

}

$jeep = new Jeep("Ya");
echo "<br>";


class Thing {
	// public to all
	public $wee = 11;
	// protected to this class and inherted class
	protected $dee = 22;
	// private only for this class 
	private $pee = 33;

	function showP() {
		echo $this->wee;
		echo "<br>";
		echo $this->pee;
	}
}

$a = new Thing();
echo $a->showP();
echo "<br>";


class Majege extends Thing {

	function showR() {
		echo $this->dee;
		echo "<br>";
	}

}
$b = new Majege();
echo $b->showR();

// static variable

class Box {
	static $b = 333;

}

$cube = new Box();
// wrong way to get to static property echo $cube->b;

// static property stick to the class not obj created by the class
echo Box::$b;










?>