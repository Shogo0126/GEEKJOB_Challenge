<?php
function sample($a,$b = 5,$type = false){
 $ca = $a * $b;
 if ($type == false) {
   echo $ca;
} elseif ($type == ture) {
   echo pow($ca,2);
 }

 }
sample (3,4,false);
 ?>
