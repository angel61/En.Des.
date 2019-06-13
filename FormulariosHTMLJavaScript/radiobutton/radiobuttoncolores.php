<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>radiobutoncolores.php</title>
  </head>
  <?php
  
  $radiovalue =  $_POST['colorin'];
 
  
  
  ?>
  <script type="text/javascript">
  function cambiacolor() {
	var color = "<?php echo $radiovalue;?>";
  var divresultado=document.getElementById("resultado");    
  divresultado.innerHTML="<H3> el campo color contiene: "+color+"</H3>"
    alert("El valor del radio button es: " +color);
    document.bgColor=color;

  }
	
      
  </script>
  <body onload="cambiacolor()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
