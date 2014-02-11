<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
  <meta name="keywords" content="Bolivia, apf, colegio, aleman, santa cruz, asociacion, padres" />
  <meta name="title" content="Inicio" />
  <meta name="author" content="Administrator" />
  <meta name="description" content="Inicio de sesion para los administradores de la web APF" />

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
//-->
</script>
</head>

<body class="thrColFixHdr" onload="MM_preloadImages('Img/directorio-2.gif','Img/estatu-y-reglame2.gif','Img/circulares-2.gif','Img/contactenos-2.gif','Img/quienes-somos-2.gif')">

<div id="container">
      <div id="header">
        <div align="center">
          <!--h1>Asociacion de padres de familia del colegio Aleman Santa Cruz
          <!-- end #header -->
          <!--/h1>-->
        <a href="http://www.apf-alemansc.com.bo"><img src="Img/encabezado-1000-x-185-px.gif" width="1000" border="0"/></a>
        </div>
      </div>
      <div id="menu" >
        <div align="center"><a href="http://www.apf-alemansc.com.bo"><img src="Img/quienes-somos.gif" name="inicio2" width="167" height="30" border="0" id="inicio2" onmouseover="MM_swapImage('inicio2','','Img/quienes-somos-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a><a href="directorio.html"><img src="Img/directorio.gif" name="directorio" width="167" height="30" border="0" id="directorio" onmouseover="MM_swapImage('directorio','','Img/directorio-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a><a href="estatutos.html"><img src="Img/estatuto-y-reglame.gif" name="estatuto" width="167" height="30" border="0" id="estatuto" onmouseover="MM_swapImage('estatuto','','Img/estatu-y-reglame2.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="circulares.php"><img src="Img/circulares.gif" name="circulares" width="166" height="30" border="0" id="circulares" onmouseover="MM_swapImage('circulares','','Img/circulares-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a><a href="actividades.php"><img src="Img/contactenos.gif" name="actividades" width="166" height="30" border="0" id="actividades" onmouseover="MM_swapImage('actividades','','Img/contactenos-2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></a><a href="uniformes.php"><img src="Img/poleras.gif" name="poleras" width="167" height="30" border="0" onmouseover="MM_swapImage('poleras','','Img/poleras-2.gif',1)" onmouseout="MM_swapImgRestore()"/></a></div>
  </div>      
      <div id="sidebar1">
        <h3><strong>Por que no visitas tambien:</strong></h3>
        <a href="http://www.aaainternacional.com"><img src="Img/logo-AAA.gif" width="150" height="73" border="0" /></a><br />
          <br />
<a href="http://www.google.com.bo"><img src="Img/google-logo.gif" width="150" height="60" border="0" /></a><br />
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
        <h1 align="center"> Inicio de Sesion</h1>
<div align="center">
  <p>Inicie sesion con sus datos, y en letras minusculas.</p>
  <br/>
</div>
<form id="iniciar_sesion" name="iniciar_sesion" method="post" action="validar_administrar.php">
  <table width="570" height="126" border="0" >
  <tr>
    <td width="195" height="30"><div align="right">Usuario: </div></td>
    <td width="365">
      <label>
      <input name="usuario" type="text" id="usuario" size="30" />
        </label>      </td>
  </tr>
  <tr>
    <td height="32"><div align="right">Password: </div></td>
    <td>
      <label>
      <input name="password" type="password" id="password" size="30" />
        </label>    </td>
  </tr>
  <tr>
    <td height="46"><div align="right"></div></td>
    <td><label>
      <input type="submit" name="ingresar" id="ingresar" value="Ingresar" />
      <input type="reset" name="limpiar" id="limpiar" value="Limpiar" />
    </label></td>
  </tr>
</table>
</form> 
  </div>
   <!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos --><br class="clearfloat" />
         
      <div id="footer">
      <p align="center" class="Estilo1">Todos los derechos reservados. © Axioma 15/08/2011.</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
