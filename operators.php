<!DOCTYPE html>
<html lang="en">

<body>

	<?php  

	$x = 10;
	$y = 4;
	$z = "10";

	echo "x = ".$x;
	echo "<br>";
	echo "y = ".$y;
	echo "<br>";
	echo "z = ". $z;
	echo "<br>";
	echo "Data type of z =";
	var_dump($z);

	echo "<br>";
	echo "<br>";

	
	echo "x + y = " . ($x + $y);

	echo "<br>";

	echo "x - y = ".($x - $y);

	echo "<br>";

	echo "x * y = ".($x * $y);
	
	echo "<br>";

	echo "x / y = ".($x / $y);

	
	echo "<br>";

	echo "x % y = ".($x % $y);
	
	echo "<br>";

	echo "x ** y = ".($x ** $y);

	echo "<br>";
	echo "<br>";

	//equal operator
	echo "Is values in these variables are equal";
	echo "<br>";
	echo "Is x = y ";
	var_dump($x == $y);
	echo "<br>";

	echo "Is x = z ";
	var_dump($x == $z);

	echo "<br>";
	echo "<br>";

	//identical operator
	echo "Is values in these variables are identical";
	echo "<br>";

	echo "Is x = y ";
	var_dump($x === $y);
	echo "<br>";

	echo "Is x = z ";
	var_dump($x === $z);

	echo "<br>";	

	echo "Is x = x ";
	var_dump($x === $x);


	echo "<br>";
	echo "<br>";

	//using of not equal
	echo "Using Not equals operator";
	echo "<br>";

	echo "Is x not equal to y. ";
	var_dump($x != $y);

	echo "<br>";

	echo "Is x is not equal to z. ";
	var_dump($x != $z);

	echo "<br>";

	echo "Is x is equal to x. ";
	var_dump($x != $x);

	echo "<br>";
	echo "<br>";

	//greater than and less than operators
	echo "Using Greater than operator";
	echo "<br>";

	echo "Is x greater than y. ";
	var_dump($x > $y);

	echo "<br>";

	echo "Is x less than  y. ";
	var_dump($x < $y);

	echo "<br>";

	echo "Is x greater than equal to y. ";
	var_dump($x >= $y);


	echo "<br>";

	echo "Is x less than equal to y. ";
	var_dump($x <= $y);

	echo "<br>";
	echo "<br>";

	// spaceShip operator
	echo ($x <=> $y);
	echo "<br>";

	echo ($x <=> $z);
	echo "<br>";

	echo (3 <=> 10);
	echo "<br>";
	echo "<br>";

	echo "x = ".$x;
	echo "<br>";

	//pre increament
	echo "++x = ";
	echo ++$x ;
	echo "<br>";
	$x =10;
	echo "x = ".$x;
	echo "<br>";
	//post increament
	echo "x++ =";
	echo $x++ ;
	echo "<br>";
	echo "Value in x is : ";
	echo $x;
	
	echo "<br>";
	echo "<br>";

	//pre decreament
	$x = 10;
	echo "x = ". $x;
	echo "<br>";
	echo "--x = ";
	echo --$x ;
	echo "<br>";
	$x =10;
	echo "x = ".$x;
	echo "<br>";
	//post increament
	echo "x-- =";
	echo $x-- ;
	echo "<br>";
	echo "Value in x is : ";
	echo $x;
	
	echo "<br>";
	echo "<br>";

	//logic operators

	//And Logic Operator
	$x = 50;
	$y = 30;

	if ($x == 50 && $y == 30) {
		echo "This satisfies And logic";
	}

	echo "<br>";
	echo "<br>";

	//Or Logic Operator

	if ($x == 50 || $y = 30) {
		echo "This satisfies Or logic 1";
	}
	else{
		echo "This does not satisfy Or condition 1";
	}

	echo "<br>";
	echo "<br>";


	if ($x == 40 || $y == 20) {
		echo "This satisfies Or logic 2";
	}
	else{
		echo "This does not satisfy Or condition 2";
	}
	echo "<br>";
	echo "<br>";

	$x = 50;
	$y = 40;
	$z = 30;

	//xor Logic

	if ($x>$z xor $y>$z) {
		echo "condition for xor logic satisfies";
	}
	else{
		echo "condition for xor logic does not satisfies";
	}

	echo "<br>";
	echo "<br>";


	if ($x<$z xor $y>$z) {
		echo "condition for xor logic satisfies";
	}
	else{
		echo "condition for xor logic does not satisfies";
	}

	echo "<br>";
	echo "<br>";

	//Not Logic 

	if ($x != 10 ) {
		echo "Yes, Good night Sir!";
	}

	echo "<br>";
	echo "<br>";

	//Concatenation
	$txt1 = "Hello";
	$txt2 = " Hamad";

	echo $txt1 . $txt2;

	echo "<br>";
	echo "<br>";

	//Concatination Assignment
	echo $txt1;
	echo "<br>";
	echo $txt2;
	echo "<br>";
	echo "<br>";

	$txt1 .= $txt2;

	echo $txt1;
	echo "<br>";
	echo "<br>";

	//Array Ooperators

	$txt1 = array("a" => "apple", "b" => "ball");
	$txt2 = array("c" => "cat", "d" => "doll");

	//union of Arrays
	print_r($txt1 + $txt2);

	echo "<br>";
	echo "<br>";

	//Checking if they have same value
	var_dump($txt1 == $txt2);

	echo "<br>";
	echo "<br>";

	//Checking if they are identical
	var_dump($txt1 === $txt2);

	echo "<br>";
	echo "<br>";

	//Checking if they dont have same value
	var_dump($txt1 != $txt2);

	echo "<br>";
	echo "<br>";

	//Checking if they dont have same value
	var_dump($txt1 <> $txt2);

	echo "<br>";
	echo "<br>";

	//Checking if they are identical
	var_dump($txt1 !== $txt2);

	echo "<br>";
	echo "<br>";

	//Conditional Assignments

	//Ternery

	echo $stat = (empty($userName)) ? "Name does not Found" : "Name Founded";
	echo "<br>";

	$userName = "Hamad";
	echo $stat = (empty($userName)) ? "Name does not Found" : "Name Founded";

	echo "<br>";
	echo "<br>";

	//NULL Coalescing

	echo $cool = $_GET["user"] ?? "Hamad is not here";

	echo "<br>";

	$master = "Master is here";
	echo $str = $master ?? "Where is master";
















	?>
	
	
</body>
</html>