<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "gxdeve_apps";
$port = "3306";

//Cretare Connection
$conexion = mysqli_connect($server, $user, $password, $db);

//Check Connection
if (!$conexion) {
    die ("Conexion Fallida: " . mysqli_connect_error());
} else {
  //  echo '<script>alert("Conexion Exitosa")</script>';
}

