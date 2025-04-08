<?php

include_once('conexion.php');
$id = $nombre = $apellidos = "";

$sql = "UPDATE Empleados FROM * = ?";

if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro actualizado correctamente";
} else {

    $conexion->error;
};

$conexion->close();