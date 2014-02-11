<?php //set_time_limit ( 0 ) ; 
$tiempo_micro [ 1 ] = microtime ( ) ; 
$q_espacios = explode ( " " , $tiempo_micro [ 1 ] ) ; 
$tiempo_ [ 1 ] = $q_espacios [ 1 ] + $q_espacios [ 0 ] ; 
$contenido = file_get_contents ( 'http://apf-alemansc.com.bo/velocimetro2.php' ) ; 
/* cambiar por path real (URL) http://tudominio/cargar_bytes.php)*/ $tamano_KB = strlen ( $contenido ) / 1024 ; 
  $tiempo_micro [ 2 ] = microtime ( ) ; 
$q_espacios = explode ( " " , $tiempo_micro [ 2 ] ) ; 
$tiempo_ [ 2 ] = $q_espacios [ 1 ] + $q_espacios [ 0 ] ; 
$tiempo_utilizado = number_format ( ( $tiempo_ [ 2 ] - $tiempo_ [ 1 ] ) , 3 , "." , "," ) ;
$velocidad = round ( $tamano_KB / $tiempo_utilizado , 2 ) ; 
echo 'Su velocidad de conexión es de: ' . $velocidad . ' Kbps Se enviarón:' . $tamano_KB . ' Kb, Tiempo utilizado: ' . $tiempo_utilizado . ' Segundos <hr>' ;

  for ( $i = 10 ;

$i >= 1 ;
$i -- ) { $val_Kb = $i * 100 ;
if ( $velocidad >= 800 ) $velocidad_ = 800 ;
else $velocidad_ = $velocidad / 2 ;
  if ( $velocidad >= $val_Kb && ! $col ) { echo '<div style="background-color:#F0F0F0; width:500px; float:left">' ;
echo '<img width="' . ( $velocidad_ ) . '" height="8" style="background-color: #FF0000" border="0">' ;
echo '</div><b>Su conexión</b><br />' ;
$col = true ;
} echo '<div style="background-color:#F0F0F0; width:500px; float:left">' ;
echo '<img width="' . ( $val_Kb / 2 ) . '" height="8" style="background-color: #000099" border="0">' ;
echo '</div>' . $val_Kb . ' Kbps<br />' ;
} ?> 

archivo : cargar_bytes.php 

<?php
echo str_repeat ( "i" , 1024 ) ;

?> 