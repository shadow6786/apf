<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">  
<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
    <script type="texxt/javascript">
      	function calcular(peso){
          fin = new Date();
          vel = (peso/1024)/((fin-inicio)/1000)+'';
          vel = vel.substring(0,5);
          document.forms.velocidad.valor.value = vel;
          alert(vel);
      	}
      	inicio = new Date();
      	document.write('<img style="position:absolute; visibility:hidden"
		src="Img/actividad1.jpg" onload="calcular(this.fileSize)">');
	</script>
</head>  
<body>  

<form name="velocidad">
	Página bajada a <input type="text" size="3" name="valor" value="..."> kbps
</form>
</body>
</html>