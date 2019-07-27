<?php 
	
	// Public Access
	class Car{

		public $model;

		// Using $this in this fucntion
		public function getModel()
		{
			return "The model of this car is ".$this->model;
		}
		
		// using arguments in this function
		public function getCar($car)
		{
			return "The car you won from 	lottery is ".$car;
		}

	}

	class Bike{

		private $engine ;

		public function setModel($engine)
		{
			$this->engine = $engine;

		}
		public function getModel()
		{
			return $this->engine;
		}
	}


	$carModel = new Car();

	$carModel->model="BMW 7th series";

	echo $carModel->getModel();
	echo "<br>";
	echo $carModel->getCar("'Honda Civic Rebirth'");
	echo "<br>"; echo "<br>";
	
	$bike = new Bike();

	$bike->setModel("170cc");
	echo $bike->getModel();






 ?>