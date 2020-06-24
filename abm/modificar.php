<?php
return;

function buscar_dni(){
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
    mysqli_select_db($conexion, "estilo_blanco");
    // 2) Almacenamos los datos del envío POST
    $dni = $_POST['dni'];
    if ($q= "SELECT * FROM usuario WHERE dni=$dni"){
      $reg=mysqli_query ($conexion, $q);
      $dni_reg=mysqli_fetch_array($reg);
      if ($dni_reg['dni']==$dni) {
        return $dni_reg;
        }
      } else {
      echo "<p> MySQL no conoce ese usuario y password</p>";
    }
  } else {
    echo "ERROR!";
  }
}

function guardar_cambios(){
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")) {
    mysqli_select_db($conexion, "estilo_blanco");
    // 2) Almacenamos los datos del envío POST
    $dni=$_POST['dni'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $rol=$_POST['rol'];
    // 3) Preparar la orden SQL
    $consulta = "UPDATE usuario SET dni='$dni', nombre='$nombre', apellido='$apellido', rol='$rol' WHERE dni=$dni";
    // 4) Ejecutar la orden y ingresamos datos
    mysqli_query($conexion, $consulta);
    header('Location: buscar_dni.html');
    return;
  } else {
    echo "ERROR!";
  }
}

?>
