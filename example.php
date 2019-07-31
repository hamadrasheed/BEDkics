<?php 

	class Car1{

		protected $model;

		public function setModel($model){
			$this->model = $model;
		}

	}

	class Car extends Car1{

		public function hello(){
			return $this->model." is my favourite one.";
		}
	}

	$gadi = new Car();
	$gadi->setModel("Civic Rebirth");
	echo $gadi->hello();






 ?>