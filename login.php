<?php include 'controles/funciones.php' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EstiloBlanco</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Open+Sans:400,300,600,700,800" rel="stylesheet" />
    <link href="productos.css" rel="stylesheet" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <style >


  div{
    text-align: center;
    margin: 0 auto;

  }

    form{
      border-radius: 20px;
      background-color: #e8e8e8;


    }

  </style>

  <body>
    <?php menu_user()  ?>
    <div class="container1">
      <div class="row header">
        <h1> LOGIN </h1>
        <h3>Complete con sus datos para iniciar sesion </h3>
      </div>
    <div class="row body">
      <form action="#">

            <p class="">
              <label for="first_name">DNI</label>
              <input type="text" name="dni" placeholder="DNI" pattern="^[0-9]{8}$" title="El DNI debe de tener 8 caracteres de longitud sin puntos" required>
            </p>
            <p class="">
              <label for="last_name">NOMBRE</label>
              <input type="text" name="nombre" placeholder="Nombre" pattern="^[a-zA-Z][a-zA-Z]{3,20}$" title="El Nombre debe de tener entre 3 y 20 caracteres de longitud" required>
            </p>
  					<p class="">
  						<label for="dni">APELLIDO</label>
              <input type="text" name="apellido" placeholder="Apellido" pattern="^[a-zA-Z][a-zA-Z]{3,20}$" title="El Apellido debe de tener entre 3 y 20 caracteres de longitud" required>
  					</p>
            <input type="submit" name="submit" value="Ingresar">


      </form>
    </div>

  </body>
  </body>
</html>
