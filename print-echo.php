<!DOCTYPE html>

<body>

	<?php 

		$txt = "Hello Hamad";
		$x = 5;
		$y = 9;

		echo "Yup! ".$txt. " using 'echo' for output";
		
		echo "<br>";

		print("YUP! ".$txt." using 'print' for output");
		
		echo "<br>";

		echo "Hamad"," is"," a"," good"," boy";

		echo "<br>";
		echo "<br>";

		//print("Hamad"," is"," good");
		// This will produce an error

		echo "x = " . $x ."<br>"."y = ". $y;
		echo "<br>";

		echo "x + y = " ;
		echo $x+$y;
		echo " (using echo)";

		echo "<br>";
		echo "<br>";

		print("x = ".$x);
		echo "<br>";
		print("y = ".$y);
		echo "<br>";
		print("x + y = ");
		print($x+$y);
		print(" (using print)");

	?>
	
</body>
</html>