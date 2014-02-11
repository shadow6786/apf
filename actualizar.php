<?php require_once("conectar.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
  <meta name="keywords" content="Bolivia, apf, colegio, aleman, santa cruz, asociacion, padres" />
  <meta name="title" content="Asociacion Padres de Familia Colegio Aleman S.C." />
  <meta name="author" content="Administrator" />
  <meta name="description" content="Asociacion de Padre de Familia Colegio Aleman" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />

<title>Asociacion Padres de Familia Colegio Aleman S.C.</title>
<style type="text/css"> 
    <!-- 
    body  {
    	font: 100% Verdana, Arial, Helvetica, sans-serif;
    	background: #666666;
    	margin: 0; /* es recomendable ajustar a cero el margen y el relleno del elemento body para lograr la compatibilidad con la configuración predeterminada de los diversos navegadores */
    	padding: 0;
    	text-align: center; /* esto centra el contenedor en los navegadores IE 5*. El texto se ajusta posteriormente con el valor predeterminado de alineación a la izquierda en el selector #container */
    	color: #000000;
		background-color:#000000;
    }
    .thrColFixHdr #container {
	width: 1000px;  /* el uso de 20px menos que un ancho completo de 800px da cabida a los bordes del navegador y evita la aparición de una barra de desplazamiento horizontal */
	background: #FFFFFF;
	margin: 0 auto; /* los márgenes automáticos (conjuntamente con un ancho) centran la página */
	border: 0px none #000000;
	text-align: left; /* esto anula text-align: center en el elemento body. */
	border-width: none;
    } 
	.thrColFixHdr #menu
	{
	width:100%;
	background:#DDDDDD;
	border:0px none #000000;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	border-width: 0;
	}
    .thrColFixHdr #header { 
    	background: #DDDDDD; 
    	padding: 0 0px 0 0px;  /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen bajo él. Si se utiliza una imagen en el #header en lugar de texto, es posible que le interese quitar el relleno. */
    } 
    .thrColFixHdr #header h1 {
    	margin: 0; /* el ajuste en cero del margen del último elemento del div de #header evita la contracción del margen (un espacio inexplicable entre divs). Si el div tiene un borde alrededor, esto no es necesario, ya que también evita la contracción del margen */
    	padding: 10px 0; /* el uso de relleno en lugar de margen le permitirá mantener el elemento alejado de los bordes del div */
    }
    .thrColFixHdr #sidebar1 {
    	float: left; /* dado que este elemento es flotante, debe asignarse un ancho */
    	width: 160px; /* el ancho real de este div, en navegadores que cumplen los estándares, o el modo de estándares de Internet Explorer, incluirá el relleno y el borde además del ancho */
		height:455px;
    	background:#FFFFFF;  /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
    	padding: 10px 0px 10px 10px; /* el relleno mantiene el contenido del div alejado de los bordes */
		background-image:url(Img/fondo-lateral-izquierdo.gif); 
		background-position:center;   
	}
    .thrColFixHdr #sidebar2 {
    	float: right; /* dado que este elemento es flotante, debe asignarse un ancho */
    	width: 160px; /* el ancho real de este div, en navegadores que cumplen los estándares, o el modo de estándares de Internet Explorer, incluirá el relleno y el borde además del ancho */
		height:455px;
    	background: #FFFFFF; /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
    	padding: 10px 0px 10px 10px; /* el relleno mantiene el contenido del div alejado de los bordes */
    	/*background-image:url(Img/fondo-lateral-derecho.gif);*/
		background:url(Img/fondo-lateral-derecho.gif);
		background-position:center;	
	}
    .thrColFixHdr #mainContent { 
    	margin: 0 200px; /* los márgenes derecho e izquierdo de este elemento div crean las dos columnas externas de los lados de la página. Con independencia de la cantidad de contenido que incluyan los divs de las barras laterales, permanecerá el espacio de la columna. Puede quitar este margen si desea que el texto del div #mainContent llene el espacio de las barras laterales cuando termine el contenido de cada una de ellas. */
    	padding: 0 10px; /* recuerde que el relleno es el espacio situado dentro del cuadro div y que el margen es el espacio situado fuera del cuadro div */
    } 
    .thrColFixHdr #footer { 
    	padding: 0 10px 0 20px; /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen por encima de él. */
    	background:#DDDDDD;
    } 
    .thrColFixHdr #footer p {
    	margin: 0; /* el ajuste en cero de los márgenes del primer elemento del pie evitará que puedan contraerse los márgenes (un espacio entre divs) */
    	padding: 10px 0; /* el relleno de este elemento creará espacio, de la misma forma que lo haría el margen, sin el problema de la contracción de márgenes */
    }
    .fltrt { /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
    	float: right;
    	margin-left: 8px;
    }
    .fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. */
    	float: left;
    	margin-right: 8px;
    }
    .clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
    	clear:both;
        height:0;
        font-size: 1px;
        line-height: 0px;
    }
