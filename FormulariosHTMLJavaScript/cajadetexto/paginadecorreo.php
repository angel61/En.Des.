<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>paginadelogin.html</title>
  </head>
  
  <?php
  
  $correo =  $_POST['correo'];
  
  
  
  ?>
  <script type="text/javascript">
  

  function cargardatos() {
	var correo = "<?php echo $correo;?>";
  var divresultado=document.getElementById("resultado");    
  divresultado.innerHTML="<H3> el campo correo contiene: "+correo+"</H3>"
 
	
    
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
