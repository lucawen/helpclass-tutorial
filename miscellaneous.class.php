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
	
	/** Luca e Letícia - Raiz */
	public function raiz($n){
		return sqrt($n);
	}
	

        /** Gabriel Fernandes */
         public function multiplo5 ($n) {
           $n = 0
         if ($n mod 5 =0){
          return "O número digitado é múltiplo de 5";
         } else {
          return "O número digitado não é múltiplo de 5";  
               }
          }


        /** Nathália Caroline e Pedro Gonzaga */
        public function decimal_octal ($octal){
          $octal = 0;
          while($octal != 0){
          $resto = $decimal % 8;
          $decimal = floor($decimal / 8);
          $octal = $resto.$octal;
       }
          return $octal;
   }

	/** Thalles e Thais, frase do dia */ 
	public function frase ($parametro){
	  $data = date("j");
	  if ($data=1) 
	    $frase=' “Hoje pode ser um dia excelente e maravilhoso, só depende de você” ';  
	 
	  if ($data=2) 
	    $frase=' “A maior barreira para o sucesso é o medo do fracasso” ';
	  
	  if ($data=3) 
	    $frase=' “O pessimista vê a dificuldade em cada oportunidade. O otimista vê a oportunidade em cada dificuldade” ';
	  
	  if ($data=4) 
	    $frase=' “Conhecimento é a única virtude e ignorância é o único vício” ';
	 
	  if ($data=5) 
	    $frase=' “Pare de procurar eternamente, a felicidade está bem ao seu lado” ';
	  
	  if ($data=6) 
	    $frase=' "Para dias bons: sorrisos. Para os ruins: paciência" ';
	  
	  if ($data=7) 
	    $frase=' "Só existe um tempo onde a esperança tem corpo, os sonhos acontecem e tudo é possível, ele se chama futuro" ';
	  
	  if ($data=8) 
	    $frase=' "Hoje é o dia da conquista, da superação, de dar a volta por cima" ';
	  
	  if ($data=9) 
	    $frase=' "Tudo começa a sorrir para você. Aproveite a fase" ';
	  
	  if ($data=10) 
	    $frase=' "As falhas de hoje são os degraus para o sucesso de amanhã" ';
	  
	  if ($data=11) 
	    $frase=' "Esqueça os piores momentos da sua vida e faça os melhores se tornarem inesquecíveis" ';
	  
	  if ($data=12) 
	    $frase=' "A má notícia é que o tempo voa. A boa notícia é que você é o piloto" ';
	  
	  if ($data=13) 
	    $frase=' "O sucesso nunca é definitivo e o fracasso nunca é fatal. É a coragem que conta" ';
	  
	  if ($data=14) 
	    $frase=' "O otimismo é o ímã da felicidade. Se você for positivo, coisas boas e pessoas boas serão atraídas para você" ';
	  
	  if ($data=15) 
	    $frase=' "As dificuldades te preparam para um futuro extraordinário" ';
	  
	  if ($data=16) 
		  $frase=' "Acredite, você tem forças para chegar onde quiser. Basta querer" ';
	  
	  if ($data=17) 
		  $frase=' "Não tenha medo de ir devagar. Só tenha medo de ficar parado" ';
	  
	  if ($data=18) 
		  $frase=' "Todo homem é arquiteto da sua própria sorte" ';
	  
	  if ($data=19) 
		  $frase=' "As pessoas têm algo em comum, todas são diferentes" ';
	  
	  if ($data=20) 
		  $frase=' "A alegria não está nas coisas, está em nós" ';
	  
	  if ($data=21) 
	  	$frase=' "A coisa principal da vida não é o conhecimento, mas o uso que dele se faz" ';
	  
	  if ($data=22) 
		  $frase=' "A força não provém da capacidade física, e sim de uma vontade indomável" ';
	  
	  if ($data=23) 
		  $frase=' "Não arriscar nada é arriscar tudo" ';
	  
	  if ($data=24) 
		  $frase=' "Não considere doloroso o que é bom para você" ';
	  
	  if ($data=25) 
		  $frase=' "O único erro real é aquele através do qual não aprendemos nada" ';
	  
	  if ($data=26) 
		  $frase=' "O reconhecimento da própria ignorância é a primeira prova de inteligência" ';
	  
	  if ($data=27) 
		  $frase=' "O insucesso é apenas uma oportunidade para recomeçar de novo com mais inteligência" ';
	  
	  if ($data=28) 
		  $frase=' "O caráter pode se manifestar nos grandes momentos, mas ele é formado nos pequenos" ';
	  
	  if ($data=29) 
		  $frase=' "Uma alegria tumultuosa anuncia uma felicidade medíocre e breve" ';
	  
	  if ($data=30) 
		  $frase=' "Um homem nunca sabe aquilo de que é capaz até que o tenta fazer" ';
	  
	  if ($data=31) 
		  $frase=' "Tudo é ousado para quem a nada se atreve" ';
	
	return "Sua frase do dia é :".$frase ;
	}
	
	/** Matheus Mendes e Matheus Augusto, conversão para binário */
	function dec_bin($decimal){
		$binario = "";
		while($decimal != 0){
		    	$resto = $decimal % 2;
		    	$decimal = floor($decimal / 2);
		 	$binario = $resto.$binario;
		}
	    	return $binario;
	}
	
	/** Lucas e Luis, Potencia */ 
	private $Potencia;
	public function getPotencia() { return $this->Potencia; }
	public function setPotencia($Base,$Exp) {
		$this->Potencia = pow ( number $Base , number $exp );
	}
	
	/** Mariana Oliveira, tabela ASCII */
	public function ascii ($letra) {
		 $num = 0;
		if ($letra = a)
			$num = ord(a);
		if ($letra = b)
			$num = ord(b);
		if ($letra = c)
			$num = ord(c);
		if ($letra = d)
			$num = ord(d);
		if ($letra = e)
			$num = ord(e);
		if ($letra = f)
			$num = ord(f);
		if ($letra = g)
			$num = ord(g);
		if ($letra = h)
			$num = ord(h);
		if ($letra = i)
			$num = ord(i);
		if ($letra = j)
			$num = ord(j);
		if ($letra = k)
			$num = ord(k);
		if ($letra = l)
			$num = ord(l);
		if ($letra = m)
			$num = ord(m);
		if ($letra = n)
			$num = ord(n);
		if ($letra = o)
			$num = ord(o);
		if ($letra = p)
			$num = ord(p);
		if ($letra = q)
			$num = ord(q);
		if ($letra = r)
			$num = ord(r);
		if ($letra = s)
			$num = ord(s);
		if ($letra = t)
			$num = ord(t);
		if ($letra = u)
			$num = ord(u);
		if ($letra = v)
			$num = ord(v);
		if ($letra = w)
			$num = ord(w);
		if ($letra = x)
			$num = ord(x);
		if ($letra = y)
			$num = ord(y);
		if ($letra = z)
			$num = ord(z);
		return $num; 
	}
	
	//Aloisio e Augusto numeros primos
	public function numeros_primos ($numero)
		//exemplo com numero 10
		$numero = 10;
		if (gmp_prob_prime($numero)) {
			return true;
		} else {
			return false;
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
	?>
}
	


