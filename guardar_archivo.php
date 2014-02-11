<?php require_once("conectar.php"); 
session_start();
?>

<?php
// Primero creamos un ID de conexión a nuestro servidor	
$cid = ftp_connect("server25.000webhost.com");	
// Luego creamos un login al mismo con nuestro usuario y contraseña	
$resultado = ftp_login($cid, "a1692580","nacho6786");	
// Comprobamos que se creo el Id de conexión y se pudo hacer el login	
if ((!$cid) || (!$resultado)) 
{
	echo "Fallo en la conexión"; die;
} 
else
{		
	echo "Conectado.";
}	
// Cambiamos a modo pasivo, esto es importante porque, de esta manera le decimos al 	
//servidor que seremos nosotros quienes comenzaremos la transmisión de datos.	
ftp_pasv ($cid, true) ;	
echo "<br> Cambio a modo pasivo<br />";	
// Nos cambiamos al directorio, donde queremos subir los archivos, si se van a subir a la raíz	// esta por demás decir que este paso no es necesario. En mi caso uso un directorio llamado boca	
  
// Tomamos el nombre del archivo a transmitir, pero en lugar de usar $_POST, usamos $_FILES que le indica a PHP	// Que estamos transmitiendo un archivo, esto es en realidad 				un matriz, el segundo argumento de la matriz, indica

