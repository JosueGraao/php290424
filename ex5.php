<?php

//Atividade 5

$altura = 1.83;
$idade = 26;
$sexo = "M";

$maA = 0.0;
$meA = 2.0;

$soma = 0;

$maB = 0;
$meB = 126;

	for($i=0; $i<50; $i++){
		
		if ($altura > $maA) {
			$maA = $altura;	
		}
		if ($altura < $meA) {
			$meA = $altura;
		}
		if($sexo == "F"){
			$soma = $soma + $altura;
		}
		if ($sexo == "M" && $idade > $maB) {
			$maB = $idade;
		}
		if ($sexo == "F" && $idade < $meB) {
			$meB = $idade;
		}
	}

	echo "A maior altura é $maA <br />";
	echo "<br />A menor altura é $meA <br />";

	$media = 0.0;
	$media = $soma/$i;

	echo "<br />A média de altura das mulheres é $media<br />";

	echo "<br />A idade do homem mais velho é $maB<br />";
	echo "<br />A idade da mulher mais nova é $meB<br />";
	
?>