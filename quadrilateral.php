<?php
	abstract class Quadrilateral {
		const NO_OF_SIDES  =  4;
		protected $unit;

		public function __construct($unit){
			$this->unit  =  $unit;
		}
		// public function info(){
		// 	echo "A quadrilateral has "   . self::NO_OF_SIDES  . " sides<br>";
		// }
		abstract function info();
		abstract function getArea();

	}
	
	class Square extends Quadrilateral {
		public static $objCount  = 0;
		private $side;

		public function __construct($side =  1){
			parent::__construct("cm");
			self::$objCount++;
			$this->side   = $side;
		}

		public function getSideLen(){
			return $this->side;
		}

		public function info(){
			echo "Unit: " . $this->unit;
			echo "A square is a quadrilateral and it has "   . self::NO_OF_SIDES  . " sides<br>";
		}

		public function getArea(){
			return $this->side * $this->side;
		}

		public static function instanceOfSquare($obj){
			return $obj instanceof Square;
		}
	}


?>