<?php

	interface Car{

		public function setModel($model);
		public function getModel();
	} 

	interface Wheels{

		public function setHasWheels($bool);
		public function getHasWheels();
	}

	class MiniCar implements Car, Wheels{

		private $model;
		private $hasWheels;

		public function setModel($model)
		{
			$this->model = $model;
		}

		public function getModel()
		{
			return $this->model;
		}

		public function setHasWheels($bool)
		{
			$this->hasWheels = $bool;
		}

		public function getHasWheels()
		{
			return ($this->hasWheels)? " has four wheels" : " has no wheels ";
		}


	}

	$mehran = new MiniCar();
	$mehran->setModel("Mehran");
	echo $mehran->getModel();
	$mehran->setHasWheels(1);
	echo $mehran->getHasWheels();



 ?>