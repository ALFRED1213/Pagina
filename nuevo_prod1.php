<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <form action="eliminar_prod.php" method="POST"
    <div class="row">
        <div class="col-md-12">
            <h4>llena tu solicitud y nosotros te atenderemos</h4>
          <fieldset>
            <input name="id_cliente" type="text" class="form-control" id="id_cliente" placeholder="escribe tu id cliente..." required="">
          </fieldset>
        </div>
        <div class="col-md-12">
            <fieldset>
              <input name="nombre" type="fecha" class="form-control" id="nombre" placeholder=" escribe tu nombre..." required="">
            </fieldset>
          </div>
        <div class="col-md-12">
            <fieldset>
              <input name="AP_Paterno" type="AP_Paterno" class="form-control" id="AP_Paterno" placeholder=" escribe tu apellido paterno..." required="">
            </fieldset>
          </div>
          <div class="col-md-12">
            <fieldset>
              <input name="AP_Materno" type="AP_Materno" class="form-control" id="AP_Materno" placeholder=" escribe tu apellido Materno..." required="">
            </fieldset>
          </div>
        <div class="col-md-12">
          <fieldset>
            <input name="email" type="email" class="form-control" id="email" placeholder=" escribe tu email..." required="">
          </fieldset>
        </div>
        <div class="col-md-12">
            <fieldset>
              <input name="telefono" type="telefono" class="form-control" id="telefono" placeholder=" escribe tu telefono..." required="">
            </fieldset>
          </div>
          <div class="col-md-12">
            <fieldset>
              <input name="tipo_habitacion" type="tipo_habitacion" class="form-control" id="tipo_habitacion" placeholder=" escribe tu tipo de habitacion..." required="">
            </fieldset>
          </div>
          <div class="col-md-12">
            <fieldset>
              <input name="fecha" type="fecha" class="form-control" id="fecha" placeholder=" escribe tu fecha..." required="">
            </fieldset>
          </div>
          <div class="col-md-12">
            <fieldset>
              <input name="noches" type="noches" class="form-control" id="noches" placeholder=" escribe tus noches..." required="">
            </fieldset>
          </div>
        <div class="col-md-12">
          <fieldset>
            <button type="submit" id="form-submit" class="btn">enviar mensaje</button>
            
          </fieldset>
        </from> 
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>