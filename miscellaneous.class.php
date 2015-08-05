<?php

/**
 * 
 * Miscellaneos Class
 * 
 * @author 222N 
 */
class Miscellaneous {
	/**
	 * The Constructor
	 */
	public function __construct (){}
	
	/**
	 * Gera um numero aleatório
	 *
	 * @author Rodrigo Mendes
	 * @return int
	 */
	public function gera ($limite){
		return rand(0,$limite);
	}

}

	private $Raiz;

		public function getRaiz() { return $this->Raiz; }
		public function setRaiz($valor) {
			$this->Raiz = sqrt($valor);
	}
