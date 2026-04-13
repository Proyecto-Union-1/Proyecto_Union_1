<?php
// Configuración de conexión
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'data_vargas';

$mysqli = new mysqli($host, $user, $pass, $db);

// Verificar si hay errores de conexión - ...
if ($mysqli->connect_errno) {
    die("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

/**
 * AJUSTE DE CARACTERES (UTF-8)
 * Esto es vital para que las tildes y eñes se guarden y muestren 
 * correctamente en tu tabla de producción.
 */
if (!$mysqli->set_charset("utf8mb4")) {
    // Si falla utf8mb4 (el más moderno), intentamos con utf8
    $mysqli->set_charset("utf8");
}

// Opcional: Para depuración en desarrollo, puedes descomentar la siguiente línea
// echo "Conexión exitosa a: " . $mysqli->host_info;
?>