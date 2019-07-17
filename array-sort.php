<?php 

	$friends = array("Hamad","Zia","Asad","Dawood");

	echo "The array consist of following: <br>";

	foreach ($friends as $x) {
		echo "$x. <br>";
	}

	echo "<br>";

	echo "Now sorting array in ascending order: <br>";

	sort($friends);

	foreach ($friends as $x) {
		echo "$x. <br>";
	}
	echo "<br>";

	echo "Now sorting array in descending order: <br>";


	rsort($friends);

	foreach ($friends as $x) {
		echo "$x. <br>";
	}


 ?>