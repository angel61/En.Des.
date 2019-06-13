<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>selectprovincias.php</title>
  </head>
  
  <?php
  
  $provincia =  $_POST['selectProvincias'];
 
  
  
  ?>
  <script type="text/javascript">
  


   

    function provincia(){
	var provincia = "<?php echo $provincia;?>";
  var divresultado=document.getElementById("resultado"); 
  alert("La provincia seleccionada es: " +provincia);
       
  divresultado.innerHTML="<H3> La provincia seleccionada es "+provincia+"</H3>"
    
  }
	
      
  </script>
  <body onload="provincia()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
