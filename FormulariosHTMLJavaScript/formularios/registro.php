<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>registro.php</title>
  </head>
  
  <?php
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $sexo=$_POST['sexo'];
  $correo=$_POST['correo'];
  $condiciones =  0;
  $info =  0;
  if (isset($_POST['info'])) {

    $info =  true;

  }

  if (isset($_POST['condiciones'])) {

    $condiciones =  true;

  }
 
    
  ?>
  <script type="text/javascript">

function recogerdatos() {


var nombre="<?php echo $nombre;?>";
var apellidos= "<?php echo $apellidos;?>";
var correo="<?php echo $correo;?>";
var sexo="<?php echo $sexo;?>";
var info = <?php echo $info;?>;
var condiciones = <?php echo $condiciones;?>;
var divResultado= document.getElementById("resultado");
var HTMLResultado="";
 alert(nombre+apellidos+sexo+info+condiciones);

 HTMLResultado="<table border=1> <TR><TH>Campo</TH><TH>Valor</TH></TR>"+
                          "<TR><TD>Nombre</TD><TD>"+ nombre +"</TD></TR>"+
                          "<TR><TD>Apellidos </TD><TD>"+ apellidos +"</TD></TR>"+
                          "<TR><TD>Correo Electronico</TD><TD>" +correo+ "</TD></TR>"+
                          "<TR><TD>Sexo</TD><TD>" +sexo+ "</TD></TR>"+
                          "<TR><TD>Información</TD><TD>" +info+ "</TD></TR>"+
                          "<TR><TD>Condiciones</TD><TD>" +condiciones+"</TD></TR></table>";
 
 
 
 divResultado.innerHTML=HTMLResultado;

}
  </script>
  <body onload="recogerdatos()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>