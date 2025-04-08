<?php
$servidor   = "localhost:3306";
$usuario    = "root";
$contrasena = "";
$bd = "infocal";

// se crea la conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

// se valida la conexión

if ($conexion->connect_error) {

    die('Hubo un fallo en la conexión ' .$conexion->connect_error);
    
}else{
    echo "Conexion correcta";
}
?>