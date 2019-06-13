<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>paginadelogin.html</title>
  </head>
  
  <?php
  
  $nombre =  $_POST['nombre'];
  $clave = $_POST['clave'];
  
  
  ?>
  <script type="text/javascript">
  

  
    function cargardatos() {
    var nombre = "<?php echo $nombre;?>";
      var clave = "<?php echo $clave;?>";
      
        
        alert("el usuario es: "+nombre+"\n y la contraseña es: "+ clave);
      var divresultado=document.getElementById("resultado");    
      divresultado.innerHTML="<H3> El campo usuario es contiene: "+nombre+"</H3>" +
                              "<H3> El campo contraseña es: "+clave+"</H3>";
 
      
    
  }

  
  </script>
  <body onload="cargardatos()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
