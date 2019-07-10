<!DOCTYPE html>
<html lang="en">

<body>

	<?php  

		$friends = array("'Hamad'", "'Zia'", "'Asad'");

		$lenght = count($friends);

		echo "The length of array is $lenght<br><br>";

		for ($i=0; $i <$lenght ; $i++) { 

			echo "The array have ".($friends[$i])." at number: $i";
			echo "<br>";

		}

	?>

	
</body>
</html>