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
  
	var nombre = <?php echo $nombre;?>
	
    
    alert(nombre);
 

  
  </script>
  <body>
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
