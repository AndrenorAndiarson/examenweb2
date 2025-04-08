<?php

include_once('conexion.php');

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    
}

$sql = "INSERT INTO Empleados (Nombre,Apellidos,email,direccion,telefono) 
VALUES ('$nombre','$apellidos','$email','$direccion','$telefono')";




if ($conexion->query($sql) === TRUE) {
header("Location: index.php");
exit();
    echo "Registro ingresado correctamente.";
} else {

    echo $conexion->error;
}


$conexion->close();
