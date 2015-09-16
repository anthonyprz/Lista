<?php

$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];



$conexion = mysql_connect("localhost","root", "zubiri") or die ("problemas con el servidor");
mysql_select_db("usuarios", $conexion) or die ("error al tratar de conectar");

mysql_query("INSERT INTO id (user, pass) VALUES('$usuario','$pass')");

echo "usuario $usuario añadido";



//echo "guardado el usuario: $usuario' y contraseña '$pass";
//$standar =  mysql_query("INSERT INTO registro VALUES('','$user','','$password','$favorito','$email','$pais')");
//$standar = mysql_query("select * from persona where usuario ='" .$usuario. "'and pass = '" .$pass."'", $conexion);
//$standar = mysql_query("insert into persona if not exists (usuario, pass) values '".$usuario'","'"");
//$admin = mysql_query("select * from usuario where login ='" .$usuario. "'and passadmin = '" .$pass."'", $conexion);

/*
if ($row = mysql_fetch_array($standar)){

	echo "hola $usuario";
}


else if ($row = mysql_fetch_array($admin)){
	echo "hola $usuario";
	
}

else {
	echo "error";
*/

/*

	if ($row = mysql_fetch_array($standar)){

	echo "hola $nombre";
}


else if ($row = mysql_fetch_array($admin)){
	echo "hola $nombre";
	
}
else {
	echo "error";

	
}*/
	
?>