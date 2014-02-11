<DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
</head>

<body>
<?php 
//variable de prueba
$sql = "SELECT * FROM Movimientos Where id=5 and date = '2012-10-10' group by id";
$sentencia = "SELECT";
$var = "";
$resultado =  array();

$nuevo = ExisteCadena($sentencia, $sql);

echo $nuevo;
echo "<HR>";
echo $resultado;

function ExisteCadena ($cad, $cadena_completa)
{
	$ret = false;
	if (preg_match("/".$cad."/i", $cadena_completa,$var))
	{
		$ret = true;
		$resultado["select"] = $var;
	}
	
	return $ret;
}

?>

</body>
</html>