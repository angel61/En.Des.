<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>radiobutoncontrato.php</title>
  </head>
  <?php
  
  $radiovalue =  $_POST['deacuerdo'];
 
  
  
  ?>
  <script type="text/javascript">
  
	var contrato = "<?php echo $radiovalue;?>";

  var divresultado=document.getElementById("resultado");    
  divresultado.innerHTML="<H3> el campo de contrato contiene: "+contrato+"</H3>"
    alert("El valor del radio button es: " +contrato);
  }
	
      
  </script>
  <body>
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
