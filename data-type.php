<!DOCTYPE html>
<html lang="en">

<body>

	<?php 

		//using var_dump to show data type

		$y = "This is a string bruh!";
		var_dump($y);

		echo "<br>";
		echo "<br>";

		$x = ["Hamad","is","here"];
		var_dump($x);

		echo "<br>";
		echo "<br>";

		$a = 1.443;
		var_dump($a);

		echo "<br>";
		echo "<br>";

		$s = "a b c";
		var_dump($s);

		echo "<br>";
		echo "<br>";

		//creating an object

		class Car
		{
			function Car()
			{
				$this->model="BMW 7th series";

			}
		}

		$hereit = new Car();

		echo $hereit->model;

		echo "<br>";

		$hereit2 = new Car();
		echo $hereit2->model;

		echo "<br>";
		echo "<br>";

		class Car2
		{
			function Car2()
			{
				$this -> model = "Porsche Panamera Turbo";
			}
		}

		//creating object

		$fvrtCar = new Car2();
		echo $fvrtCar -> model;

		echo "<br>";

		echo "VS";

		echo "<br>";

		echo $hereit -> model;

		echo "<br>";
		echo "<br>";

		var_dump($hereit);

		echo "<br>";
		echo "<br>";

		var_dump($fvrtCar);


	?>
	
</body>
</html>