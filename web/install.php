<?php
include_once("../app/Config.php");

$host=Config::$mvc_bd_hostname;
$user=Config::$mvc_bd_usuario;
$pass=Config::$mvc_bd_clave;

$conexion=mysqli_connect($host,$user,$pass) or die ("Imposible conectar");
if (mysqli_query($conexion,"CREATE DATABASE IF NOT EXISTS alimentos")) {
	echo "Se ha creado la base de datos";
} else {
	echo "Ya existia la base de datos<br>";
}
mysqli_select_db($conexion,"alimentos");
$alimentos="CREATE TABLE IF NOT EXISTS `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,0) NOT NULL,
  `proteina` decimal(10,0) NOT NULL,
  `hidratocarbono` decimal(10,0) NOT NULL,
  `fibra` decimal(10,0) NOT NULL,
  `grasatotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
";


if (mysqli_query($conexion,$alimentos)) {
	echo "Se ha creado la tabla alimentos para la aplicación<br>";
} else {
	echo "Ya existia la tabla alimentos";
}


?>
