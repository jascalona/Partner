<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("loaction: ./intranet.php");
} else {
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./intranet.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../IMG/x.png">
    <title>VersaLink B405</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="../CSS/my_learning.css">
    <link rel="stylesheet" href="../CSS/FRAMEWORK/Bootstrap.css">
    <link rel="stylesheet" href="../CSS/GC.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLE ICON-->

    <!--SCRIPT-->
    <script src="../JS/Bootstrap.js"></script>
    <!--SCRIPT-->

</head>

<body style="background: #d0d0d0;">


    <header style="background: rgb(98, 3, 16);" class="header-menu">

        <div class="logo">
            <img src="../IMG/x.png" alt="">
            <div class="line">Portal de Aprendizaje</div>
        </div>

        <div class=""></div>
        <ul>
            <li><a href=""><i class='bx bxs-user-circle'></i></a></li>

            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                </ul>
            </div>

        </ul>
    </header>

    
    <div class="container-fondo">
        <div class="fondo"></div>
        <div class="text">
            <p>Documentación VersaLink B405</p>
        </div>
    

        <main>

        <!--Reseña del status fondo-->
        <div class="fondo-status">
            <p><small>Este curso a su propio ritmo proporciona información relacionada con el servicio con respecto al Xerox Color C75-J75.</small></p>
            <small>Seleccione el botón "Ver" para comenzar su aprendizaje.</small>



            <div class="btn-ver">
                <button class="btn btn-dark"><a href="./VL_DOC/service_training.php" target="_blank">Ver</a></button>
            </div>


            <div class="text-final">
                <div class="linear"></div>

                <div class="container-evaluation">
                    <p>Evaluacion sobre el Curso</p>
                    <small>De click en "Comenzar Evaluacion" para ir a la evaluacion</small>
                    <br>
                    <a href="">Comenzar Evaluacion</a>
                </div>
            </div>


            <div class="enlaces">
                <p>información Adicional</p>
                    <li><a href="https://www.xerox.com/vids/VersaLinkB405_US/index.htm">Demo Virtual</a></li>
                    <li><a href="./VL_DOC/installation_guide.pdf">Guia de Instalación</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
            </div>

        </div>

        <!--Reseña del status fondo-->
    </main>

        <!--Cierre de class arbol de aprendizaje-->
    </div>
    <!--Cierre de class arbol de aprendizaje-->