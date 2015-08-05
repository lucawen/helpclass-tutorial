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
/**
	 * Acha o próximo número perfeito
	 *
	 * @author Leandro Rosa e Leonardo Henrique
	 * @return int
	 */
	public function proximoPerfeito($n) {
		<?php
function encontraProximoPrimo($aPartirDe){
        $ePrimo = false;
        $aPartirDe += 1;
        while(!$ePrimo){
                $resultado = false;
                for ($i = 2; $i < $aPartirDe; $i++){
                        if ($aPartirDe%$i == 0){
                                $resultado = true;
                                break;
                        }
                }
                if ($resultado) $aPartirDe++;
                else $ePrimo = true;
        }
        return $aPartirDe;
}
function encontraDivisores($number){
        $fatores = array();
        for ($i = 1; $i < $number; $i++){
                if ($number%$i == 0){
                        $fatores[] = $i;
                }
        }
        return $fatores;
}
function fatora($number){ 
        $fatores = array();
        $fatores[] = 1;
        $numeroPrimo = 2;
        while($number != 1){
                while ($number%$numeroPrimo == 0){
                        $fatores[] = $numeroPrimo;
                        $number = $number/$numeroPrimo;
                }
                $numeroPrimo = encontraProximoPrimo($numeroPrimo);
        }
       
        return array_sum($fatores); 
}
?>
<form action="" method="post">
        Teste se o numero é perfeito : <input type="text" name="numero"/><br><input type="submit"/>
</form>
<?php
 
if ($_POST){
        echo "<hr>";
        $number = $_POST['numero'];
        $fatores = array_sum(encontraDivisores($number));
        if ($fatores == $number){
                echo "O numero $number é perfeito.";
        }
}
?>

	}
}
