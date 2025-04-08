<?php

include_once('conexion.php');

// eliminar registros
if(isset($_GET['id']) ){
    $id = $_GET['id'];
}  

$sql = "DELETE FROM Empleados WHERE id =$id";

// validación proceso

if ($conexion->query($sql) === TRUE) {

    echo "Eliminación de registro exitosa";
} else {

    $conexion->error;
}


$conexion->close();
?>