#apDiv1 {
	position:absolute;
	width:1000px;
	height:25px;
	z-index:1;
	left: 271px;
	top: 89px;
}
.Estilo1 {
	font-size: 80%
}
    --> 
    </style>
<!--[if IE 5]>
    <style type="text/css"> 
    /* coloque las reparaciones del modelo de cuadro para IE 5* en este comentario condicional */
    .thrColFixHdr #sidebar1 { width: 180px; }
    .thrColFixHdr #sidebar2 { width: 190px; }
    </style>
    <![endif]--><!--[if IE]>
    <style type="text/css"> 
    /* coloque las reparaciones de css para todas las versiones de IE en este comentario condicional */
    .thrColFixHdr #sidebar2, .thrColFixHdr #sidebar1 { padding-top: 30px; }
    .thrColFixHdr #mainContent { zoom: 1; }
    /* la propiedad zoom propia que se indica más arriba proporciona a IE el hasLayout que necesita para evitar diversos errores */
    </style>
    <![endif]-->
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function esconder(id){
    var elDiv = document.getElementById(id); //se define la variable "elDiv" igual a nuestro div
	elDiv.style.visibility='hidden';
    elDiv.style.display='none'; //damos un atributo display:none que oculta el div   
   }

function mostrar(id){
    var elDiv = document.getElementById(id); //se define la variable "elDiv" igual a nuestro div
	elDiv.style.visibility='visible';
    elDiv.style.display='block';//damos un atributo display:block que  el div   
   }

function mostrarcirculares(formulario)
{
	indice=	formulario.opcion.selectedIndex
	if (indice== 0)
	{
		alert('Debe Seleccionar una opcion diferente')
	}
	else
	{
		if(indice==1)
		{ 
			mostrar('Circular_Directiva')
			esconder('Circular_Padre')
		}
		else
		{
			if (indice==2)
			{
				mostrar('Circular_Padre')
				esconder('Circular_Directiva')
			}
		}
	}
}

//-->
</script>
</head>

<body class="thrColFixHdr" onload="MM_preloadImages('Img/directorio-2.gif','Img/estatu-y-reglame2.gif','Img/circulares-2.gif','Img/contactenos-2.gif','Img/quienes-somos-2.gif');esconder('Circular_Directiva');esconder('Circular_Padre');esconder('Actualizar_Directiva');esconder('Actualizar_Padres');esconder('Actualizar_Actividades')">

