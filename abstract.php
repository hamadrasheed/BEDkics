<?php 

	abstract class Car{

		protected $tankVolume;

		public function setVolume($volume){

			$this->tankVolume = $volume;
		}

		abstract public function calMilage();
	}

	class Civic extends Car{

		public function calMilage(){
			$milage = $this->tankVolume*25;
			return $milage;
		}
	}

	$Honda = new Civic();

	$Honda->setVolume(100);
	echo $Honda->calMilage();




 ?>