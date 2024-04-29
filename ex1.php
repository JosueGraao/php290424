<?php 

	//Atividade 1

	$n1 = 10;
	$n2 = 11;

	function calc($n1, $n2){
		return($n1 + $n2);
	}

	$soma = calc($n1, $n2);

	if($soma > 20){
		$r1 = $soma + 8;
		$res1 = sprintf("O resultado da soma + 8 é: %u", $r1);
		echo $res1;
	}else if($soma <= 20){
		$r2 = $soma - 5;
		$res2 = sprintf("O resultado da soma - 5 é: %u", $r2);
		echo $res2;
	}


 ?>