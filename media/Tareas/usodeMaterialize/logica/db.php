<?php
$host = 'sql309.infinityfree.com';
$user = 'if0_40222266';
$pass = 'G6gFo61pbwGjYv';
$dbName = 'if0_40222266_mysql';

$conn = new mysqli($host, $user, $pass, $dbName);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
