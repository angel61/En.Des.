<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>paginadelogin.html</title>
  </head>
  
  <?php  
  $nombre =  $_POST['nombre'];  
  ?>
  <script type="text/javascript">
  

  function cargardatos() {
	var nombre = "<?php echo $nombre;?>";
  var divresultado=document.getElementById("resultado");    
  divresultado.innerHTML="<H3> el campo nombre contiene: "+nombre+"</H3>"
 
	
    
    alert("el usuario es: "+nombre);
  }

  
  </script>
  <body onload="cargardatos()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
