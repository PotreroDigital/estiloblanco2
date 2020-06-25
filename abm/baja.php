
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="boton.css">
  </head>
  <body>
    <style media="screen">


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
        form{

          margin: 0 auto;
          width: 300px;
          text-align: center;
          padding: 10px;
          outline: none;
          border: 0px;
        }
        button, textarea{

          outline: none;
          border: 0px;

        }
    </style>

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
          echo "<p>Registro eliminado</p>";
        }
      } else {
        echo "<p> MySQL no conoce ese usuario y password</p>";
      }
    ?>

    <form class="" action="" method="post">
      <button type="submit" class="btn btn-green" name="button" formaction="buscar_dni.html">Volver</button>
    </form>

  </body>
</html>
