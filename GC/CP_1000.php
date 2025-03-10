<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("loaction: ./intranet.php");
} else {
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ../intranet.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../IMG/x.png">
    <title>Enrollment Details</title>

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
        <img src="../IMG/xdv.png" alt="">
        </div>

        <div class=""></div>
        <ul>
        
            <li><a href="../URLs/config?URL2=portal?"><i style="font-size: 30px; padding: 10px;" class='bx bx-reset'></i></a></li>

            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../URLs/config?URL3=close?">Cerrar Sesion</a></li>
                </ul>
            </div>

        </ul>
    </header>


    <div class="container-fondo">
        <div class="fondo"></div>
        <div class="text">
            <p>Entrenamiento de Color-Press-1000</p>
    </div>


        <main>

            <!--Reseña del status fondo-->


            <!--Servicio software-->
            <div class="fondo-status">
          
                <!--Servicio tecnico-->
                <div class="text-final">
                    <small><b><i>Hardware</i></b></small>
                    <p><small>Este curso a su propio ritmo proporciona información relacionada con el servicio técnico para Color-Press-1000</small></p>
                    <small>Seleccione el botón "Ver" para comenzar su aprendizaje.</small>

                    <div class="btn-ver">
                        <button class="btn btn-dark"><a href="https://logon.xrxgsn.com/gsnlock/getgsnlock.asp?www.xrxgsn.com:443/secure/main.pl" target="_blank">Ver</a></button>
                    </div>
                </div>

                <div class="text-final">
                    <div class="linear"></div>

                    <div class="container-evaluation">
                        <p>Evaluación sobre el Curso Servicio Técnico Color-Press-1000</p>
                        <small>Una Vez visto todo el contenido del Curso deberea realizar la evaluación diagnostica</small>
                        <br><br>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScO-nZc5G6sn10ml1zx8At70TaMLJ5dYF54FsOFReRPDJC-4w/viewform?usp=header">Ir a la Evaluación</a>
                    </div>
                </div>
    
                <!--Servicio tecnico-->


            </div>

            <!--Reseña del status fondo-->
        </main>

        <!--Cierre de class arbol de aprendizaje-->
    </div>
    <!--Cierre de class arbol de aprendizaje-->


        <!--START FOOTER-
        <footer>
            <div class="footer">
                <a href="../portal.php"><i class='bx bx-reset'></i></a>
            </div>
        </footer>
    START FOOTER-->



</body>
</html>