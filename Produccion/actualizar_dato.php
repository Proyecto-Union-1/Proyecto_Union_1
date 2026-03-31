<?php
include 'conexion.php';

// Desactivar impresión de errores de PHP en la respuesta para no ensuciar el "ok"
error_reporting(0); 

if (isset($_POST['id']) && isset($_POST['columna'])) {
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $columna = mysqli_real_escape_string($mysqli, $_POST['columna']);
    $valor = mysqli_real_escape_string($mysqli, $_POST['valor']);

    $sql = "UPDATE data_diario SET $columna = '$valor' WHERE id_Diario = '$id'";

    if (mysqli_query($mysqli, $sql)) {
        echo "ok"; // Esto es lo único que debe recibir JS
    } else {
        echo "error_sql";
    }
}
exit; // Detiene cualquier salida adicional de otros archivos incluidos
?>