<?php 
namespace Vehicles;
require_once 'VehicleBase.php';

	class Truck extends VehicleBase
	{
		//Atributo statico
		private static $count=0;
		
		//Atributos
		private $type;

		//Constructores
		public function __construct($ownerName,$type)
		{			
			// parent::__construct($ownerName);
			$this->owner = $ownerName; 
			$this->type=$type;

			self::$count++;
		}

		//Metodos
		public function move()
		{
			echo 'Truck-'.$this->type.': moving<br>';
			
		}

		//Metodo Statico
		public static function getTotal()
		{
			return self::$count;
		}		
	}
 ?>