<div id="container">
      <div id="header">
        <div align="center">
          <!--h1>Asociacion de padres de familia del colegio Aleman Santa Cruz
          <!-- end #header -->
          <!--/h1>-->
        <a href="http://www.apf-alemansc.com.bo"><img src="Img/encabezado-1000-x-185-px.gif" width="1000" border="0"/></a></div>
      </div>
      <div id="menu" >
        <div align="center"><a href="http://www.apf-alemansc.com.bo"><img src="Img/quienes-somos.gif" name="inicio2" width="167" height="30" border="0" id="inicio2" onmouseover="MM_swapImage('inicio2','','Img/quienes-somos-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a><a href="directorio.html"><img src="Img/directorio.gif" name="directorio" width="167" height="30" border="0" id="directorio" onmouseover="MM_swapImage('directorio','','Img/directorio-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a><a href="estatutos.html"><img src="Img/estatuto-y-reglame.gif" name="estatuto" width="167" height="30" border="0" id="estatuto" onmouseover="MM_swapImage('estatuto','','Img/estatu-y-reglame2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="circulares.php"><img src="Img/circulares.gif" name="circulares" width="166" height="30" border="0" id="circulares" onmouseover="MM_swapImage('circulares','','Img/circulares-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a><a href="actividades.php"><img src="Img/contactenos.gif" name="actividades" width="166" height="30" border="0" id="actividades" onmouseover="MM_swapImage('actividades','','Img/contactenos-2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></a><a href="uniformes.php"><img src="Img/poleras.gif" name="poleras" width="167" height="30" border="0" onmouseover="MM_swapImage('poleras','','Img/poleras-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a></div>
  </div>      
      <div id="sidebar1">
        <h3><strong>Por que no visitas tambien:</strong></h3>
        <a href="http://www.aaainternacional.com"><img src="Img/logo-AAA.gif" width="150" height="73" border="0" /></a>
        <br /><br />
		<a href="http://www.google.com.bo"><img src="Img/google-logo.gif" width="150" height="60" border="0" /></a>
        <br />
        <br />
        <a href="http://www.facebook.com"><img src="Img/facebook-logo.jpg" width="150" border="0"/></a><br />
      </div>
      <div id="sidebar2">  
      <h3><strong>Enlaces de interes</strong></h3>   
        <a href="http://www.colegioaleman-santacruz.edu.bo/"><img src="Img/LOGO-ALEMAN.gif" width="150" height="99" border="0"/></a>
        <br /><br />
        <a href="contacto.php"><img src="Img/contacto.gif" width="150" height="110" hspace="0" border="0"/></a>       
        <br />
        <br />
        <a href="registro.php"><img src="Img/registro-de-padres.gif" width="150" border="0" /></a>
                    
      </div>
      <div id="mainContent">
      <h3>Formulario de actualizacion</h3>
       <?php
	   if (isset($_SESSION['alias']))
	   {
			if($_POST['actualizarcirculares']==true)
			{
			?>                  
            Seleccione en la lista la clase de Circular que desea borrar o actualizar.
	        <br/>
	        <br/>
            <form id="form1" name="form1" method="post" action="">
 			<select name="opcion" size="1" id="opcion" onchange="mostrarcirculares(form1)" >
      		<option value="1">Seleccione Circular</option>
       		<option value="2">Circulares Directiva APF</option>
	   		<option value="3">Circulares Padres de familia</option>
  			</select>
  			<div id="Circular_Directiva" style="visibility:hidden">
			<p>Circulares Directiva APF</p>
			<table  width="560" border="1" bordercolor="#999999" >
			<tr>
 			<td width="40"><div align="center"><strong>#</strong></div></td>
  			<td width="268"><div align="center"><strong>Nombre</strong></div></td>
			<td width="110"><div align="center"><strong>Fecha</strong></div></td>
			<td width="114" colspan="2"><div align="center"><strong>Accion</strong></div></td>
			</tr>
       			 	<?php
      				$query1="SELECT * FROM circulares_directiva";
					$resultado1=mysql_query($query1) or die(mysql_error());
					$total1= mysql_num_rows($resultado1);
					$var=1;
	        		if($total1>0){
					while($fila=mysql_fetch_assoc($resultado1)){
						echo "<tr>";
						echo "<td>".$var."</td>";
						echo "<td>".$fila['nombre']."</td>";
						echo "<td>".implode( '/', array_reverse( explode( '-', $fila['fecha'] ) ) )."</td>";
						$n = $fila['nombre'];
						$_SESSION['archivo']=$n;
						echo '<td><input type="submit" value="Actualizar" onclick="actualizarcirculares("$n","directiva")"/></td>';
						echo '<td><input type="submit" value="Borrar" onclick="borrarcirculares("$n","directiva")"/></td>';			
						echo "</tr>";
						$var=$var+1;
						}
					}
					?>
        		</table>
        </div>
        <br/>
        <div id="Circular_Padre" style="visibility:hidden">
        <p>Circulares Padres de familia</p>
        <table  width="560" border="1" bordercolor="#999999">
          <tr>
            <td width="40"><div align="center"><strong>#</strong></div></td>
            <td width="268"><div align="center"><strong>Nombre</strong></div></td>
            <td width="110"><div align="center"><strong>Fecha</strong></div></td>
            <td width="114" colspan="2"><div align="center"><strong>Accion</strong></div></td>
          </tr>       
        <?php
			$query2="SELECT * FROM circulares_padre";
			$resultado2=mysql_query($query2) or die(mysql_error());
			$total2= mysql_num_rows($resultado2);
			$var2=1;
        	if($total2>0){
				while($fila=mysql_fetch_assoc($resultado2)){
					
					echo "<tr>";
					echo "<td>".$var2."</td>";
					echo "<td>".$fila['nombre']."</td>";					
					echo "<td>".implode( '/', array_reverse( explode( '-', $fila['fecha'] ) ) )."</td>";
					$n = $fila['nombre'];
					$_SESSION['archivo']=$n;
					echo '<td><input type="submit" value="Actualizar" onclick="actualizarcirculares("$n","padres")"/></td>';
					echo '<td><input type="submit" value="Borrar" onclick="borrarcirculares("$n","padres")"/></td>';					
					echo "</tr>";
					$var2=$var2+1;
				}
			}
			?>
        </table>
        </div>
      <!--  </form>-->  
        <?php
				}
				else
				{
					if($_POST['actualizaractividades']==true)
					{
						echo '<script>esconder("Actualizar_Directiva");esconder("Actualizar_Padres");</script>';
						?> 
                        <div id="Actividad" >
						<!--<form id="frmac" name="frmac" action="" method="post">-->
                      	<p>Seleccione de la lista la actividad a borrar o actualizar.</p>                      
                        <table  width="560" border="1" bordercolor="#999999">
          				<tr>
            				<td width="40"><div align="center"><strong>#</strong></div></td>
                       		<td width="268"><div align="center"><strong>Nombre</strong></div></td>
                        	<td width="110"><div align="center"><strong>Fecha</strong></div></td>
                        	<td width="114" colspan="2"><div align="center"><strong>Accion</strong></div></td>
                     	 </tr>
                        <?php
						$query3="SELECT * FROM actividades";
						$resultado3=mysql_query($query3) or die(mysql_error());
						$total3= mysql_num_rows($resultado3);
						$var3=1;
						if($total3>0){
						while($fila=mysql_fetch_assoc($resultado3)){
							echo "<tr>";
							echo "<td>".$var3."</td>";
							echo "<td>".$fila['nombre']."</td>";
							echo "<td>".implode( '/', array_reverse( explode( '-', $fila['fecha'] ) ) )."</td>";
							$n = $fila['id'];							
							echo '<td><input type="submit" value="Actualizar" onclick="actualizaractividades("$n")"</td>';
							echo '<td><input type="submit" value="Borrar" onclick="borrarcirculares("$n")"/></td>';				
							echo "</tr>";
							$var3=$var3+1;
							}
						}
					?>
                    </table> 
                    <!--</form>-->
                    </div>               
                    <?php			
					}
				}
			}
			else
			{
				echo "No estas autorizado para ver esta pagina";
			}
        
	  	function actualizarcirculares($nomb,$tip)
		{
			$cid = ftp_connect("server25.000webhost.com");	
			$login = ftp_login($cid, "a1692580","nacho6786");	
			ftp_pasv ($cid, true);	
			if (($cid) && ($login)) 
			{
				if($tip=='padres')
				{
					ftp_chdir($cid, "/public_html/circulares_padres");
					$ruta="../public_html/circulares_padres/".$nomb;
					if( ftp_delete($cid, $ruta))
					{ 							
						ftp_close($cid);			
						?>
						<script type="text/javascript">
						esconder("Circular_Padre");
						mostrar("Actualizar_Padres");
                        </script>
                        <?php
					}
					else
					{
						echo "No se pudo manipular el archivo.";
					}
				}
				else
				{
					if($tip=='directiva')
					{
						ftp_chdir($cid, "/public_html/circulares_directiva");
						$ruta="../public_html/circulares_directiva/".$nomb;
						if( ftp_delete($cid, $ruta))
						{ 							
							ftp_close($cid);			
							echo '<script>esconder("Circular_Directiva");mostrar("Actualizar_Directiva");</script>';
						}
						else
						{
							echo "No se pudo manipular el archivo.";
						}
					}	
				}
			}
			else
			{
				echo "NO CONECTO!";
			}	
		}
		function actualizaractividades($idac)
		{	
			$cadena = '"SELECT * FROM actividades WHERE id='.$idac.'"';
			$resultado= mysql_query($cadena);
			$fila=mysql_fetch_assoc($resultado);
			echo'<input type="hidden" name="tipo" id="tipo" value="actividad" />';
        	echo'<input type="hidden" name="id" id="id" value="'.$fila["id"].'" />';
        	echo'<input type="hidden" name="nombre" id="nombre" value="'.$fila["nombre"].'" />';
        	echo'<input type="hidden" name="fecha" id="fecha" value="'.implode( '/', array_reverse( explode( '-', $fila['fecha'] ) ) ).'"/>';       
        	echo'<input type="hidden" name="archivo5" id="archivo5" value="'.$fila["archivo"].'" />';
			header("Location: http://www.apf-alemansc.com.bo/modificar.php");
		}
	  ?>
      
      <!--<form id="frmact" name="frmact" method="post" action="guardar_archivo.php" enctype="multipart/form-data"> -->
      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<div id="Actualizar_Padres" style="visibility:hidden">                
        <h3>Actualizacion de Documento circulares padres de familia</h3><br/>        
        <input type="file" name="archivo3" id="archivo3" value="Examinar" /><br/><br/>
        <input type="submit" name="actualizarcpadres" id="actualizarcpadres" value="Actualizar"  />
        </div>
        <div id="Actualizar_Directiva" style="visibility:hidden">
		<h3>Actualizacion de Documento circulares Directiva</h3><br/>
        <input type="file" name="archivo4" id="archivo4" value="Examinar" /><br/><br/>
        <input type="submit" name="actualizarcdirectiva" id="actualizarcdirectiva" value="Actualizar"  />        
        </div>
        <div id="Actualizar_Actividades" style="visibility:hidden">
        <h3>Actualizacion de Actividades</h3>
        <input type="hidden" name="tipo" id="tipo"  />
        <input type="hidden" name="id" id="id"  />
        <input type="hidden" name="nombre" id="nombre"  />
        <input type="hidden" name="fecha" id="fecha" />       
        <input type="hidden" name="archivo5" id="archivo5" />        
        <br/>
        
        </div>
      </form>
           <a href="validar_administrar.php">Click para aqui Volver al menu principal</a>
    </div>
   <!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos --><br class="clearfloat" />
         
      <div id="footer">
      <p align="center" class="Estilo1">Todos los derechos reservados. © Axioma 15/08/2011.</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
    </body>
</html>