if ($_POST['Cargar']==true)
{// el nombre del archivo	
ftp_chdir($cid, "/public_html/circulares_directiva");
echo "Cambiado al directorio necesario"; 
$local = $_FILES["archivo"]["name"];	
// Este es el nombre temporal del archivo mientras dura la transmisión
$remoto = $_FILES["archivo"]["tmp_name"];	// El tamaño del archivo
$tama = $_FILES["archivo"]["size"];
//echo "<br />$local<br />";	echo "$remoto<br />";
echo "subiendo el archivo...<br />";
	// Juntamos la ruta del servidor con el nombre real del archivo	
$ruta = "../public_html/circulares_directiva/". $local;

	// Verificamos si no hemos excedido el tamaño del archivo	
	if ($tama>$_POST["MAX_FILE_SIZE"])
	{		
		echo "El archivo Excede el tamaño de 2MB.<br />";
		
	}
	else
	{		
		// Verificamos si ya se subio el archivo temporal		
		if (is_uploaded_file($remoto))
		{			
			// copiamos el archivo temporal, del directorio de temporales de nuestro servidor a la ruta que creamos			
			move_uploaded_file($remoto, $ruta);
			$link='<a href="circulares_directiva/'.$local.'">Ver</a>';
			$query="INSERT INTO circulares_directiva VALUES (NULL,'".$local."','".date('Y-m-d H:i:s')."','".$link."')";
			mysql_query($query);
			echo "El archivo fue cargado con exito a la base de datos! <br/>";
		}
		// Sino se pudo subir el temporal		
		else 
		{			
			echo "no se pudo subir el archivo " . $local;		
		}
	}
	echo '<a href="subir_archivios.php">Click aqui para volver</a>';	
	//cerramos la conexión FTP	
	ftp_close($cid);
}
else
{
	if ($_POST['cargar2']==true)
	{
	ftp_chdir($cid, "/public_html/circulares_padres");
	echo "Cambiado al directorio necesario";
	$local = $_FILES["archivo1"]["name"];	
	// Este es el nombre temporal del archivo mientras dura la transmisión
	$remoto = $_FILES["archivo1"]["tmp_name"];	// El tamaño del archivo
	$tama = $_FILES["archivo1"]["size"];
	echo "<br />$local<br />";	echo "$remoto<br />";
	echo "subiendo el archivo...<br />";
	// Juntamos la ruta del servidor con el nombre real del archivo	
	$ruta = "../public_html/circulares_padres/". $local;

	// Verificamos si no hemos excedido el tamaño del archivo	
	if ($tama>$_POST["MAX_FILE_SIZE"])
	{		
		echo "El archivo Excede el tamaño de 2MB.<br />";
		
	}
	
	else
	{		
		// Verificamos si ya se subio el archivo temporal		
		if (is_uploaded_file($remoto))
		{			
			// copiamos el archivo temporal, del directorio de temporales de nuestro servidor a la ruta que creamos			
			move_uploaded_file($remoto, $ruta);
			$link='<a href="circulares_padres/'.$local.'">Ver</a>';
			$query="INSERT INTO circulares_padre VALUES (NULL,'".$local."','".date('Y-m-d H:i:s')."','".$link."')";
			mysql_query($query);
			echo "El archivo fue cargado con exito a la base de datos! <br/>";
		}
		// Sino se pudo subir el temporal		
		else 
		{			
			echo "no se pudo subir el archivo " . $local;		
		}
	}
	echo '<a href="http://www.apf-alemansc.com.bo/subir_archivos.php">Click aqui para volver</a>';	
	//cerramos la conexión FTP	
	ftp_close($cid);
	}
	else
	{
		if($_POST['cargaractividad']==true)
		{
			echo "Cambiado al directorio necesario";
			ftp_chdir($cid, "/public_html/actividades");
			$local = $_FILES["archivoactividad"]["name"];	
			// Este es el nombre temporal del archivo mientras dura la transmisión
			$remoto = $_FILES["archivoactividad"]["tmp_name"];	// El tamaño del archivo
			$tama = $_FILES["archivoactividad"]["size"];
			echo "<br />$local<br />";	echo "$remoto<br />";
			echo "subiendo el archivo...<br />";
			// Juntamos la ruta del servidor con el nombre real del archivo	
			$ruta = "../public_html/actividades/". $local;

			// Verificamos si no hemos excedido el tamaño del archivo	
			if ($tama>$_POST["MAX_FILE_SIZE"])
			{		
				echo "El archivo Excede el tamaño de 2MB.<br />";		
			}
			else
			{		
				// Verificamos si ya se subio el archivo temporal		
				if (is_uploaded_file($remoto))
				{			
					// copiamos el archivo temporal, del directorio de temporales de nuestro servidor a la ruta que creamos			
					move_uploaded_file($remoto, $ruta);
					$link='<a href="actividades/'.$local.'">Ver</a>';
					$query="INSERT INTO actividades VALUES (NULL,'".$local."','".date('Y-m-d H:i:s')."','".$link."')";
					mysql_query($query);
					echo "El archivo fue cargado con exito a la base de datos! <br/>";
				}
				// Sino se pudo subir el temporal		
				else 
				{			
					echo "no se pudo subir el archivo " . $local;		
				}
			}
			echo '<a href="http://www.apf-alemansc.com.bo/subir_archivos.php">Click aqui para volver</a>';	
			//cerramos la conexión FTP	
			ftp_close($cid);	
		}
		else
		{
			if($_POST['actualizarcpadres']==true)
			{	
				ftp_chdir($cid, "/public_html/circulares_padres");
				echo "Cambiado al directorio necesario";
				$local = $_FILES["archivo3"]["name"];
					
				// Este es el nombre temporal del archivo mientras dura la transmisión
				$remoto = $_FILES["archivo3"]["tmp_name"];	// El tamaño del archivo
				
				$tama = $_FILES["archivo3"]["size"];
				echo "subiendo el archivo...<br />";
				// Juntamos la ruta del servidor con el nombre real del archivo	
				$ruta = "../public_html/circulares_padres/".$local;
				
				// Verificamos si no hemos excedido el tamaño del archivo	
				if ($tama>$_POST["MAX_FILE_SIZE"])
				{		
					echo "El archivo Excede el tamaño de 2MB.<br />";					
				}
				else
				{		
					// Verificamos si ya se subio el archivo temporal		
					if (is_uploaded_file($remoto))
					{
						// copiamos el archivo temporal, del directorio de temporales de nuestro servidor a la ruta que creamos			
						move_uploaded_file($remoto, $ruta);
						$link='<a href="circulares_padres/'.$local.'">Ver</a>';
						$nomb = $_SESSION['archivo'];
						$query="UPDATE circulares_padre SET nombre= '".$local."',fecha='".date('Y-m-d H:i:s')."',enlace='".$link."' WHERE nombre='".$nomb."';";
						echo $query;
						mysql_query($query);
						echo "El archivo fue cargado con exito a la base de datos! <br/>";
					}
					// Sino se pudo subir el temporal		
					else 
					{			
						echo "no se pudo subir el archivo " . $local;		
					}
				}
			echo '<a href="http://www.apf-alemansc.com.bo/validar_administrar.php">Click aqui para volver</a>';	
			//cerramos la conexión FTP	
			ftp_close($cid);	
			}
		} 
	}
}
mysql_close();?>