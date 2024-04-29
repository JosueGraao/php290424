<?php

//Atividade 3

$nome = "Miguel";
$sexo = "M";
$idade = 26;

if ($sexo == "F" && $idade < 25) {
	$ace = sprintf("%s: ACEITA", $nome);
	echo $ace;
}else{
	$nace = sprintf("%s: NÃO ACEITA", $nome);
	echo $nace;
}

?>