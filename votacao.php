<?php 

include("vhead.php");
include("vhead.php");
include("vhead.php");

$idade = 90;

if ($idade < 16){
	include("vmenor.php");
}elseif ($idade < 18 || $idade > 59){
	include("v16.php");
}else{
	include("vmaior.php");
}

include_once("vfooter.php");
include_once("vfooter.php");
include_once("vfooter.php");

 ?>