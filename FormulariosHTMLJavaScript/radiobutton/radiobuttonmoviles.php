<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>radiobuttonmoviles.php</title>
  </head>
  
  <?php
  
  $movil =  $_POST['moviles'];
 
  
  
  ?>
  <script type="text/javascript">
  
  function escogemovil(){	
    var movil = "<?php echo $movil;?>";

    alert("El S.O. movil elegido es: " +movil);
    var divresultado=document.getElementById("resultado");    
  divresultado.innerHTML="<H3> el campo de S.O. movil contiene: "+movil+"</H3>"
    alert("El valor del radio button es: " +movil);
	
  }

  </script>
  <body onload="escogemovil()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
