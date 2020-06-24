<?php
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
    mysqli_select_db($conexion, "estilo_blanco");

    // 2) Almacenamos los datos del envío POST
    $dni = $_POST['dni'];

    // 3) Preparar la orden SQL
    $consulta = "DELETE FROM usuario WHERE dni=$dni";

    // 4) Ejecutar la orden y ingresamos datos
    if (mysqli_query($conexion, $consulta) ){
      echo "<p>Registro eliminado.</p>";
    }
  } else {
    echo "<p> MySQL no conoce ese usuario y password</p>";
  }
?>

<form class="" action="" method="post">
  <button type="submit" name="button" formaction="buscar_dni.html">Volver</button>
</form>
