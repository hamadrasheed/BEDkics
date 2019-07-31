<?php 

	class Car1{

		private $model;

		// setter
		public function setModel($model){
			$this->model = $model;
		}
		// getter
		public function getModel(){
			return $this->model;
		}
	}

	class Car2 extends Car1{
		private $style;

		// setter
		public function setStyle($style){
			$this->style = $style;
		}
		// getter
		public function getStyle(){
			return $this->style;
		}
	}

	class Car extends Car2{

		public function hello(){
			return $this->getModel(). "is have a powerful engine and it is ". $this->getStyle();
		}
	}


	$sportsCar = new Car;

	$sportsCar->setModel("BMW");
	$sportsCar->setStyle("Fast and Furious");
	echo $sportsCar->hello();



 ?>