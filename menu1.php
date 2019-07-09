<!DOCTYPE html>
<html lang="en">

<body>

	<?php 

		$a = date("l");

		$day = ["Modany", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
		
		if ($a == $day[0]) {
			echo "ALU Cutlets";

		}elseif ( $a == $day[1]) {
			echo "Matar Pulao + Shami";
		
		}elseif ($a == $day[2]) {
			echo "Mix Sabzi";
		
		}elseif ($a == $day[3]) {
			echo "White Karahi";
		
		}elseif ($a == $day[4]) {
			echo "Mutton Beryani";
		
		}elseif ($a == $day[5]) {
			echo "Kari Pakora";
		
		}else{
			echo "Kabhi bahar sy b kha lo ";
		}


	 ?>
	
</body>
</html>