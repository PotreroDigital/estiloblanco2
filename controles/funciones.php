<?php

/*      function  whoiam()
      {
            $rol="admin";

              if ($rol=="admin"){
                menu_admin();
            } elseif ($rol=="secretario") {
                menu_secretario();
            } else {
                menu_user();
            }

          return;
      }
*/

      function  menu_admin()
      {  echo '<div id="header">
        	<div id="menu" class="container">
        		<ul>
        			<li class="current_page_item"><a href="home.php" accesskey="1" title="">Homepage</a></li>
        			<li><a href="productos.php" accesskey="1" title="">Productos</a></li>
        			<li><a href="#Marcas" accesskey="2" title="">Marcas</a></li>
        			<li><a href="login.php" accesskey="3" title="">log in</a></li>
            	<li><a href="abm/ingresar_alumno.php" accesskey="3" title="">alta</a></li>
        			<li><a href="abm/buscar_dni.html" accesskey="3" title="">B y M</a></li>
        		</ul>
        	</div>';
          return;
      }
      function  menu_secretario()
      {  echo '<div id="header">
        	<div id="menu" class="container">
        		<ul>
        			<li class="current_page_item"><a href="home.php" accesskey="1" title="">Homepage</a></li>
        			<li><a href="productos.php" accesskey="1" title="">Productos</a></li>
        			<li><a href="#Marcas" accesskey="2" title="">Marcas</a></li>
        			<li><a href="login.php" accesskey="3" title="">log in</a></li>
            	<li><a href="abm/ingresar_alumno.php" accesskey="3" title="">alta</a></li>
        		</ul>
        	</div>';
          return;
      }

      function  menu_user()
      {  echo '<div id="header">
        	<div id="menu" class="container">
        		<ul>
        			<li class="current_page_item"><a href="home.php" accesskey="1" title="">Homepage</a></li>
        			<li><a href="productos.php" accesskey="1" title="">Productos</a></li>
        			<li><a href="#Marcas" accesskey="2" title="">Marcas</a></li>
        			<li><a href="login.php" accesskey="3" title="">log in</a></li>
        		</ul>
        	</div>';
          return;

      }

 ?>
