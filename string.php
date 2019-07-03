<!DOCTYPE html>
<html lang="en">

<body>

	<?php  

		$x = "I am Hamad";

		//using var_dump to show it is string of lenght 10
		echo "using var_dump() to show its data-type: ";
		echo var_dump($x);

		echo "<br>";
		echo "<br>";


		//it tell us lenght of string
		echo "using strlen() :";
		echo strlen($x);

		echo "<br>";
		echo "<br>";

		//tell the number of words in string
		echo "using str_word_count() :";
		echo str_word_count($x);

		echo "<br>";
		echo "<br>";

		//reverse the string
		echo "using strrev() :";
		echo strrev($x);

		echo "<br>";
		echo "<br>";

		//tell the position of word in string
		echo "The word 'mad' is at position :";
		echo strpos($x, "mad");

		echo "<br>";
		echo "<br>";

		//it find word in string and replace it with given word.
		echo "Replacing word 'Hamad' in string :";
		echo str_replace("Hamad", "Developer", $x);




	?>
	
</body>
</html>