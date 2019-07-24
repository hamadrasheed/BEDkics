<?php 

		class Car{

			public $color;
			public $headLights;
			public $highspeed;
			public $comp;
			public $song;
			public $sunRoof = 0;

			public	function car(){
						return "'booom booom la la la'";
					}

			// public 

		}

		$bmw = new Car();

		$bmw->color = 'Pure Jet Black';
		$bmw->comp = "BMW 7th series";

		echo "The car i wanat is ".$bmw->comp;
		echo "<br>";
		echo "$bmw->comp looks beautiful in $bmw->color color.";
		echo "<br>";
		echo "Having ".$bmw->headLights = "white LED headLights.";
		echo "<br>";
		$bmw->highspeed = "180 kmph";
		$bmw->song = "Nusrat Sahab";
		echo "Driving my $bmw->comp at $bmw->highspeed and listening to $bmw->song would make my day!";
		echo "<br>";

		if ($bmw->sunRoof == 1) {
			echo "The $bmw->comp has sunRoof";
		}
		else{
			echo "The $bmw->comp does not have sunRoof";


		


		echo "<br>";

		echo "And most importantly his horn has to sound like: ";

		echo $bmw->car();
		}


 ?>