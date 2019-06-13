<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>checkbox  contrato</title>
  </head>
  
  <?php  
  if (isset($_POST['acepto'])) {

    $acepto =  "Acepto ha sido marcado";

  }else {

    $acepto =  "Acepto no ha sido marcado";
  }

  if (isset($_POST['noacepto'])) {

    $noacepto =  "No acepto ha sido marcado";

  }else {

    $noacepto =   "No acepto no ha sido marcado";;
  }
 
    
  ?>
  <script type="text/javascript">
  
	var acepto = "<?php echo $acepto;?>";
  var noacepto = "<?php echo $noacepto;?>";
	
    

alert(acepto);

alert(noacepto);
 

  
  </script>
  <body>
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
