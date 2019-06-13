<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>selectvaloracion.php</title>
  </head>
  
  <?php
  
  $equipo =  $_POST['miSelect'];
  
    
 ?>
  <script type="text/javascript">
  function equipo(){
	var equipo = "<?php echo $equipo;?>";
  var divresultado=document.getElementById("resultado"); 
  alert("El equipo seleccionado es: " +equipo);
       
  divresultado.innerHTML="<H3> el equipo seleccionado es: "+equipo+"</H3>"
    
  }
      
  </script>
  <body onload="equipo()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
