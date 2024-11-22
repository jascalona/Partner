<?php
session_start();
if (!empty($_SESSION["name"])) {
  header("location:");
} else {
  if ((time() - $_SESSION["time"]) > 1800) {
    header("location: ./intranet.php");
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
  <link rel="stylesheet" href="./CSS_SERVICE/test.css">
  <link rel="stylesheet" href="./CSS_SERVICE/Bootstrap.css">
  <link rel="stylesheet" href="./CSS_SERVICE/service_training.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--STYLE ICON-->

  <!--SCRIPT-->
  <script src="./JS_training/Bootstrap.js"></script>
  <script src="./JS_training/btn_leccion_s.js"></script>
  <!--SCRIPT-->


</head>

<body class="grid-container">



  <header>
    <div class="text">
      <p><small>Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al Curso de soporte para KIP G71</small></p>
    </div>


    <div class="btn-nav">
      <button class="btn btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
        <i class='bx bxs-food-menu' style='color: #ded4f6'></i>
      </button>

      <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="staticBackdropLabel"><strong>ELearning KIPG71</strong></h5>
          <button style="padding: 10px;" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class='bx bx-x' style='color:#ded4f6'></i>
          </button>
        </div>
        <div class="offcanvas-body">

          <div class="btn-cont">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Caracteristicas de Producto
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="">Caracteristicas del Producto</a></li>
                <li><a class="dropdown-item" href="">Tecnología de impresión de alta definición (HDP)</a></li>
                <li><a class="dropdown-item" href="">Máxima durabilidad de la imagen</a></li>                
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Controlador y Utilidades
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion2();">Instalación del Controlador</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion3();">Interfaz de Impresión</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion4();">Herramienta Web</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Configuración de Buzón KIP
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion5();">Digitalización en Red</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">Local Mailbox</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">Email</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Sistema Operativo
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">Firmware USB serie 71</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">Actualización usando parche de seguridad</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Copia de Seguridad</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Restauracion Interna</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contabilidad 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Contabilidad Local</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Contabilidad con LDAP</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funciones UI
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Instalación DEMO</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Perzonalización de la Interfaz de Usuario</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Anidamiento</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Creación de Plantillas</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Funciones de Configuración y Servicios I</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Funciones de Configuración y ServiciosII</a></li>
              </ul>
            </li>


          </div>

        </div>
      </div>
    </div>




  </header>


  <!--Content-->
  <main>

    <?php
    include './CONTROLLER/select_k_s.php';
    ?>

    <!--END MODULO DE CARACTERISTICAS-->

    <!--LECCION 01-->
    <style>
     #leccion1 {
        display: none;
    }
    </style>

    <div id="leccion1" class="container-carac">


      <!--Carrusel ui 1-->
      <article class="item_carru" id="item1_carru">
        <div class="ui_carru" id="ui_item_1">
          <h5>Plotter KIP G71</h5>

          <div class="content-general">
            <p class="paragraph">
              <?php
              $op = new select_k_s();
              $resP = $op->producto();
              while ($row = mysqli_fetch_array($resP)) {
                echo $row['product'];
              }
              ?>
            </p>

            <img src="./images/S/p1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#ui_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 1-->


      <!--Carrusel ui 2-->
      <article class="item_carru" id="item2_carru">
        <div class="ui_carru" id="ui_item_2">
          <h5>Caracteristicas Generales</h5>

          <div class="content-general">
            <p class="paragraph">
              <?php
              $op = new select_k_s();
              $resP2 = $op->producto2();
              while ($row = mysqli_fetch_array($resP2)) {
                echo $row['product'];
              }
              ?>
            </p>

            <img src="./images/S/P2.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href="#ui_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ui_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 2-->

      <!--Carrusel ui 3-->
      <article class="item_carru" id="item3_carru">
        <div class="ui_carru" id="ui_item_3">
        <h5>Caracteristicas de Impresora</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resP3 = $op->producto3();
              while ($row = mysqli_fetch_array($resP3)) {
                echo $row['product'];
              }
              ?>
            </p>

            <img src="./images/S/p3.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#ui_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ui_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 3-->

       <!--Carrusel ui 4-->
       <article class="item_carru" id="item4_carru">
        <div class="ui_carru" id="ui_item_4">
        <h5>Caracteristicas Controlador</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resP4 = $op->producto4();
              while ($row = mysqli_fetch_array($resP4)) {
                echo $row['product'];
              }
              ?>
            </p>

            <img src="./images/S/p4.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#ui_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ui_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 4-->


       <!--Carrusel ui 5-->
       <article class="item_carru" id="item5_carru">
        <div class="ui_carru" id="ui_item_5">
        <h5>Caracteristicas Escáner</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resP5 = $op->producto5();
              while ($row = mysqli_fetch_array($resP5)) {
                echo $row['product'];
              }
              ?>
            </p>

            <img src="./images/S/P2.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#ui_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ui_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 3-->

      

      <!--Carrusel ui 04-->
      <article class="item_carru" id="item6_carru">
        <div class="ui_carru" id="ui_item_6">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la siguiente lección
            </p>

            <img src="./images/siguiente.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion3();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel ui 04-->


    </div>
    <!--LECCION 01-->


    <!--LECCION 02-->
    <style>
      #leccion2 {
        display: none;
      }
    </style>

    <div id="leccion2" class="container-carac">


      <!--Carrusel ui 1-->
      <article class="item_carru" id="item1_carru">
        <div class="ac_carru" id="ac_item_1">
          <h5>Tecnología de impresión de alta definición (HDP)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resT = $op->tecnologia();
              while ($row = mysqli_fetch_array($resT)) {
                echo $row['product'];
              }
              ?>
            </p>

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#ac_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 1-->

      <!--Carrusel ui 2-->
      <article class="item_carru" id="item2_carru">
        <div class="ui_carru" id="ac_item_2">
        <h5>Tecnología de impresión de alta definición (HDP)</h5>

        <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resT2 = $op->tecnologia2();
              while ($row = mysqli_fetch_array($resT2)) {
                echo $row['product'];
              }
              ?>
            </p>
            <img src="./images/S/t1.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#ac_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ac_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 2-->

      <!--Carrusel ui 3-->
      <article class="item_carru" id="item3_carru">
        <div class="ui_carru" id="ac_item_3">
          <h5>Tecnología de Velocidad Constante</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resT3 = $op->tecnologia3();
              while ($row = mysqli_fetch_array($resT3)) {
                echo $row['product'];
              }
              ?>
            </p>
            <img src="./images/S/t2.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href="#ac_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ac_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 3-->


      <!--Carrusel ui 04-->
      <article class="item_carru" id="item4_carru">
        <div class="ui_carru" id="ac_item_4">

        <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la siguiente leccion
            </p>

            <img src="./images/H/siguiente2.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion4();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel ui 04-->

    </div>
    <!--LECCION 02-->


    <!--LECCION 03-->
    <style>
      #leccion3 {
        display: none;
      }
    </style>

    <div id="leccion3" class="container-carac">

      <!--Carrusel HR 01-->
      <article class="item_carru" id="item1_carru">
        <div class="hr_carru" id="hr_item_1">
          <h5>Máxima durabilidad de la imagen</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resR = $op->rendimiento();
              while ($row = mysqli_fetch_array($resR)) {
                echo $row['product'];
              }
              ?>
            </p>

            <img src="./images/S/t3.png" alt="img">
          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#hr_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel HR 01-->

    <!--Carrusel HR 02-->
    <article class="item_carru" id="item2_carru">
            <div class="hr_carru" id="hr_item_2">
            <h5>Capacidad del medio</h5>

            <div class="content-general">
                <p>
                <?php
                $op = new select_k_s();
                $resR2 = $op->rendimiento2();
                while ($row = mysqli_fetch_array($resR2)) {
                    echo $row['product'];
                }
                ?>
                </p>

                <img src="./images/S/t4.png" alt="img">
            </div>

            <div class="ui_fle_carru">
                <a href="#hr_item_1"><i class='bx bxs-chevron-left'></i></a>
                <a href="#hr_item_3"><i class='bx bxs-chevron-right'></i></a>
            </div>

            </div>
        </article>
        <!--Carrusel HR 01-->

      <!--Carrusel HR 07-->
      <article class="item_carru" id="item3_carru">
        <div class="hr_carru" id="hr_item_3">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la siguiente lección 
            </p>

            <img src="./images/siguiente2.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion5();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel HR 07-->


    </div>
    <!--LECCION 03-->

    <!--LECCION 04-->
    <style>
      #leccion4 {
        display: ;
      }
    </style>

    <div id="leccion4" class="container-carac">

      <!--Carrusel IP 01-->
      <article class="item_carru" id="item1_carru">
        <div class="in_carru" id="in_item_1">
          <h5>Descarga del Controlador</h5>

          <div class="content-general">
            <p>
              <?php
              $op= new select_k_s();
              $resD = $op->driver();
              while ($row = mysqli_fetch_array($resD)) {
                echo $row['driver'];
              }
              ?>
            </p>

            <img src="./images/S/driver1.png" alt="img">
          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#in_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 01-->

      <!--Carrusel IP 02-->
      <article class="item_carru" id="item2_carru">
        <div class="in_carru" id="in_item_2">
          <h5>Instalación del Controlador</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resD2 = $op->driver2();
              while ($row = mysqli_fetch_array($resD2)) {
                echo $row['driver'];
              }
              ?>
            </p>

            <img src="./images/S/driver2.png" alt="img">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 02-->

      <!--Carrusel IP 03-->
      <article class="item_carru" id="item3_carru">
        <div class="in_carru" id="in_item_3">
          <h5>Instalación del Controlador .EXE</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resD3 = $op->driver3();
              while ($row = mysqli_fetch_array($resD3)) {
                echo $row['driver'];
              }
              ?>
            </p>

            <img src="./images/S/driver3.png" alt="img">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 03-->

      <!--Carrusel IP 04-->
      <article class="item_carru" id="item4_carru">
              <div class="in_carru" id="in_item_4">
                <h5>Configuración del Controlador de Impresión</h5>

                <div class="content-general">
                  <p>
                    <?php
                    $op = new select_k_s();
                    $resD4 = $op->driver4();
                    while ($row = mysqli_fetch_array($resD4)) {
                      echo $row['driver'];
                    }
                    ?>
                  </p>

                </div>
                <img src="./images/S/driver4.png" alt="img">

                <div class="ui_fle_carru">
                  <a href="#in_item_3"><i class='bx bxs-chevron-left'></i></a>
                  <a href="#in_item_5"><i class='bx bxs-chevron-right'></i></a>
                </div>

              </div>
            </article>
            <!--Carrusel IP 04-->


            <!--Carrusel IP 05-->
            <article class="item_carru" id="item5_carru">
              <div class="in_carru" id="in_item_5">
                <h5>Configuración del Controlador de Impresión</h5>

                <div class="content-general">
                  <p>
                    <?php
                    $op = new select_k_s();
                    $resD4 = $op->driver5();
                    while ($row = mysqli_fetch_array($resD4)) {
                      echo $row['driver'];
                    }
                    ?>
                  </p>
                    <img src="./images/S/driver5.png" alt="">
                </div>

                <div class="ui_fle_carru">
                  <a href="#in_item_4"><i class='bx bxs-chevron-left'></i></a>
                  <a href="#in_item_6"><i class='bx bxs-chevron-right'></i></a>
                </div>

              </div>
            </article>
            <!--Carrusel IP 05-->

          <!--Carrusel IP 05-->
          <article class="item_carru" id="item6_carru">
            <div class="hr_carru" id="in_item_6">

              <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección</h5>

              <div class="content-general">
                <p class="paragraph">
                  De Click en "Siguiente" para acceder a la siguiente lección 
                </p>

                <img src="./images/siguiente4.jpg" alt="">

              </div>

              <div class="btn-leccion">
                <button id="boton" onclick="ir_leccion6();">
                  Siguiente
                </button>
              </div>

            </div>
          </article>
          <!--Carrusel IP 05-->

    </div>
    <!--LECCION 04-->


    <!--LECCION 06-->
    <style>
      #leccion6 {
        display: none;
      }
    </style>

    <div id="leccion6" class="container-carac">

      <!--Carrusel TF 01-->
      <article class="item_carru" id="item1_carru">
        <div class="tf_carru" id="tf_item_1">
          <h5>Herramientas y ajustes</h5>

          <div class="content-general">
            <p>
              <?php
              $opha = new select_ha();
              $resHA = $opha->select_ha();
              while ($row = mysqli_fetch_array($resHA)) {
                echo $row['ajustes'];
              }
              ?>
            </p>
          
            <img src="./images/S/ha1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#tf_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 01-->

      <!--Carrusel TF 02-->
      <article class="item_carru" id="item2_carru">
        <div class="tf_carru" id="tf_item_2">
          <h5>Cómo Acceder a diagnóstico?</h5>

          <div class="content-general">
            <p>  
              <?php
                $opha = new select_ha();
                $resHA2 = $opha->select_ha2();
                while ($row = mysqli_fetch_array($resHA2)){
                  echo $row['ajustes'];
                }
              ?>
            </p>

            <img src="./images/S/ha2.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 02-->

      <!--Carrusel TF 05-->
      <article class="item_carru" id="item3_carru">
        <div class="tf_carru" id="tf_item_3">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección VII
            </p>

            <img src="./images/H/siguiente4.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion7();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel TF 05-->


    </div>
    <!--LECCION 06-->


    <!--LECCION 07-->
    <style>
      #leccion7 {
        display: none;
      }
    </style>

    <div id="leccion7" class="container-carac">

     <!--Carrusel TF 03-->
     <article class="item_carru" id="item4_carru">
        <div class="tf_carru" id="tf_item_4">
          <h5>Rutinas NVM</h5>

          <div class="content-general">
            <p>  
              <?php
                $opha = new select_ha();
                $resHA3 = $opha->select_ha3();
                while ($row = mysqli_fetch_array($resHA3)){
                  echo $row['ajustes'];
                }
              ?>
            </p>

            <img src="./images/S/ha3.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#tf_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 03-->

        <!--Carrusel TF 04-->
        <article class="item_carru" id="item5_carru">
        <div class="tf_carru" id="tf_item_5">
          <h5>Acceso a referencias y rutinas de NVM</h5>

          <div class="content-general">
            <p>  
              <?php
                $opha = new select_ha();
                $resHA4 = $opha->select_ha4();
                while ($row = mysqli_fetch_array($resHA4)){
                  echo $row['ajustes'];
                }
              ?>
            </p>

            <img src="./images/S/ha4.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 04-->


      <!--Carrusel TF 11-->
      <article class="item_carru" id="item6_carru">
        <div class="tf_carru" id="tf_item_6">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección VIII
            </p>

            <img src="./images/H/siguiente.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion8();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 11-->


    </div>
    <!--LECCION 07-->


    <!--LECCION 08-->
    <style>
      #leccion8 {
        display: none;
      }
    </style>

    <div id="leccion8" class="container-carac">

      <!--Carrusel TF 12-->
      <article class="item_carru" id="item12_carru">
        <div class="tf_carru" id="tf_item_12">
          <h5>Carga de Software y actualizaciones</h5>

          <div class="content-general">
            <p>
              <?php
              $opsf = new select_sft();
              $resSF  = $opsf->select_sf();
              while ($row = mysqli_fetch_array($resSF)) {
                echo $row['software'];
              }
              ?>
            </p>

            <img src="./images/S/sf2.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#tf_item_13"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 12-->

      <!--Carrusel TF 13-->
      <article class="item_carru" id="item13_carru">
        <div class="tf_carru" id="tf_item_13">
          <h5>Identificar la versión de firmware</h5>

          <div class="content-general">
            <p>
              <?php
              $opsf = new select_sft();
              $resSF2  = $opsf->select_sf2();
              while ($row = mysqli_fetch_array($resSF2)) {
                echo $row['software'];
              }
              ?>
            </p>

          </div>



          <div class="ui_fle_carru">
            <a href="#tf_item_12"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_14"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 13-->

      <!--Carrusel TF 14-->
      <article class="item_carru" id="item14_carru">
        <div class="tf_carru" id="tf_item_14">
          <h5>Actualización automática de software</h5>
            <div class="content-general">
            <p>
                <?php
                $opsf = new select_sft();
                $resSF3  = $opsf->select_sf3();
                while ($row = mysqli_fetch_array($resSF3)) {
                  echo $row['software'];
                }
                ?>
              </p>

              <img src="./images/S/sf4.png" alt="">
            </div>

          <div class="ui_fle_carru">
            <a href="#tf_item_13"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_15"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 14-->

      <!--Carrusel TF 15-->
      <article class="item_carru" id="item15_carru">
        <div class="tf_carru" id="tf_item_15">
          <h5>Actualización de firmware mediante una unidad USB</h5>

          <div class="content-general">
            <p>
              <?php
              $opsf = new select_sft();
              $resSF4 = $opsf->select_sf4();
              while ($row = mysqli_fetch_array($resSF4)) {
                echo $row["software"];
              }
              ?>
            </p>

            <img src="./images/S/sf5.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href="#tf_item_14"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_16"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 15-->


      <!--Carrusel TF 19-->
      <article class="item_carru" id="item16_carru">
        <div class="tf_carru" id="tf_item_16">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito la formación de Servicio Técnico para VersaLink B405</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Ir a la Evaluación" para comenzar la evaluación diagnostica
            </p>
          </div>

          <div class="btn-enlaces-evaluacion">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScrdZvXcq-K4OoceGqDd4ul1S1_L4TPFZzW_KbdbbuvzquXvg/viewform">Ir a la Evaluación</a>
            <br>
            <a href="../VL_B405.php">Volver a los detalles de Inscripción</a>
          </div>


        </div>
      </article>
      <!--Carrusel IP 19-->


    </div>
    <!--LECCION 08-->


  </main>
  <!--Content-->


</body>

</html>