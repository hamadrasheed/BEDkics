<!DOCTYPE html>
<html lang="en">

<body>

	<?php  

		$day = date('l');
		
		switch ($day) {
			case 'Monday':
				echo "Kalay Chanay Chawal";
				break;
			case 'Tuesday':
				echo "White Karahi";
				break;
			case 'Wednesday':
				echo "Mata-Pulao + Shami";
				break;
			case 'Thursday':
				echo "Nehari";
				break;
			case 'Friday':
				echo "Chicken Beryani";
				break;
			case 'Saturday':
				echo "Alu Kabab";
				break;

			default:
				echo "Mix Sabzi";
				break;
		}


	?>
	
</body>
</html>