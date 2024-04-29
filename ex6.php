<?php 

	//Atividade 6
	
	$aluno1 = "Miguel";
	$aluno2 = "Luciene";
	$aluno3 = "Lucia";
	$aluno4 = "Alexandre";
	$aluno5 = "Eunice";
	$aluno6 = "Luciano";

	$nota1 = 9.0;
	$nota2 = 8.5;

	$media = 0.0;

	$reprovados = 0;
	$exame = 0;
	$aprovados = 0;

	function calc($nota1, $nota2){
		return($nota1 + $nota2);
	}

	$soma = calc($nota1, $nota2);

	$media = $soma/2;

	$somaTotal = 0.0;

	for ($i=1; $i <= 6; $i++) {
		if($i == 1){
			$aluno = $aluno1;
		}else if($i == 2){
			$aluno = $aluno2;
		}else if($i == 3){
			$aluno = $aluno3;
		}else if($i == 4){
			$aluno = $aluno4;
		}else if($i == 5){
			$aluno = $aluno5;
		}else{
			$aluno = $aluno6;
		} 


		if($media < 3.0){
			echo ("$aluno<br /> Média: $media - REPROVADO <br /><br />");
			$reprovados++;
		}else if($media <= 7.0){
			echo ("$aluno<br /> Média: $media - EXAME <br /><br />");
			$exame++;
		}else{
			echo ("$aluno<br /> Média: $media - APROVADO <br /><br />");
			$aprovados++;
		}

		$somaTotal = $somaTotal + $media;	
	}

	echo ("APROVADOS: $aprovados <br />");
	echo ("EXAME: $exame <br />");
	echo ("REPROVADOS: $reprovados <br />");

	$mediaTotal = 0.0;

	$mediaTotal = $somaTotal/($aprovados+$reprovados+$exame);

	echo ("<br />A média da classe é $mediaTotal");

 ?>