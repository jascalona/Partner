<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("loaction: ../");
} else {
    if (
        (time() - $_SESSION['time']) >
        40
    ) {
        header("location: ../URLs/config?URL0=intranet?");
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../IMG/x.png" />
    <title>RAPs-B8255</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/cod_fail.css">
    <link rel="stylesheet" href="../CSS/FRAMEWORK/Bootstrap.css" />
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
            <li><a href="../URLs/config?URL1=Learning?">Inicio</a></li>
            <li><a href="../URLs/config?URL2=portal?">Portal de Aprendizaje</a></li>
            <li><a href="../URLs/config?URL3=close?">Cerrar Sesion</a></li>
        </ul>
    </header>


    <div class="container-header-library">
        <h6 clas="title">Library RAPs</h6>
        <p><small>ST Lightweight Knowledge Library</small></p>

        <div class="icon-item">
            <button type="button" class="btn btn-secondary"><a href="../URLs/config?URL5=Library?">Library RAPs <i
                        class='bx bxs-book' style='color:#f3f3f3f3'></i></a></button>
            <button type="button" class="btn btn-secondary"><a href="../URLs/config?URL6=partList">Parts List <i
                        class='bx bxs-cog' style='color:#f3f3f3f3'></i></small></a></button>
        </div>
    </div>

    <!--Boton flotante modelos-->
    <div class="container-btn">

        <input type="checkbox" id="btn-mas">

    
        <div class="modelos">
            <button name="b8155" type="" value="cod_fail_b8155" id="device" onclick="ab8155();"><a
                    href="../URLs/config?URL7=RAPs1?">B81</a></button>
            <button name="b8255" type="" value="cod_fail_b8255" id="device" onclick="ab8255();"><a
                    href="../URLs/config?URL8=RAPs2?">B82</a></button>
        </div>

        <div class="btn-mas">
            <label for="btn-mas"><i class='bx bx-plus' style='color:#9fa3a9'></i></label>
        </div>

    </div>
    <!--Boton flotante modelos-->

    <br>


    <main>

        <!-- start search filter -->
        <div class="search" data-aos="fade-up" data-aos-duration="1000" id="search">
            <div class="container">
                <form class="">
                    <input class="form-control me-2 light-table-filter" data-table="table" type="text"
                        placeholder="Search...">
                </form>
            </div>
        </div>
        <!-- end search filter -->



        <?php include '../CONTROLLER/conexion.php' ?>

        <!--Contador row-->
        <?php
        $row = mysqli_query($conexion, "SELECT *FROM cod_fail_b8255;");
        $num_rows = mysqli_num_rows($row);
        ?>


        <!--Vistas para B8155-->
        <div class="contador" id="cont-b8155">
            <p class="text-end">results (<b><?php echo $num_rows; ?></b>)</p>
        </div>
        <!--Contador row-->


        <!--container-table-desktop-->
        <div class="container-table-desktop" id="raps-b8155">
            <table class="table table table-hover">

                <thead class="table">
                    <tr>
                        <th style="color:  rgb(95, 95, 95);" scope="col">Indicador de Status RAPs (B8255)</th>
                        <th style="color:  rgb(95, 95, 95);" scope="col">Chain</th>
                        <th style="color:  rgb(95, 95, 95);" scope="col">Solucion</th>
                    </tr>
                </thead>


                <!--Sentencia de seleccion-->
                <?php

                $sql = $conexion->query('SELECT *FROM cod_fail_b8255');
                while ($datos = $sql->fetch_object()) {
                    ?>
                    <!--Sentencia de seleccion-->


                    <tbody>
                        <tr>
                            <td style="width: 40%;" scope="row"><?= $datos->status_desc ?></th>
                            <td scope="row"><?= $datos->chain ?></th>

                            <td>
                                <!--Ventana description-->
                                <div class="container-modal-desc">


                                    <div class="chain-nota">
                                        <h6>How to deal with the error <i
                                                style="color: red;"><?php echo $datos->chain ?></i>
                                        </h6>
                                        <p><small>
                                                <?php echo "Chain " . $datos->nota ?>
                                            </small></p>
                                    </div>

                                    <div class="btn-calification">
                                        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight?id=<?= $datos->id ?>"
                                            aria-controls="offcanvasRight">
                                            <i class='bx bxs-comment-detail' style='color:#f3f3f3f3'></i>
                                        </button>

                                        <div class="offcanvas offcanvas-end" tabindex="-1"
                                            id="offcanvasRight?id=<?= $datos->id ?>" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 style="font-size: 13px; color: brown;" class="offcanvas-title"
                                                    id="offcanvasRightLabel">
                                                    <?= $datos->status_desc ?>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">

                                                <p class="nota"><mark>
                                                        <?php echo "Chain: " . nl2br($datos->nota); ?>
                                                    </mark></p>

                                                <br>

                                                <div class="procedimeiento_1">
                                                    <p>
                                                        <strong>Procedimiento:</strong>
                                                        <br>
                                                    </p>
                                                </div>


                                                <!--Preguntas Frecuentes-->
                                                <div class="container-procedure">
                                                    <section data-aos="fade-up" data-aos-duration="1500">

                                                        <!--#01-->
                                                        <details>
                                                            <summary>Procedimiento #1 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_1 ?? 'No procedure #1 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#01-->

                                                        <!--#02-->
                                                        <details>
                                                            <summary>Procedimiento #2 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_2 ?? 'No procedure #2 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#02-->

                                                        <!--#03-->
                                                        <details>
                                                            <summary>Procedimiento #3 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_3 ?? 'No procedure #3 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#03-->

                                                        <!--#04-->
                                                        <details>
                                                            <summary>Procedimiento #4 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_4 ?? 'No procedure #4 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#04-->

                                                        <!--#05-->
                                                        <details>
                                                            <summary>Procedimiento #5 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_5 ?? 'No procedure #5 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#05-->

                                                        <!--#06-->
                                                        <details>
                                                            <summary>Procedimiento #6 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_6 ?? 'No procedure #6 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#06-->

                                                        <!--#07-->
                                                        <details>
                                                            <summary>Procedimiento #7 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_7 ?? 'No procedure #7 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#7-->

                                                        <!--#08-->
                                                        <details>
                                                            <summary>Procedimiento #8 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_8 ?? 'No procedure #8 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#8-->

                                                        <!--#09-->
                                                        <details>
                                                            <summary>Procedimiento #9 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_9 ?? 'No procedure #9 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#9-->

                                                        <!--#10-->
                                                        <details>
                                                            <summary>Procedimiento #10 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_10 ?? 'No procedure #8 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#10-->

                                                        <!--#011-->
                                                        <details>
                                                            <summary>Procedimiento #11 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_11 ?? 'No procedure #11 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#11-->

                                                        <!--#012-->
                                                        <details>
                                                            <summary>Procedimiento #12 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_12 ?? 'No procedure #12 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#12-->

                                                        <!--#013-->
                                                        <details>
                                                            <summary>Procedimiento #13 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_13 ?? 'No procedure #13 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#13-->

                                                        <!--#014-->
                                                        <details>
                                                            <summary>Procedimiento #14 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_14 ?? 'No procedure #14 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#14-->

                                                        <!--#015-->
                                                        <details>
                                                            <summary>Procedimiento #15 : <i class='bx bx-chevron-down'
                                                                    style='color:#4c4c4c'></i>
                                                            </summary>
                                                            <p><small>
                                                                    <?php echo nl2br($datos->procedure_15 ?? 'No procedure #15 found for this chain'); ?>
                                                                </small>
                                                            </p>
                                                        </details>
                                                        <!--#15-->


                                                    </section>
                                                </div>
                                                <!--Preguntas Frecuentes-->


                                            </div>
                                        </div>

                                    </div>
                                    <!--Ventana Modal-->



                            </td>


                        </tr>
                    </tbody>

                    <?php
                }
                ?>

            </table>
        </div>
        <!--container-table-desktop-->


<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->


    </main>



    <footer>
        <p class="m-0">Service Library
            2010-2024 &copy; Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small>
        </p>
    </footer>



    <!--SCRIPT-->
    <script src="../JS/Bootstrap.js"></script>
    <script src="../JS/search.js"></script>
    <script src="../JS/btn-show-RAPs.js"></script>
    <!--SCRIPT-->