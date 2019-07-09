<!DOCTYPE html>
<html lang="en">

<body>

	<?php 

		$menu = date("l");

		$mon = "Monday";
		$tue = "Tuesday";
		$wed = "Wednesday";
		$thu = "Thursday";
		$fri = "Friday";
		$sat = "Saturday";
		$sun = "Sunday";

		if ($menu == $mon) {
			echo "Daal Chawal";

		}elseif ($menu == $tue) {
			echo "White Karahi";
		}

		if ($menu == $wed) {
			echo "Alu cutlets";

		}elseif ($menu == $thu) {
			echo "Matar Pulao + Shami";
		}
		if ($menu == $fri) {
			echo "Mutton Beryani";

		}elseif ($menu == $sat) {
			echo "Mix Sabzi";
		}

		if ($menu == $sun) {
			echo "Masoor Daal";
		}


	 ?>
	
</body>
</html>