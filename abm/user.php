<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      body{
              font-family: Arial; background-color: #18A383; font-size: 20px;
      }

    h1{
      color: #ffffff;
      text-align: center;
      border-radius: 10px;
      background-color: #33C93F;
      margin: 0 auto;
      width: 300px;
      text-align: center;
      padding: 10px;
      border: 2px solid #2c9465;
    }

    p{
      text-align: center;
      color: #9c1902
    }


    table {
      border-radius: 10px;
      background-color: #e8e8e8;
      margin: 0 auto;
      width: 300px;
      text-align: center;
      padding: 10px;
      border: 2px solid #2c9465;
}
th, td {
   border: solid 1px #d1d1d1;
   padding: 8px;
   width: 25%;
   text-align: left;
   vertical-align: top;
}
    </style>
  </head>
  <body>


    <?php
      if ($conexion = mysqli_connect("127.0.0.1","root","")){
        echo "<p></p>";

        $consulta= "SELECT*FROM usuario";

        mysqli_select_db($conexion, "estilo_blanco");

        $datos = mysqli_query($conexion, $consulta);
        ?>
        <div class="">


        <h1 >Usuario</h1>
        <?php

        echo '<table>

                  <th>DNI</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>ROL</th>
                </tr>

                <tr>';

                while ($fila=mysqli_fetch_array($datos)) {

                  echo "<tr>
                                          <td>".
                    $fila["dni"]."</td>
                                          <td>".
                    $fila["nombre"]."</td>
                                          <td>".
                    $fila["apellido"]."</td>
                                          <td>".
                    $fila["rol"]."</td>
                </tr>";

            '</table>';
            }
              ?>
        </div>
              <?php
            }
    ?>
  </body>
</html>
