<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>registro.php</title>
  </head>
  
  <?php
  $nombre=$_POST['nombre'];
  $seleccion=$_POST['seleccion'];
 
  $acuerdosi =  false;
  $acuerdono =  false;
  if (isset($_POST['acuerdosi'])) {

    $acuerdosi =  true;

  }

  if (isset($_POST['acuerdono'])) {

    $acuerdono =  true;

  }
 
    
  ?>
  <script type="text/javascript">

function recogerdatos() {


var nombre="<?php echo $nombre;?>";
var seleccion= "<?php echo $seleccion;?>";
var acuerdosi="<?php echo $acuerdosi;?>";
var acuerdono="<?php echo $acuerdono;?>";
var acuerdo="No seleccionado";

var divResultado= document.getElementById("resultado");
var HTMLResultado="";

if (acuerdosi) {

  acuerdo="Si";

}           
if (acuerdono) {
  acuerdo="No";
} 

 HTMLResultado="<table border=1> <TR><TH>Campo</TH><TH>Valor</TH></TR>"+
                         "<TR><TD>Nombre </TD><TD>"+ nombre +"</TD></TR>"+
                          "<TR><TD>Seleccion </TD><TD>"+ seleccion +"</TD></TR>"+
                          "<TR><TD>Acuerdo</TD><TD>"+ acuerdo +"</TD></TR></TABLE>"

                          

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