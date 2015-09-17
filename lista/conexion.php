<?php
$nombre = $_REQUEST['nombre'];
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];
$pass2 = $_REQUEST['pass2'];

//realizar la conexion con la base de datos
$conexion = mysql_connect("localhost","root", "zubiri") or die ("problemas con el servidor");
mysql_select_db("usuarios", $conexion) or die ("error al tratar de conectar");

//insertar los datos
	if ($pass == $pass2) {
		mysql_query("INSERT INTO id (nombre, user, pass) VALUES('$nombre','$usuario','$pass')");

		echo "el usuario $nombre ha sido añadido a la base de datos correctamente";
		echo "<br/>";
		echo "este es su id: $usuario";
	}
	else{
		echo "error al añadir usuario";
		echo "<br/>";
		echo "las contraseñas no coinciden";
	}


	
?>