<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>


<?php

require('config.php');


$c = $_POST['codigo'];
$n = $_POST['nombre'];
$m = $_POST['marca'];
$p = $_POST['precio'];
$u = $_POST['cantidad'];


$sql = "INSERT INTO tabla34 (codigo,nombre,marca,precio,cantidad) VALUES ('$c','$n','$m','$p','$u')";

if (mysqli_query($conn,$sql)){

?>

<div class="modal-dialog">
  <div class="modal-content">
    
    <div class="modal-header">
      <h4 class="modal-title">Correcto</h4>
      <button class="close" onclick="location.href='../ingresarproducto.html'">&times;</button>
    </div>

<div class="modal-body">
  Datos grabados correctamente
</div>

<div class="modal-footer">
  <button class="btn btn-danger" onclick="location.href='../ingresarproducto.html'">Cerrar</button>
</div>

  </div>
</div>

<?php
} else {

?>

<div class="modal-dialog">
  <div class="modal-content">
    
    <div class="modal-header">
      <h4 class="modal-title">Error</h4>
      <button class="close" onclick="location.href='../ingresarproducto.html'">&times;</button>
    </div>

<div class="modal-body">
  <?php
  echo "Error grabando datos: <br> " . $sql . "<br>" . mysqli_error($conn);
  ?>
</div>

<div class="modal-footer">
  <button class="btn btn-danger" onclick="location.href='../ingresarproducto.html'">Cerrar</button>
</div>

  </div>
</div>


<?php

}

mysqli_close($conn);

?> 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>