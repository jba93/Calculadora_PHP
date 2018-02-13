<?php
	//definição da classe Calculadora
	class Calculadora{
		private $total;
		private $numero1;
		private $numero2;

		function __construct(){
			$this -> total = 0;
			$this -> numero1 = 0;
			$this -> numero2 = 0;
		}

		//Setar os valores
		public function setNumeros($parametro_numero1, $parametro_numero2){
			if (is_numeric($parametro_numero1) && is_numeric($parametro_numero2)){
				$this->numero1 = $parametro_numero1;
				$this->numero2 = $parametro_numero2;
			}
			else{
				echo  "<script>alert('Digite os números corretamente!');</script>";
			}
		}

		//Pegar o valor total
		public function getTotal(){
			return $this->total;
		}

		//Cáculos
		public function somar(){
			$this -> total = ($this -> numero1) + ($this -> numero2);
		}

		public function subtrair(){
			$this -> total = ($this -> numero1) - ($this -> numero2);
		}

		public function dividir(){
			$this -> total = ($this -> numero1) / ($this -> numero2);
		}

		public function multiplicar(){
			$this -> total = ($this -> numero1) * ($this -> numero2);
		}
		
	}
?>
