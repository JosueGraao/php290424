<?php

$x = array();

$x[] = 2;
$x[] = 3;
$x[] = 1;

rsort($x);

foreach ($x as $seq) {
  
  echo "<br/>".$seq;

   }

?>