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


$sql = "SELECT * FROM table34 where codigo=$c";
$result = mysqli_query($conn, $sql);

if (mysqli_query($result) > 0){

  while($row = mysqli_fetch_assoc($result)){

?>

<div class="modal-dialog">
  <div class="modal-content">
    
    <div class="modal-header">
      <h4 class="modal-title">Correcto</h4>
      <button class="close" onclick="location.href='../consultarproducto.html'">&times;</button>
    </div>

<div class="modal-body">
 
<?php

  echo "Codigo del producto: " . $row["codigo"]
  . "<br> Nombre del producto: " . $row["nombre"]
  . "<br> Marca del producto: " . $row["marca"]
  . "<br> Precio del producto: " . $row["precio"]
  . "<br> Cantidad comprada: " . $row["cantidad"]
  . "" . "<br>";

  ?>

</div>

<div class="modal-footer">
  <button class="btn btn-danger" onclick="location.href='../consultarproducto.html'">Cerrar</button>
</div>

  </div>
</div>

<?php

}

} else {

?>

<div class="modal-dialog">
  <div class="modal-content">
    
    <div class="modal-header">
      <h4 class="modal-title">Error</h4>
      <button class="close" onclick="location.href='../consultarproducto.html'">&times;</button>
    </div>

<div class="modal-body">
  <?php
  echo "Ese codigo de producto no exite" . "<br>";
  ?>
</div>

<div class="modal-footer">
  <button class="btn btn-danger" onclick="location.href='../consultarproducto.html'">Cerrar</button>
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