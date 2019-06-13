<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>checkbox  tienda</title>
  </head>
  
  <?php  
  $carne="";
  $pescado="";
  $verduras="";
  if (isset($_POST['carne'])) {

    $carne = " carne";

  }
  
  if (isset($_POST['pescado'])) {

    $pescado=" pescado";

  }
  if (isset($_POST['verduras'])) {

    $bici = " verduras";

  }
    
  ?>
  <script type="text/javascript">
  function compra() {
      var carne = "<?php echo $carne;?>";
      var pescado = "<?php echo $pescado;?>";
      var verduras=  "<?php echo $verduras;?>";
      var divresultado=document.getElementById("resultado");    

      var HTML="<TABLE border=1><TR><TH>Articulos</TH></TR>";
      if (carne!="") {

    HTML=HTML+"<TR><TD>"+ carne +"</TD></TR>"

    }
    if (pescado!="") {

    HTML=HTML+"<TR><TD>"+ pescado +"</TD></TR>"

    }
    if (verduras!="") {

    HTML=HTML+"<TR><TD>"+ verduras +"</TD></TR>"

    }



    HTML=HTML+"</TABLE>"

    divresultado.innerHTML=HTML;

    alert("articulos elegidos"+carne+pescado+verduras);

}
  
  </script>
  <body onload="compra()">
    <p><br>
    </p>
    <br>
    <div id="resultado"></div>
    
  </body>
</html>
