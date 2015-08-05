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
//Autor:Aloisio e Augusto turma 222n
public function numerosprimos ($numero){
<?php
//exemplo com o numero 10
$numero = 10;

if (gmp_prob_prime($numero)) {
	print 'É primo';
} else {
	print 'Não é primo';
}

?>
