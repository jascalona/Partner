<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("loaction: ./intranet.php");
} else {
    if (
        (time() - $_SESSION['time']) >
        40
    ) {
        header("location: ./intranet.php");
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./IMG/x.png" />
    <title>Learning-Library-RAPs</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/responsive.css">
    <link rel="stylesheet" href="./CSS/cod_fail.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!--STYLE ICON-->


</head>

<body>
    <header>
        <div class="logo">
            <img src="./IMG/xdv.png" alt="" />
        </div>

        <input type="checkbox" id="check" />
        <label style="float: right" for="check" class="checkbtn">
            <i class="bx bx-menu" undefined></i>
        </label>

        <ul>
            <li><a href="./URLs/config?URL1=Learning?">Inicio</a></li>
            <li><a href="./URLs/config?URL2=portal?">Portal de Aprendizaje</a></li>
            <li><a href="./URLs/config?URL3=close?">Cerrar Sesion</a></li>
        </ul>
    </header>


    <div class="container-header-library">
        <h6 clas="title">Library RAPs</h6>
        <p><small>ST Lightweight Knowledge Library</small></p>

        <div class="icon-item">
            <button type="button" class="btn btn-secondary"><a href="./URLs/config?URL5=Library?">Library RAPs <i
                        class='bx bxs-book' style='color:#f3f3f3f3'></i></a></button>
            <button type="button" class="btn btn-secondary"><a href="./URLs/config?URL6=partList">Parts List <i
                        class='bx bxs-cog' style='color:#f3f3f3f3'></i></small></a></button>
        </div>
    </div>

    <!--Boton flotante modelos-->
    <div class="container-btn">

        <input type="checkbox" id="btn-mas">

        <div class="modelos">
            <button name="b8155" type="" value="cod_fail_b8155" id="device" onclick="ab8155();"><a
                    href="./URLs/config?URL7=RAPs1?">B81</a></button>
            <button name="b8255" type="" value="cod_fail_b8255" id="device" onclick="ab8255();"><a
                    href="./URLs/config?URL7=RAPs1?">B82</a></button>
        </div>

        <div class="btn-mas">
            <label for="btn-mas"><i class='bx bx-plus' style='color:#9fa3a9'></i></label>
        </div>

    </div>
    <!--Boton flotante modelos-->

    <!--Section Public-1-->
    <section class="fondo-public-1" id="section-1">
        <div class="public-1" id="public">
            <article class="item-public">
                <div class="contenido" id="item_1">
                    <small><b>Library RAPs</b></small>
                    <div class="contenct">
                        <img style="width: 400px; margin-top: -25px;" src="./IMG/animation/nube.gif" alt="#">
                        <p>
                            The Service Library platform does more than streamline the delivery and management of your
                            content—users have complete control over how their content is used. Users can annotate,
                            highlight, filter, and interact with their content across all industry-standard devices and
                            operating systems at unprecedented speeds. Service Library is the interactive, flexible,
                            multi-device content delivery platform you’ve been looking for. Whether your content user is
                            annotating test procedures or breaking down hardware manuals, Service Library gives them the
                            capability they’ve been looking for.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!--Section Public-1-->
    <br>


    <main>



    </main>



    <footer>
        <p class="m-0">Service Library
            2010-2024 &copy; Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small>
        </p>
    </footer>



    <!--SCRIPT-->
    <script src="./JS/Bootstrap.js"></script>
    <script src="./JS/search.js"></script>
    <script src="./JS/search_82.js"></script>
    <script src="./JS/btn-show-RAPs.js"></script>
    <!--SCRIPT-->