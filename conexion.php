<?php

$host="localhost";
$db="dbclasepoo";
$user="root";
$password="";

$conexion = new PDO('mysql:host='.$host.';
dbname='.$db, 
$user,
$password);

if ($conexion =!null)
{
    echo "conexion exitosa ";
    

}
else {
    echo "fallo la conexion";
}


?>