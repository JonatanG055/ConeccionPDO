<?php
include_once'conexion1.php';
$conectar= new ConexionPDO($host,$db,$user,$password);
$conectar->conectar();
echo"<br><br>";

$conectar->desconectar();

?>