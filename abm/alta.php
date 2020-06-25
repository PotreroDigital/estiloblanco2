<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="boton.css">
  </head>
    <style >

    body{

      font-family: Arial; background-color: #18A383; font-size: 20px;

    }
    p{
      border-radius: 3px;
      background-color: #e8e8e8;
      margin: 0 auto;
      width: 300px;
      text-align: center;
      padding: 10px;

    }
    button, textarea{

      outline: none;
      border: 0px;

    }
    .field{
      border: solid 1px #d1d1d1;
      padding: 8px;
      border-radius: 3px;
    }
    .field:focus{

      border-color: #18A383;

    }
    </style>

  <body>

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
      <p>
      <button type="submit" class="btn btn-green" name="button" formaction="ingresar_alumno.php">Volver</button>
      </p>
    </form>
</body>

</html>
