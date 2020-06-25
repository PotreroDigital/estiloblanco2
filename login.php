<?php include 'controles/funciones.php' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EstiloBlanco</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Open+Sans:400,300,600,700,800" rel="stylesheet" />

  </head>
  <style >


  /*********************************************************************************/
  /* hoja mia                                                                */
  /*********************************************************************************/


  div.box{
    text-align: center;
  }
  h2 {
    text-align: center;
  }
  h3 {
    text-align: center;
  }
  ul{
    text-align: center;
  }
  #logo{
    text-align: center;
  }
  html, body
  {
    height: 100%;
  }

  body
  {
    background-color: #18A383
  /*
    background: url(images/bg04.jpg) ;
  */
  }
  p{
    font-size: large
  }

  h1, h2, h3
  {
    margin: 0;
    padding: 0;
    color: #333;
  }

  p, ol, ul
  {
    margin-top: 0;
  }

  ol, ul
  {
    padding: 0;
    list-style: none;
  }

  p
  {
    line-height: 180%;
  }

  strong
  {
    color: #525252;
  }

  a
  {
    color: #525252;
  }

  a:hover
  {
    text-decoration: none;
  }

  .container
  {
    margin: 0px auto;
    width: 1200px;
  }


  /*********************************************************************************/
  /* Header                                                                        */
  /*********************************************************************************/
  /* Con este le cambio el color al cuadro de menu*/
  #header
  {
    background: #76b59e;
    border-top: 1px solid #76b59e;
  }

  /*********************************************************************************/
  /* Logo                                                                          */
  /*********************************************************************************/

  #logo
  {
    padding: 4em 0em;
    text-transform: uppercase;
  }

  #logo h1
  {
    text-align: center;
    font-weight: 900;
    font-size: 2.5em;
  }

  #logo h1 a
  {
  }

  #logo span
  {
    padding: 0em 0em 0em 0.5em;
  }

  #logo h1:before
  {

  }

  #logo a
  {
    color: #78ccad;
  }


  /*********************************************************************************/
  /* Menu                                                                          */
  /*********************************************************************************/

  #menu ul
  {
    margin: 0;
    padding: 20px 0px 20px 0px;
    list-style: none;
    line-height: normal;
  }

  #menu li
  {
    display: inline-block;
  }

  #menu a
  {
    display: block;
    padding: 1em 2em;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 1em;
    font-weight: 700;
    color: #FFF;
  }

  #menu .current_page_item a
  {
    background: #78ccad;
    color: #FFF;
  }

  #menu a:hover
  {
    background: #78ccad;
    text-decoration: none;
    color: #FFF;
  }

  /*********************************************************************************/
  /* Featured                                                                      */
  /*********************************************************************************/

  #featured
  {
    overflow: hidden;
    padding-bottom: 6em;
    color: #6b6b6b;
  }

  #featured img
  {
    margin-bottom: 2em;
  }

  #featured .box
  {
    padding-bottom: 1.5em;
  }

  #featured .title
  {
    margin-bottom: 2em;
  }

  #featured .title h2
  {
    font-size: 2em;
    font-weight: 800;
    color: #333;
  }

  #featured .subtitle
  {
    padding-bottom: 1em;
    font-size: 1.3em;
    font-weight: 700;
    color: #333;
  }

  #featured #box1 {
    float: left;
    width: 282px;
    margin-right: 24px;
  }

  #featured #box2 {
    float: left;
    width: 282px;
    margin-right: 24px;
  }

  #featured #box3 {
    float: left;
    width: 282px;
  }

  #featured #box4 {
    float: right;
    width: 282px;
  }
  /* form                                                                   */

  @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
  body {
    background-color: #e6e6e6;
    font-size: 100%;
    font-family: 'Lato', sans-serif;
    font-weight: 400;
  }

  div, textarea, input {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .container1 {
    max-width: 900px;
    min-width: 650px;
    margin: 50px auto 0px;
    background-color: #fff;
    border: 1px solid #cfcfcf;
    border-bottom: 3px solid #ccc;
  }

  .row {
    width: 100%;
    margin: 0 0 1em 0;
    padding: 0 2.5em;
  }
  .row.header {
    padding: 1.5em 2.5em;
    border-bottom: 1px solid #ccc;
    background: url(https://images2.imgbox.com/a5/2e/m3lRbCCA_o.jpg) left -80px;
    color: #fff;
  }
  .row.body {
    padding: .5em 2.5em 1em;
  }

  .pull-right {
    float: right;
  }

  .pull-right2 {
    float: right;
  }

  h1 {
    text-align: center;
    color: #fff;
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    display: inline-block;
    font-weight: 100;
    font-size: 2.8125em;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    margin: 0 0 0.1em 0;
    padding: 0 0 0.4em 0;
  }

  h3 {
      color: #ffffff;
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    font-size: 1.25em;
    margin: 1em 0 0.4em 0;
  }

  .btn {
    font-size: 1.0625em;
    display: inline-block;
    padding: 0.74em 1.5em;
    margin: 1.5em 0 0;
    color: #fff;
    border-width: 0 0 0 0;
    border-bottom: 5px solid;
    text-transform: uppercase;
    background-color: #b3b3b3;
    border-bottom-color: #8c8c8c;
    font-family: 'Lato', sans-serif;
    font-weight: 300;
  }
  .btn:hover {
    background-color: #bfbfbf;
  }
  .btn.btn-submit {
    background-color: #4f6fad;
    border-bottom-color: #374d78;
  }
  .btn.btn-submit:hover {
    background-color: #5f7db6;
  }

  form {
    max-width: 100%;
    display: block;
  }
  form ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  form ul li {
    margin: 0 0 0.25em 0;
    clear: both;
    display: inline-block;
    width: 100%;
  }
  form ul li:last-child {
    margin: 0;
  }
  form ul li p {
    margin: 0;
    padding: 0;
    float: left;
  }
  form ul li p.right {
    float: right;
  }
  form ul li .divider {
    margin: 0.5em 0 0.5em 0;
    border: 0;
    height: 1px;
    width: 100%;
    display: block;
    background-color: #4f6fad;
    background-image: linear-gradient(to right, #ee9cb4, #4f6fad);
  }
  form ul li .req {
    color: #ee9cb4;
    float:left;
  }
  form label {
    display: block;
    margin: 0 0 0.5em 0;
    color: #4f6fad;
    font-size: 1em;
  }
  form input {
    margin: 0 0 0.5em 0;
    border: 1px solid #ccc;
    padding: 6px 10px;
    color: #555;
    font-size: 1em;
  }
  form textarea {
    border: 1px solid #ccc;
    padding: 6px 10px;
    width: 100%;
    color: #555;
  }
  form small {
    color: #4f6fad;
    margin: 0 0 0 0.5em;
  }

  @media only screen and (max-width: 480px) {
    .pull-right {
      float: none;
    }

    input {
      width: 100%;
    }

    label {
      width: 100%;
      display: inline-block;
      float: left;
      clear: both;
    }

    li, p {
      width: 100%;
    }

    input.btn {
      margin: 1.5em 0 0.5em;
    }

    h1 {
      font-size: 2.25em;
    }

    h3 {
      font-size: 1.125em;
    }

    li small {
      display: none;
    }
  }


  body{
      font-family: Arial; background-color: #18A383; font-size: 20px;
  }

  #header
  {
    background: #76b59e;
    border-top: 1px solid #76b59e;
  }

  #menu ul
  {
    margin: 0;
    padding: 20px 0px 20px 0px;
    list-style: none;
    line-height: normal;
  }

  #menu li
  {
    display: inline-block;
  }

  #menu a
  {
    display: block;
    padding: 1em 2em;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 1em;
    font-weight: 700;
    color: #FFF;
  }

  #menu .current_page_item a
  {
    background: #78ccad;
    color: #FFF;
  }

  #menu a:hover
  {
    background: #78ccad;
    text-decoration: none;
    color: #FFF;
    /*mio */
  }

  .fabri{

  }
  body{

    background-color: #18A383;

  }

  div{
    text-align: center;
    margin: 0 auto;

  }
  h1{
    text-align: center;
    margin: 0 auto;
  }
    form{
      border-radius: 20px;
      background-color: #e8e8e8;


    }


  </style>

  <body>
    <div class="fabri">

      <?php
          $rol="admin";

            if ($rol=="admin"){
              menu_admin();
          } elseif ($rol=="secretario") {
              menu_secretario();
          } else {
              menu_user();
          }
              ?>

    </div>
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
