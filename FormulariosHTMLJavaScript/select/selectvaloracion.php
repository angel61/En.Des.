<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>selectvaloracion.php</title>
  </head>
  
  <?php
  
  $selectvalue =  $_POST['miSelect'];
 
  
  
  ?>
  <script type="text/javascript">
  
	var valor = "<?php echo $selectvalue;?>";

    alert("El valor de la select es: " +valor);
	
      
  </script>
  <body>
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
