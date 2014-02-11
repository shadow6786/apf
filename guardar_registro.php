<?php require('conexion/conectar.php'); ?>
<?php

$nombrepadre=$_POST['nombrepadre'];
$nombremadre=$_POST['nombremadre'];
$nombreestudiante=$_POST['nombreestudiante'];
$curso=$_POST['curso'];
$correo=$_POST['correo'];

$query="INSERT INTO registrados VALUES (NULL,'".$nombrepadre."','".$nombremadre."','".$nombreestudiante."','".$curso."','".$correo."')";
echo $query;
mysql_query($query);

echo "Se ha registrado con exito.";
echo "<br/>";
mysql_close();
echo '<a href="registro.php">Click aqui para volver</a>';


?>
