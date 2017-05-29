<?php
	include_once '../controllers/updatecontroller.php';
  include_once '../controllers/eliminarcontroller.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pizza</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- my css file -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <table border=1 >
    <tr class="success">
    <td>Id</td>
    <td>Nombre</td>
    <td>Descripcion</td>
    <td>Precio</td>
    <td>Modificar</td>

  </tr>
<tr>
  <?php
    foreach ($productos as $producto) {
  ?>
  <td><?php echo $producto['id'];?></td>
    <td><?php echo $producto['nombre'];?></td>
      <td><?php echo $producto['descripcion'];?></td>
        <td><?php echo $producto['precio'];?></td>
          <td><a class="btn btn-warning" href="modificar.php?nombre=<?php echo $producto['nombre'];?> ">Modificar</a></td>
          <td><a class="btn btn-warning" href="eliminar.php?nombre=<?php echo $producto['nombre'];?> ">Eliminar</a></td>

     </tr>
    <?php
      }
    ?>


  </table>
</body>
</html>
