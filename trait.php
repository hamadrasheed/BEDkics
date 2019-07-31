<?php 

	trait Exchange{

		public function currency($dollar, $rupees){

			return $dollar + $rupees;
		}
	}

	class Bmw{
		use Exchange;

	}

	class Corolla{
		use Exchange;
	}

	$bmw = new Bmw();
	echo $bmw->currency(400, 6190);
	echo "<br>";
	$rolla = new Corolla();
	echo $rolla->currency(12400, 17600);



 ?>