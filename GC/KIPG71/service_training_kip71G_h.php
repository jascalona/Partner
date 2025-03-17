<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("location:");
} else {
    if ((time() - $_SESSION["time"]) > 1800) {
        header("location: ../close.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/x.png">
    <title>XDV ELearning KIP G71</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="./CSS_SERVICE/style_service.css">
    <link rel="stylesheet" href="./CSS_SERVICE/Bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLE ICON-->

    <!--SCRIPT-->
    <script src="./JS_training/Bootstrap.js"></script>
    <script src="./JS_training/btn_leccion_h.js"></script>
    <script src="./JS_training/file_animations.js"></script>
    <!--SCRIPT-->


</head>

<body>

    <header>
        <p>Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al Curso de soporte para KIP 71G
        </p>
    </header>


    <main>

        <div class="modal-menu">
            <button style="border: solid 1px #ffffff71;" class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                Main Menu
            </button>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">E-Learning KIP 71G</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <!--#01-->
                    <details>
                        <summary>Desembalaje <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_1();">Desembalaje</a>
                            </small></p>
                    </details>
                    <!--#01-->

                    <!--#02-->
                    <details>
                        <summary>Roll Off <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_2();">Roll Off</a>
                            </small></p>
                    </details>
                    <!--#02-->

                    <!--#03-->
                    <details>
                        <summary>Machine Setup<i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_3();">Machine Setup</a>
                            </small></p>
                    </details>
                    <!--#03-->

                    <!--#04-->
                    <details>
                        <summary>Cutter Removal <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_4();">Cutter Removal</a>
                            </small></p>
                    </details>
                    <!--#04-->


                    <!--#05-->
                    <details>
                        <summary>Develop Unit <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_5();">Develop Unit</a>
                            </small></p>
                    </details>
                    <!--#05-->

                    <!--#05-->
                    <details>
                        <summary>Drum Removal <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_6();">Drum Removal</a>
                            </small></p>
                    </details>
                    <!--#05-->

                    <!--#05-->
                    <details>
                        <summary>Fuser <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_7();">Fuser</a>
                            </small></p>
                    </details>
                    <!--#05-->

                    <!--#05-->
                    <details>
                        <summary>Image Corona <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_8();">Image Corona</a>
                            </small></p>
                    </details>
                    <!--#05-->

                    <!--#05-->
                    <details>
                        <summary>LED Head Removal <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_9();">LED Head Removal</a>
                            </small></p>
                    </details>
                    <!--#05-->

                    <!--#05-->
                    <details>
                        <summary>Transfer-Separation <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                        </summary>
                        <p><small>
                                <a id="boton" onclick="ir_item_10();">Transfer-Separation</a>
                            </small></p>
                    </details>
                    <!--#05-->

                </div>
            </div>
        </div>


        <div class="container-document">

            <!--Item 01-->
            <article class="item-card">
                <div class="contenido" id="item_1">
                    <h6>Capacitación Para KIP 71G</h6>
                    <div class="contenct">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/wVyvmL_8Fis?si=nUctc8dMMC2qDZhI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>

                        <div class="btn-navigation">
                            <button id="boton" onclick="ir_item_2();"><i class='bx bxs-right-arrow'></i></button>
                        </div>
                    </div>

            </article>
            <!--Item 01-->


            <!--Item 02-->
            <style>
                #item_2 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_2">
                    <h6>Desembalaje del Plotter KIP 71G Series</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Dzdeo2kmVMw?si=mF74w1ogW5n7_J2y" title="YouTube video player" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_1();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_3();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 02-->


            <!--Instalación y Conexiones-->
            <!--Item 03-->
            <style>
                #item_3 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_3">
                    <h6>Roll Off</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dPgcRiXtoro?si=pTARucSmFghgiylx" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_2();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_4();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 03-->


            <!--Item 04-->
            <style>
                #item_4 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_4">
                    <h6>Configuración de la Maquina</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/27af0162AgY?si=1Sp8RakJNlEX_Duj" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_3();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_5();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 04-->


            <!--Item 05-->
            <style>
                #item_5 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_5">
                    <h6>Cutter Removal</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SZKncXz_X0w?si=BbSVkRghlQSGMdE_" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_4();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_6();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 05-->


            <!--Item 06-->
            <style>
                #item_6 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_6">
                    <h6>Developer Unit</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WZDsFNx5dvE?si=qQwpG8NH_efOL9px" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_5();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_7();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 06-->


            <!--Item 07-->
            <style>
                #item_7 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_7">
                    <h6>Drum Removal Install</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/l4BKHyaqD6Q?si=jf2sUBBbUHUhcUfl" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_6();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_8();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 07-->


            <!--Item 08-->
            <style>
                #item_8 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_8">
                    <h6>Fuser</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OWynRNpC7tE?si=D4nnvULVzV4K-Y62" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_7();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_9();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 08-->

            <!--Item 09-->
            <style>
                #item_9 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_9">
                    <h6>LED Head Removal</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XrYvF3TX_Lo?si=iX22EGl6NOO2FNWA" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_8();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_10();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 09-->

            <!--Item 10-->
            <style>
                #item_10 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_10">
                    <h6>Transfer Separation</h6>
                    <div class="contenct">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/goBymh2RvyU?si=J04sp4Jc0nfRvlsX" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>

                    </div>

                    <div class="btn-navigation">
                        <button id="boton" onclick="ir_item_9();"><i class='bx bxs-left-arrow'></i></button>
                        <button id="boton" onclick="ir_item_11();"><i class='bx bxs-right-arrow'></i></button>
                    </div>
                </div>
            </article>
            <!--Item 10-->

            <!--Item 11-->
            <style>
                #item_11 {
                    display: none;
                }
            </style>

            <article class="item-card">
                <div class="contenido" id="item_11">
                    <h6>Felicidades <?php echo $_SESSION['name'] ?>, has culminado con exito la formación de Servicio
                        <div class="contenct">
                            <img src="./images/siguiente2.jpg" alt="">

                            <p>
                                De Click en "Ir a la Evaluación" para comenzar la evaluación diagnostica
                            </p>

                            <a href="">Ir a la Evaluación</a>
                            <br>
                            <a href="../KIPG71.php">Volver a los detalles de Inscripción</a>

                        </div>

                        <div class="btn-navigation">
                            <button id="boton" onclick="ir_item_10();"><i class='bx bxs-left-arrow'></i></button>
                        </div>

                </div>
            </article>
            <!--Item 11-->



        </div>

    </main>



</body>

</html>