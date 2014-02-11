<?php
// Recepcion de datos
$nombrepadre= $_POST["nombrepadre"];
$nombreestudiante= $_POST["nombreestudiante"];
$curso= $_POST["curso"];
$email= $_POST["email"];
$asunto=$_POST["asunto"];
$mensaje= $_POST["mensaje"];
//fin de la recepcion de datos
//--------------------------------
//Accion de envio
$para="apfcolegioaleman2011@gmail.com";
$cuerpo="
Este mensaje ha sido enviado desde la web: www.apf-alemansc.com.bo

Nombre del padre: ".$nombrepadre."
Nombre del estudiante: ".$nombreestudiante."
curso: ".$curso."
Correo: ".$email."
Asunto: ".$asunto."
Mensaje: ".$mensaje."

Enviado el: ". date('d/m/Y', time())."

";
$desde="From: www.apf-alemansc.com.bo <apfcolegioaleman2011@gmail.com>";

mail($para,$asunto,$cuerpo,$desde);

echo "Su mensaje ha sido enviado, responderemos a la brevedad posible.";
echo "<br/>";
echo '<a href="contacto.php"> Click aqui para volver</a>';
 
 
?>

