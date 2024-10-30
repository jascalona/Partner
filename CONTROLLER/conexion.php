<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'gxdeve_apps';
$port = '3306';

//Create_connection
$conexion = mysqli_connect($server,$user,$password,$db,$port);

//Check connection
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
} else {
  //  echo '<script>alert("Conexion Exitosa!")</script>';
}

?>