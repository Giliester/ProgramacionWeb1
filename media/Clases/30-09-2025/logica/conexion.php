<?php
// Almacenar .variables donde se tiene informacion de la base de datos y el servidor
//Configuracion XAMP
/*
    $host = '127.0.0.1:3306';
    $host = 'localhost';
    $host = '127.0.0.1';
*/
$host = 'sql309.infinityfree.com';
$user = 'if0_40222266';
$pass = 'G6gFo61pbwGjYv';
$dbName = 'if0_40222266_mysql';

$conexion = new mysqli($host,$user,$pass,$dbName);

if($conexion -> connect_error){
    die('Error en la conexion a la DB :( : '.$conexion -> connct_error);
}else{
    echo "Conexion realizada";
}
?>