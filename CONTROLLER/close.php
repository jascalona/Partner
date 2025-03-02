<?php

include "./CONTROLLER/conexion.php";
include "./URLs/config.php";

$ruta0 = base64_encode('Location: ../intranet');
session_start();
session_destroy();
header("location: ../intranet?" . $ruta0);

?>