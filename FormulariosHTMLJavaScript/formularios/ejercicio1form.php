<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>registro.php</title>
  </head>
  
  <?php
  $nombre=$_POST['nombre'];
  $num=$_POST['num'];
  $dire=$_POST['dire'];
  $pobla=$_POST['pobla'];
  $telef=$_POST['telef'];

  $hombre =  0;
  $mujer =  0;
  if (isset($_POST['hombre'])) {

    $hombre =  true;

  }

  if (isset($_POST['mujer'])) {

    $mujer =  true;

  }
 
    
  ?>
  <script type="text/javascript">

function recogerdatos() {


var nombre="<?php echo $nombre;?>";
var num= "<?php echo $num;?>";
var dire="<?php echo $dire;?>";
var pobla="<?php echo $pobla;?>";
var telef = <?php echo $telef;?>;
var hombre = <?php echo $hombre;?>;
var mujer=<?php echo $mujer;?>;
var sexo="";

if (hombre) {
sexo="hombre";

}
if (mujer) {

  sexo="mujer";
}


var divResultado= document.getElementById("resultado");
var HTMLResultado="";
 alert(nombre+num+dire+telef+sexo);

 HTMLResultado="<table border=1> <TR><TH>Campo</TH><TH>Valor</TH></TR>"+
                          "<TR><TD>Nombre</TD><TD>"+ nombre +"</TD></TR>"+
                          "<TR><TD>Numero </TD><TD>"+ num +"</TD></TR>"+
                          "<TR><TD>Direccion</TD><TD>" +dire+ "</TD></TR>"+
                          "<TR><TD>Telefono</TD><TD>" +telef+ "</TD></TR>"+
                          "<TR><TD>Sexo</TD><TD>" +sexo+"</TD></TR></table>";
 
 
 
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