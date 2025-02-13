<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("loaction: ./log.php");
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
    <link rel="icon" href="./IMG/x.png">
    <title>My Learning</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="./CSS/my_learning.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLE ICON-->

    <!--SCRIPT-->
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPT-->

</head>

<body style="background: #d0d0d0;">


    <header style="background: rgb(98, 3, 16);" class="header-menu">

        <div class="logo">
            <img src="./IMG/xdv.png" alt="">
        </div>

        <div class=""></div>
        <ul>
            <li><a href="./Learning.php"><i style="font-size: 30px; padding: 10px;" class='bx bxs-home'></i></a></li>

            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                </ul>
            </div>

        </ul>
    </header>

    <!--Apertura de vistas administrador-->
    <?php
    if ($_SESSION['roll'] == "administrator") { ?>

        <div class="container-fondo">
            <div class="fondo"></div>
            <div class="text">
                <p>Arbol de Aprendizaje</p>
            </div>



            <main>

                <div class="fondo-card">

                    <section class="gallery">

                        <!--VersaLink B405-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/b405.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">VersaLink B405</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento VersaLink B405</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el producto VersaLink b405.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal">Cerrar</label>
                                            <a href="./GC/VL_B405.php">Enroll</a>

                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--VersaLink B405-->


                        <!--KIP G71-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/kip.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KIP G71 SERIES</h5>
                                <small>Publicado:</small>
                                <small>21/11/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-3">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-3">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento del nuevo Plotter KIP G71 SERIES</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como instalar, configurar y usar el nuevo producto
                                                KIP G71.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-3">Cerrar</label>
                                            <a href="./GC/KIPG71.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--KIP G71-->


                        <!--COLOR-PRESS-1000-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/Color-press-1000.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Color-Press 1000</h5>
                                <small>Publicado:</small>
                                <small>22/11/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-4">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-4">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento del Color-Press 1000</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como instalar, configurar y usar la Color-Press 1000.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-4">Cerrar</label>
                                            <a href="./GC/CP_1000.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--COLOR-PRESS-1000-->

                        <!--Print Management-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/printMana.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Print Management</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-5">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-5">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento Print Management (Colas de Impresión)</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el Print Management.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-5">Cerrar</label>

                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--Print Management-->

                        <!--AltaLink B8155-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/AL8155.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AltaLink B8155</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-2">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-2">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento AltaLink B8155</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el producto AltaLink B8155.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-2">Cerrar</label>
                                            <a href="./GC/B8155.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--AltaLink B8155-->

                    </section>

                </div>

                <!--Cierre de clase arbol de aprendizaje-->
        </div>
        <!--Cierre de clase arbol de aprendizaje-->

        <?php
    }
    ?>
    <!--Cierre de vistas administrador-->


    <!--Apertura de vistas operator-->
    <?php
    if ($_SESSION['roll'] == "operator") { ?>

        <div class="container-fondo">
            <div class="fondo"></div>
            <div class="text">
                <p>Arbol de Aprendizaje</p>
            </div>



            <main>

                <div class="fondo-card">

                    <section class="gallery">

                        <!--VersaLink B405-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/b405.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">VersaLink B405</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento VersaLink B405</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el producto VersaLink b405.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal">Cerrar</label>
                                            <a href="./GC/VL_B405.php">Enroll</a>

                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--VersaLink B405-->


                        <!--KIP G71-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/kip.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KIP G71 SERIES</h5>
                                <small>Publicado:</small>
                                <small>21/11/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-3">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-3">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento del nuevo Plotter KIP G71 SERIES</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como instalar, configurar y usar el nuevo producto
                                                KIP G71.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-3">Cerrar</label>
                                            <a href="./GC/KIPG71.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--KIP G71-->


                        <!--COLOR-PRESS-1000-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/Color-press-1000.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Color-Press 1000</h5>
                                <small>Publicado:</small>
                                <small>22/11/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-4">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-4">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento del Color-Press 1000</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como instalar, configurar y usar la Color-Press 1000.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-4">Cerrar</label>
                                            <a href="./GC/CP_1000.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--COLOR-PRESS-1000-->

                        <!--Print Management-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/printMana.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Print Management</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-5">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-5">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento Print Management (Colas de Impresión)</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el Print Management.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-5">Cerrar</label>

                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--Print Management-->

                        <!--AltaLink B8155-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/AL8155.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AltaLink B8155</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-2">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-2">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento AltaLink B8155</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el producto AltaLink B8155.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-2">Cerrar</label>
                                            <a href="./GC/B8155.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--AltaLink B8155-->

                    </section>

                </div>

                <!--Cierre de clase arbol de aprendizaje-->
        </div>
        <!--Cierre de clase arbol de aprendizaje-->

        <?php
    }
    ?>
    <!--Cierre de vistas operator-->


    <!--Apertura de vistas ally-->
    <?php
    if ($_SESSION['roll'] == "ally") { ?>

        <div class="container-fondo">
            <div class="fondo"></div>
            <div class="text">
                <p>Arbol de Aprendizaje</p>
            </div>


            <main>

                <div class="fondo-card">

                    <section class="gallery">

                        <!--AltaLink B8155-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/AL8155.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AltaLink B8155</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-2">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-2">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento de AltaLink B8155</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el producto AltaLink B8155.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-2">Cerrar</label>
                                            <a href="./GC/B8155.php">Enroll</a>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--AltaLink B8155-->

                        <!--AltaLink B8255-->
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="./IMG/AL8155.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AltaLink B8255</h5>
                                <small>Publicado:</small>
                                <small>11/08/2024</small>

                                <!--Boton-->
                                <div class="boton-modal">
                                    <label for="btn-modal-4">
                                        Detalles
                                    </label>
                                </div>
                                <!--Fin de Boton-->
                                <!--Ventana Modal-->
                                <input type="checkbox" id="btn-modal-4">
                                <div class="container-modal">
                                    <div class="content-modal">
                                        <h6>Entrenamiento de AltaLink B8255</h6>
                                        <p><small>
                                                Este Curso autodidacta proporciona una descripción general
                                                del producto y explica como configurar y usar el producto AltaLink B8255.
                                            </small></p>
                                        <div class="btn-option">
                                            <label for="btn-modal-4">Cerrar</label>
                                        </div>
                                    </div>
                                    <label for="btn-modal" class="cerrar-modal"></label>
                                </div>
                                <!--Fin de Ventana Modal-->
                            </div>
                        </div>
                        <!--AltaLink B8255-->

                    </section>

                </div>

                <!--Cierre de clase arbol de aprendizaje-->
        </div>
        <!--Cierre de clase arbol de aprendizaje-->

        <?php
    }
    ?>
    <!--Cierre de vistas ally-->




    </main>

    <!--START FOOTER
        <footer>
            <div class="footer">
            </div>
        </footer>
        START FOOTER-->



</body>

</html>