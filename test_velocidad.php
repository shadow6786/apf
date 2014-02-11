<?php 
 //se capturó por parámetro: 
 //   $kb      enviados. 
 //   $tiempo  segundos que demoró. 

 //nos da los kbps. 
 
 echo "El tiempo es".$tiempo;
 $kbps=($kb*8/$tiempo); 

 echo "La página se tardó .$tiempo. segundos en cargar."; 

 echo "\nVelocidad aproximada: ".number_format($kbps, 2)." kbps."; 
?>