<?php 

	interface Area{

		public function calArea();
			
	}

	class Circle implements Area{

		private $radius;

		public function __construct($radius){

			$this->radius = $radius;
		}

		public function calArea(){
			return $this->radius * $this->radius*pi();
		}

		public function pi(){
			return pi();
		}
	}

	class Rectange implements Area{

		private $width;
		private $height;

		public function __construct($width, $height){

			$this->width = $width;
			$this->height = $height;
		}

		public function calArea(){
			return $this->width * $this->height;
		}
	}

	$circle = new Circle(40);
	echo $circle->calArea();
	echo "<br>";
	echo $circle->pi();
	echo "<br>";

	$Rectange = new Rectange(30,91);
	echo $Rectange->calArea(); 




 ?>