<?php
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
    mysqli_select_db($conexion, "estilo_blanco");

    // 2) Almacenamos los datos del envío POST
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    if ($q= "SELECT dni FROM usuario WHERE dni=$dni"){
      $reg= mysqli_query ($conexion, $q);
      $dni_reg=mysqli_fetch_array($reg);
      if ($dni_reg) {
        echo "<p>Ya esta en la base de datos.</p>";
      } else {
        // 3) Preparar la orden SQL
        $consulta = "INSERT INTO usuario (id,dni,nombre,apellido,rol) VALUES ('','$dni','$nombre','$apellido','')";

        // 4) Ejecutar la orden y ingresamos datos
        if (mysqli_query($conexion, $consulta) ){
          echo "<p>Registro agregado.</p>";
        } else {
          echo "<p>No se agregó...</p>";
        }
      }
    }
  }else{
    echo "<p> MySQL no conoce ese usuario y password</p>";
  }
?>
<form class="" action="" method="post">
  <button type="submit" name="button" formaction="ingresar_alumno.html">Volver</button>
</form>
