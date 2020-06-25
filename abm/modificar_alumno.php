<?php
include 'modificar.php';
$reg= buscar_dni();
$dni=$reg["dni"];
$nombre=$reg["nombre"];
$apellido=$reg["apellido"];
$rol=$reg["rol"];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
    <link rel="stylesheet" href="boton.css">
   </head>
   <body>
     <style >

     body{

       font-family: Arial; background-color: #18A383; font-size: 20px;

     }
     div{
       border-radius: 3px;
       background-color: #e8e8e8;
       margin: 0 auto;
       width: 300px;
       text-align: center;
       padding: 10px;

     }
     input, textarea{

       outline: none;
       border: 0px;

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
     /*
     .dda{
       border: solid 1px #d1d1d1;
       padding: 8px;
       border-radius: 3px;
     }
 /*    h2{
       margin: 0 auto;
       width: 300px;
       text-align: center;
     }
     p{
       margin: 0 auto;
       width: 300px;
       text-align: center;

     }
     form{
       margin: 0 auto;
       width: 300px;
       text-align: center;
       padding: 10px;
     }
 */
     </style>
   <div class="">


   <h2>Modificar Usuario</h2>
   <p>Ingrese los nuevos datos del Usuario</p>
   <form action="" method="post">
     <p>Dni</p>
     <input type="text" class="field" name="dni" placeholder="DNI" value="<?php echo "$dni"; ?>">
     <p>Nombre</p>
     <input type="text" class="field" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>">
     <p>Apellido</p>
     <input type="text" class="field" name="apellido" placeholder="Apellido" value="<?php echo "$apellido"; ?>">
     <p>Rol</p>
     <input type="text" class="field" name="rol" placeholder="rol" value="<?php echo "$rol"; ?>">
     <p class="dda">
       <input type="submit" class="btn btn-green" name="guardar" value="Guardar Cambios">
       <button type="submit" class="btn btn-green" name="Cancelar" formaction="buscar_dni.html">Cancelar</button>
     </p>
   </form>
     <!--
     <input type="submit" class="btn btn-green" name="submit" value="Volver al Menu">
     <a type="submit" class="btn btn-green" name="sumbit" href="home.php">Volver al Menu</a>
     <button type="submit" class="btn btn-green" name="button" formaction="home.php">Volver al Menu</button>
     -->
 </div>
     <?php
     if(array_key_exists('guardar',$_POST)){
        guardar_cambios();
     }
      ?>
   </body>
 </html>
