<?php 
    $conexion = new mysqli('localhost','root','','gdlwebcamp');
    if($conexion->connect_error){
        echo $error -> $conexion->connect_error; 
    }

?>