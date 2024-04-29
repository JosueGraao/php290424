<?php

//Atividade 2

$n1 = 4;

if ($n1 % 10 ==  0) {
	echo "O número é divisível por 10.";
}elseif ($n1 % 5 == 0) {
	echo "O número é divisível por 5.";
}elseif ($n1 % 2 == 0) {
	echo "O número é divisível por 2.";
}else{
	echo "O número não é divisível por 10, 5 ou 2.";
}

?>