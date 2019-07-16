<?php 

	function multi($x, $y){

		return $x*$y;

	}

	//print product of numbers
	echo "The product of 9 * 13 = " .multi(9, 13);

	echo "<br>";
	echo "<br>";

	function line(){
		return "This is my first function";	
	}

	// print what ever is in function
	echo line();

	echo "<br>";
	echo "<br>";

	//using multiple aruguments in functions
	function argu($a, $b, $c){
		return "$a is studying $b from $c.";
	}

	echo argu("Hamad", "BsCS","VU");
	echo "<br>";
	echo argu("Asad", "BsCS","CLU");
	echo "<br>";
	echo argu("Daood", "Bcom","FAST");
	echo "<br>";
	echo argu("Zia", "Law","High Court");

	echo "<br>";
	echo "<br>";

	//using non-strict-type
	function add($e, $b){
		return $e+$b;
	}

	echo add(12,'11 dqa');

	echo "<br>";
	echo "<br>";

	function defalt($x = 10){
		return "The value is $x";
	}

	echo defalt(40);
	echo "<br>";
	echo defalt();
	echo "<br>";
	echo defalt(22);
	echo "<br>";
	echo defalt(123);


 ?>
