<?php
$host = 'sql309.infinityfree.com';
$user = 'if0_40222266';  // Cambia esto si tu usuario de MySQL es diferente
$password = 'G6gFo61pbwGjYv';  // Deja vacío si no tienes contraseña configurada
$dbname = 'if0_40222266_mysql';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
