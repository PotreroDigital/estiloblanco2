
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

  <body>



    <div class="">


    <h2>Alta de usuario</h2>
    <p>Ingrese los datos del usuario</p>
    <form method="POST" action="alta.php">
      <p>Dni</p>
      <input type="text" class="field" name="dni" placeholder="Dni" pattern="^[0-9]{8}$" title="El DNI debe de tener 8 caracteres de longitud sin puntos" required>
      <p>Nombre</p>
      <input type="text" class="field" name="nombre" placeholder="Nombre" pattern="^[a-zA-Z][a-zA-Z]{3,20}$" title="El Nombre debe de tener entre 3 y 20 caracteres de longitud" required>
      <p>Apellido</p>
      <input type="text" class="field" name="apellido" placeholder="Apellido" pattern="^[a-zA-Z][a-zA-Z]{3,20}$" title="El Apellido debe de tener entre 3 y 20 caracteres de longitud" required><br/><br/>
      <p class="dda">
      <input type="submit" class="btn btn-green" name="submit" value="Dar de Alta">
      </p>
    </form>
      <!--
      <input type="submit" class="btn btn-green" name="submit" value="Volver al Menu">
      <a type="submit" class="btn btn-green" name="sumbit" href="home.php">Volver al Menu</a>
      <button type="submit" class="btn btn-green" name="button" formaction="home.php">Volver al Menu</button>
      -->
  </div>

<!--
    <h1></h1>
    <div class="container1">
      <div class="row header">
        <h1> ALTA DE ALUMNOS </h1>
        <h3>Ingrese los datos del alumno. </h3>
      </div>
    <div class="row body">
      <form action="#">
        <ul>
          <li>
            <p class="left">
              <label for="first_name">DNI</label>
                    <input type="text" name="dni" placeholder="DNI" pattern="^[0-9]{8}$" title="El DNI debe de tener 8 caracteres de longitud sin puntos" required>
            </p>
            <p class="pull-right">
              <label for="last_name">NOMBRE</label>
              <input type="text" name="nombre" placeholder="Nombre" pattern="^[a-zA-Z][a-zA-Z]{3,20}$" title="El Nombre debe de tener entre 3 y 20 caracteres de longitud" required>
            </p>
          </li>
          <li>
            <p class="pull-right">
              <label for="dni">APELLIDO</label>
            <input type="text" name="apellido" placeholder="Apellido" pattern="^[a-zA-Z][a-zA-Z]{3,20}$" title="El Apellido debe de tener entre 3 y 20 caracteres de longitud" required>
            </p>
          <li><div class="divider"></div></li>
          <li>
            <input type="submit" name="submit" value="Dar de Alta">
            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
          </li>
        </ul>
      </form>
-->
</body>

</html>
