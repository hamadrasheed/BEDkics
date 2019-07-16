<?php declare(strict_types = 1);

 	//using strict type

	
 	function add($x, $y){
 		// This will only produce notice because we dont declare type in argument
 		return $x+$y;
 	}

 	echo add(10, "12 days");

 	echo "<br>";
 	echo "<br>";

 	function add2(int $x, int $y){
 		return $x+$y;
 	}
 	// There will be no warings or errors
 	echo add2(22, 99);

 	echo "<br>";
 	echo "<br>";

 	function multi(int $x, int $y){
 		return $x*$y;
 	}

 	echo "The product of 8 and 9 is ". multi(8,9);
 	echo "<br>";
 	echo "The product of 81 and 91 is ". multi(81,91);

 	echo "<br>";
 	echo "<br>";

 	function add4(float $x, float $y) : float{
 		return $x+$y;
 		//This will return value in float

 	}

 	echo add4(12.22,54.21);

 	echo "<br>";
 	echo "<br>";


 	function add5(float $x, float $y) : int{
 		return (int)($x+$y);
 		//This will return vakue in int

 	}

 	echo add5(12.22,54.21);

 	echo "<br>";
 	echo "<br>";

 	function add1(int $x, int $y){

 		return $x+$y;
 	}
 	//This will produce an error
 	echo add1(10, "11 days");








  ?>