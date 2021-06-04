<?php
   $servidor = "localhost";
   $usuario = "root";
   $clave = "";
   $baseDeDatos = "formulario";

   $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
   if (!$enlace) {
     echo "Error en la conexión con el servidor";
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
    
        <style>
          <style>
      *{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body{
  background: #c8fdcc;
}

header{
  width: 100%;
}

.navegacion{
  width: 1000px;
  margin: 30px auto;
  background: #fff;
}

.navegacion ul{
  list-style: none;
}

.menu > li{
  position: relative;
  display: inline-block;
}

.menu > li > a{
  display: block;
  padding: 15px 20px;
  color: #;
  font-family: 'Open sans';
  text-decoration: none;
}

.menu li a:hover{
  color: #CE7D35;
  transition: all .3s;
}

/* Submenu*/

.submenu{
  position: absolute;
  background: #333333;
  width: 120%;
  visibility: hidden;
  opacity: 0;
  transition: opacity 1.5s;
}

.submenu li a{
  display: block;
  padding: 15px;
  color: #fff;
  font-family: 'Open sans';
  text-decoration: none;
}

.menu li:hover .submenu{
  visibility: visible;
  opacity: 1;
}
   *{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

body{
    background: aqua;
    font-family: sans-serif;
    font-size: 18px;
}

.contenedor{
    width: 500px;
    margin: 40px;
}

.contenedor .formulario .contenedor-inputs{
    padding: 20px;
    background: #fff;
    border-radius: 6px 6px 0 0;
}

.contenedor .formulario input[type="text"],
.contenedor .formulario input[type="email"],
.contenedor .formulario input[type="password"]{
    display: block;
    width: 100%;
    margin-bottom: 20px;
    padding:  15px 10px;
    border: none;
    border-bottom: 2px solid #ccc;
    font-family: sans-serif;
    font-size: 18px;
}

.contenedor .formulario input[type="text"]:focus,
.contenedor .formulario input[type="email"]:focus,
.contenedor .formulario input[type="password"]:focus{
     border-bottom: 2px solid #246eb9;
}

.contenedor .formulario .terminos{
    text-align: center;
    color: #424242;
}

.contenedor .formulario label{
    margin-left: 10px;
}

.contenedor .formulario .error{
    display: none;
    margin-top: 20px;
    border-radius: 3px;
    background: #ce1818;
    color: #fff;
    padding: 15px 10px;
    padding-left: 40px;
}

.contenedor .formulario .btn{
    width: 100%;
    text-align: center;
    background: #246eb9;
    color: #fff;
    border: none;
    display: block;
    padding: 15px 10px;
    cursor: pointer;
    border-radius: 0 0 6px 6px;
    font-family: sans-serif;
    font-size: 18px;
}

.contenedor .formulario .btn:hover{
    background: #4357ad;
}

.contenedor .tabla{
    margin: 50px 0 0 0;
    width: 1000px;
    height: auto;
    padding: 20px;
    background: #fff;
    border-radius: 6px 6px 6px 6px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#dadedc;}

        </style>
    </head>
    <body><a href="img/fondo.jpg"></a>
<header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="index.html" name="inicio">Inicio</a></li>
        <li><a href="formulario.php" name="inicio">Registrate</a></li>
        <li><a name="servicios">Clasificaci&oacuten</a>

          <ul class="submenu">
            <li><a href="servicio1.html" name="servicio1">Carn&iacutevoros estrictos</a></li>
            <li><a href="servicio2.html" name="servicio2">Pisc&iacutevoros</a></li>
            <li><a href="servicio3.html" name="servicio3">Insect&iacutevoros</a></li>
            <li><a href="servicio4.html" name="servicio4">Hipercarn&iacutevoros</a></li>
            <li><a href="servicio5.html" name="servicio5">Mesocarn&iacutevoros</a></li>
            <li><a href="servicio6.html" name="servicio6">Hipocarn&iacutevoros</a></li>

          </ul>
        </li>
        <li><a href="contacto.html" name="contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <div class="contenedor" align="center">
    <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
      <div class="contenedor-inputs" align="center">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellidop" placeholder="Apellido paterno">
        <input type="text" name="apellidom" placeholder="Apellido materno">
        <input type="text" name="correo" placeholder="Correo">
        <input type="password" name="contraseña" placeholder="Contraseña">

        <div class="terminos" align="center">
          <input type="checkbox" name="terminos" id="terminos">
          <label for="terminos">Acepto Terminos y Condiciones</label>
        </div>

        <ul class="error" id="error"></ul>
      </div>

      <input type="submit" class="btn" name="registrarse" value="Registrate" align="center">
    </form>
    <div class="tabla">
      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido paterno</th>
          <th>Apellido materno</th>
          <th>Contraseña</th>
          <th>Correo</th>
        </tr>
    
            
           <?php
           $consulta = "SELECT * FROM datos";
           $ejecutarConsulta = mysqli_query($enlace, $consulta);
           $verFilas = mysqli_num_rows($ejecutarConsulta);
           $fila = mysqli_fetch_array($ejecutarConsulta);

           if (!$ejecutarConsulta) {
             echo "Error en la consulta";
           } else{
            if ($verFilas<1) {
              echo "<tr><td>Sin registros</td></tr>";
            } else{
              for ($i=0; $i <= $fila ; $i++) { 
              echo '<tr>
                    <td>'.$fila[5].'</td>
                    <td>'.$fila[0].'</td>
                    <td>'.$fila[2].'</td>
                    <td>'.$fila[1].'</td>
                    <td>'.$fila[4].'</td>
                    <td>'.$fila[3].'</td>

                    </tr>';
                     $fila = mysqli_fetch_array($ejecutarConsulta);

              }
            }
           }
           ?> 
        
        
      </table>
    </div>
  </div>
  <script src="js/formulario.js"></script>
</body>
</html>

<?php
   if (isset($_POST['registrarse'])) {
     $nombre = $_POST["nombre"];
     $apellidop =  $_POST["apellidop"];
     $apellidom = $_POST["apellidom"];
     $correo =  $_POST["correo"];
     $contraseña =  $_POST["contraseña"];
     $id = rand(1,99);

     $insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                '$apellidom',
                                                '$apellidop',
                                                '$correo',
                                                '$contraseña',
                                                '$id')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    
    if (!$ejecutarInsertar) {
      echo "Error en linea de sql";
     }                                             
   }
?>
