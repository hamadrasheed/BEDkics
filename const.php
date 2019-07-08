<!DOCTYPE html>
<html lang="en">

<body>

	<?php 

		//case sensitive
		define("GREET", "Hello Hamad");

		echo GREET;

		echo "<br>";
		echo "<br>";

		//case insensitive
		define("Greeting", "This is case insensitive", "true");

		echo greeting;
		echo "<br>";
		echo GREETING;
		echo "<br>";
		echo GrEetIng;

		echo "<br>";
		echo "<br>";

		//const arrays

		define("friends", [
			"Hamad",
			"Asad",
			"Zia"
		]);

		echo friends[2];
		echo "<br>";
		echo "<br>";

		var_dump(friends);
		echo "<br>";
		print_r(friends);

		echo "<br>";
		echo "<br>";

		define("hi", "Hello Everone There!");

		function greet(){
			echo hi;
		};

		greet();




	?>
	
</body>
</html>