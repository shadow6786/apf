<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html dir="ltr" lang="es-ES"> 

    <title>el titulo</title> 
<script language="javascript"> 
    timeA=new Date(); 

</script> 
<? 
    $kas = 404;                //  enviará 404K para medir su velocidad 
    $out = array(); 
    for( $i=0; $i<$kas; $i++ ) { 
        $linea = ""; 
        for( $m=0; $m<32; $m++ )             // 1K, 1.024 bytes 
            $linea .= md5(microtime());      // md5 son 32 bytes 
        $out[$i] = $linea; 
    } 
    for ($i=0;$i<=$kas;$i++) 
        echo $out[$i]; 
?> 
<script language="javascript"> 
    var timeB=new Date(); 
    var tiempo=(timeB - timeA)/1000; 
    var dim=<?php echo $kas; ?>; 
    document.write("</head>"); 
    if ( tiempo > 0.500 ) {        //  Este valor (en segundos) es el threshold de la alta/baja velocidad 
       document.write("<body onload=document.location.replace(\"test_velocidad.php?tiempo="+tiempo+"&kb="+dim+"\")>"); 
    } 
    else { 
       document.write("<body onload=document.location.replace(\"test_velocidad.php?tiempo="+tiempo+"&kb="+dim+"\")>"); 
    } 
</script> 
</body> 
</html>