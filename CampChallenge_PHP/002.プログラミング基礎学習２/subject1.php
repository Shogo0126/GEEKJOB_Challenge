<?php
$param = 1;
$message = '';
switch ($param) {
  case 1:
   $message = 'one';
   break;
  case 2:
   $message = 'two';
   break;
  default:
   $message = '想定外';
    break;
}

echo $message;
 ?>
