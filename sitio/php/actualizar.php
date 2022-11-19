<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>


<?php

require('config.php');


$c = $_POST['codigo'];


$sql = "SELECT * FROM tabla34 where codigo=$c";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){

  while($row = mysqli_fetch_assoc($result)){

?>



<div class="container">
<h1>Actualización de Productos</h1>

 <form action="actualizar2.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Codigo del producto:</label>
    <input type="text" class="form-control" value="<?php echo $row['codigo'] ?>" id="codigo" placeholder="Ingrese Codigo del producto" name="codigo" readonly>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Nombre del producto:</label>
    <input type="text" class="form-control" value="<?php echo $row['nombre'] ?>" id="nombre" placeholder="Ingrese Nombre del producto" name="nombre">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Marca del producto:</label>
    <input type="text" class="form-control" value="<?php echo $row['marca'] ?>" id="marca" placeholder="Ingrese Marca del producto" name="marca">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Precio del producto:</label>
    <input type="number" class="form-control" value="<?php echo $row['precio'] ?>" id="precio" placeholder="Ingrese Precio del producto" name="precio">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Cantidad comprada:</label>
    <input type="number" class="form-control" value="<?php echo $row['cantidad'] ?>" id="cantidad" placeholder="Ingrese Cantidad comprada" name="cantidad">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>

<?php

}

}else{

?>



<div class="modal-dialog">
  <div class="modal-content">
    
    <div class="modal-header">
      <h4 class="modal-title">Error</h4>
      <button class="close" onclick="location.href='../actualizarproducto.html'">&times;</button>
    </div>

<div class="modal-body">
  <?php
  echo "Ese codigo no existe " . "<br>";
  ?>
</div>

<div class="modal-footer">
  <button class="btn btn-danger" onclick="location.href='../actualizarproducto.html'">Cerrar</button>
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