<?php
$host = 'sql309.infinityfree.com';
$user = 'if0_40222266';
$pass = 'G6gFo61pbwGjYv';
$dbName = 'if0_40222266_mysql';

$conn = new mysqli( $host,$user,$pass,$dbName);

if( $conn -> connect_error){
    die('Erro en la conexion de mi db :( : '.$conn->connect_error);
}else{
    echo "Conexion con exito :3";
}
    
?>