<?php
$nombre = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];


$conexion = mysql_connect("localhost","root", "zubiri") or die ("problemas con el servidor");
mysql_select_db("usuarios", $conexion) or die ("error al tratar de conectar");


//$standar = mysql_query("select * from persona where nombre ='" .$nombre. "'and pass = '" .$pass."'", $conexion);
$standar =mysql_query("select * from id where user = '".$nombre."' and pass= '".$pass."'", $conexion );


$usuario =mysql_query("select nombre from id where user = '".$nombre."' and pass= '".$pass."'", $conexion );

//$standar = mysql_query("insert into persona if not exists (nombre, pass) values '".$nombre'","'"");
//$admin = mysql_query("select * from usuario where login ='" .$nombre. "'and passadmin = '" .$pass."'", $conexion);

$elusuario=mysql_fetch_row($usuario);

if ($row = mysql_fetch_array($standar)){

	//echo "hola $usuario";
	echo"Buenos dias ".$elusuario[0]." ";
}


else if ($row = mysql_fetch_array($admin)){
	echo "hola $nombre";
	
}
else {
	echo "error";
}

?>