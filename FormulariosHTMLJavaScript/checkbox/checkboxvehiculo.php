<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>checkbox  vehiculo</title>
  </head>
  
  <?php  
  $coche="";
  $moto="";
  $bici="";
  if (isset($_POST['coche'])) {

    $coche = " coche";

  }
  
  if (isset($_POST['moto'])) {

    $moto=" motocicleta";

  }
  if (isset($_POST['bici'])) {

    $bici = " bicicleta";

  }
    
  ?>
  <script type="text/javascript">
  function vehiculos() {
	var coche = "<?php echo $coche;?>";
  var moto = "<?php echo $moto;?>";
  var bici=  "<?php echo $bici;?>";
  var divresultado=document.getElementById("resultado");
  var HTML="<TABLE border=1><TR><TH>Vehiculos</TH></TR>";

  if (coche!="") {

    HTML=HTML+"<TR><TD>"+ coche +"</TD></TR>"

  }
  if (moto!="") {

HTML=HTML+"<TR><TD>"+ moto +"</TD></TR>"

}
if (bici!="") {

HTML=HTML+"<TR><TD>"+ bici +"</TD></TR>"

}



  HTML=HTML+"</TABLE>"

      
  divresultado.innerHTML=HTML;

  alert("vehiculos elegidos"+coche+moto+bici);
}

  
  </script>
  <body onload="vehiculos()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
