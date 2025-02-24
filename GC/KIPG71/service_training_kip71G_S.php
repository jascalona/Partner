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
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion1_s();">Caracteristicas del Producto</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion2_s();">Tecnología de impresión de alta definición (HDP)</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion3_s();">Máxima durabilidad de la imagen</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Controlador y Utilidades
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion4_s();">Instalación del Controlador</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion5_s();">Interfaz de Impresión</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Configuración de Buzón KIP
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6_s();">Digitalización en Red</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion7_s();">Local Mailbox</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sistema Operativo
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8_s();">Firmware USB serie 71</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion9_s();">Actualización usando parche de seguridad</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion10_s();">Restauracion Interna</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contabilidad
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion11_s();">Contabilidad Local</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funciones UI
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion12_s();">Perzonalización de la Interfaz de Usuario</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion13_s();">Anidamiento</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion14_s();">Creación de Plantillas</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion15_s();">Funciones de Configuración y Servicios I</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion16_s();">Funciones de Configuración y ServiciosII</a></li>
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
            <button id="boton" onclick="ir_leccion2_s();">
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
            <button id="boton" onclick="ir_leccion3_s();">
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
            <button id="boton" onclick="ir_leccion4_s();">
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
        display: none;
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
              $op = new select_k_s();
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

      <!--Carrusel IP 06-->
      <article class="item_carru" id="item6_carru">
        <div class="in_carru" id="in_item_6">
          <h5>¿Cómo remover el controlador de impresión?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resD6 = $op->driver6();
              while ($row = mysqli_fetch_array($resD6)) {
                echo $row['driver'];
              }
              ?>
            </p>
            <img src="./images/S/driver6.png" alt="">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 06-->


      <!--Carrusel IP 07-->
      <article class="item_carru" id="item7_carru">
        <div class="in_carru" id="in_item_7">
          <h5>¿Cómo remover el controlador de impresión?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resD7 = $op->driver7();
              while ($row = mysqli_fetch_array($resD7)) {
                echo $row['driver'];
              }
              ?>
            </p>
            <img src="./images/S/driver7.png" alt="">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_6"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_8"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 07-->

      <!--Carrusel IP 08-->
      <article class="item_carru" id="item8_carru">
        <div class="in_carru" id="in_item_8">
          <h5>¿Cómo usar el controlador de impresión?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resD8 = $op->driver8();
              while ($row = mysqli_fetch_array($resD8)) {
                echo $row['driver'];
              }
              ?>
            </p>
            <img src="./images/S/driver8.png" alt="">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_7"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_9"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 08-->

      <!--Carrusel IP 09-->
      <article class="item_carru" id="item9_carru">
        <div class="in_carru" id="in_item_9">
          <h5>¿Cómo usar las propiedades del controlador?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resD9 = $op->driver9();
              while ($row = mysqli_fetch_array($resD9)) {
                echo $row['driver'];
              }
              ?>
            </p>
            <img src="./images/S/driver9.png" alt="">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_8"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_10"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 09-->


      <!--Carrusel IP 10-->
      <article class="item_carru" id="item10_carru">
        <div class="hr_carru" id="in_item_10">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la siguiente lección.
            </p>

            <img src="./images/siguiente4.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion5_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 10-->

    </div>
    <!--LECCION 04-->


    <!--LECCION 05-->
    <style>
      #leccion5 {
        display: none;
      }
    </style>

    <div id="leccion5" class="container-carac">

      <!--Carrusel TF 01-->
      <article class="item_carru" id="item1_carru">
        <div class="tf_carru" id="tf_item_1">
          <h5>Interfaz de Impresión</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resI = $op->interfazP();
              while ($row = mysqli_fetch_array($resI)) {
                echo $row['interfazP'];
              }
              ?>
            </p>

            <img src="./images/S/interfazP1.png" alt="">

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
          <h5>KIP ImagePro</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resI2 = $op->interfazP2();
              while ($row = mysqli_fetch_array($resI2)) {
                echo $row['interfazP'];
              }
              ?>
            </p>

            <img src="./images/S/interfazP3.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 02-->

      <!--Carrusel TF 03-->
      <article class="item_carru" id="item3_carru">
        <div class="tf_carru" id="tf_item_3">
          <h5>KIP ImagePro (Resumen de Uso)</h5>

          <div class="content-general">
            <video width="100%" height="280" controls>
              <source src="./images/S/KIP ImagePro SP.mp4" type="video/mp4">
            </video>
          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 03-->

      <!--Carrusel TF 05-->
      <article class="item_carru" id="item4_carru">
        <div class="tf_carru" id="tf_item_4">
          <h5>¿Cómo Descargar el KIP ImagePro?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resI4 = $op->interfazP4();
              while ($row = mysqli_fetch_array($resI4)) {
                echo $row['interfazP'];
              }
              ?>
            </p>

            <img src="./images/S/driver2.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 05-->

      <!--Carrusel TF 06-->
      <article class="item_carru" id="item5_carru">
        <div class="tf_carru" id="tf_item_5">
          <h5>¿Cómo Instalar el KIP ImagePro?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resI5 = $op->interfazP5();
              while ($row = mysqli_fetch_array($resI5)) {
                echo $row['interfazP'];
              }
              ?>
            </p>

            <img src="./images/S/interfazP4.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 06-->

      <!--Carrusel TF 06-->
      <article class="item_carru" id="item6_carru">
        <div class="tf_carru" id="tf_item_6">
          <h5>Creación y guardado de trabajos</h5>

          <div class="content-general">
            <video width="100%" height="280" controls>
              <source src="./images/S/creado_guardado_trabajos.mp4" type="video/mp4">
            </video>
          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 06-->

      <!--Carrusel TF 07-->
      <article class="item_carru" id="item7_carru">
        <div class="tf_carru" id="tf_item_7">
          <h5>Creación u uso de ajustes prestablecidos</h5>

          <div class="content-general">
            <video width="100%" height="280" controls>
              <source src="./images/S/creacion_ajustes_prestablecidos.mp4" type="video/mp4">
            </video>
          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_6"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_8"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 07-->

      <!--Carrusel TF 08-->
      <article class="item_carru" id="item8_carru">
        <div class="tf_carru" id="tf_item_8">
          <h5>Creación de múltiples trabajos</h5>

          <div class="content-general">
            <video width="100%" height="280" controls>
              <source src="./images/S/creacion_multiples_trabajos.mp4" type="video/mp4">
            </video>
          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_7"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_9"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 08-->

      <!--Carrusel TF 09-->
      <article class="item_carru" id="item9_carru">
        <div class="tf_carru" id="tf_item_9">
          <h5>Cómo utilizar la configuración de calidad de impresión</h5>

          <div class="content-general">
            <video width="100%" height="280" controls>
              <source src="./images/S/calidad_impresion.mp4" type="video/mp4">
            </video>
          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_8"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_10"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 09-->


      <!--Carrusel TF 10-->
      <article class="item_carru" id="item10_carru">
        <div class="tf_carru" id="tf_item_10">
          <h5>KIP PrintPro.net</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resI3 = $op->interfazP3();
              while ($row = mysqli_fetch_array($resI3)) {
                echo $row['interfazP'];
              }
              ?>
            </p>

            <img src="./images/S/interfazP2.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#tf_item_9"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_11"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 10-->


      <!--Carrusel TF 11-->
      <article class="item_carru" id="item11_carru">
        <div class="tf_carru" id="tf_item_11">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la siguiente lección.
            </p>

            <img src="./images/siguiente5.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion6_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel TF 11-->


    </div>
    <!--LECCION 05-->


    <!--LECCION 06-->
    <style>
      #leccion6 {
        display: none;
      }
    </style>

    <div id="leccion6" class="container-carac">

      <!--Carrusel TF 01-->
      <article class="item_carru" id="item4_carru">
        <div class="tf_carru" id="sr_item_1">
          <h5>Digitalización en red</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res = $op->scanR();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR1.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#sr_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 01-->

      <!--Carrusel TF 02-->
      <article class="item_carru" id="item5_carru">
        <div class="tf_carru" id="sr_item_2">
          <h5>Digitalización en red</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res = $op->scanR2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR2.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#sr_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sr_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 02-->


      <!--Carrusel TF 03-->
      <article class="item_carru" id="item5_carru">
        <div class="tf_carru" id="sr_item_3">
          <h5>Digitalización en red (New Mailbox)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res = $op->scanR3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR3.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#sr_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sr_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 03-->

      <!--Carrusel TF 04-->
      <article class="item_carru" id="item4_carru">
        <div class="tf_carru" id="sr_item_4">
          <h5>Digitalización en red (New Mailbox)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res = $op->scanR4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR4.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#sr_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sr_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 04-->

      <!--Carrusel TF 05-->
      <article class="item_carru" id="item5_carru">
        <div class="tf_carru" id="sr_item_5">
          <h5>Digitalización en red (Configuración del Buzón)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res = $op->scanR5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR5.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#sr_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sr_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 05-->

      <!--Carrusel TF 06-->
      <article class="item_carru" id="item6_carru">
        <div class="tf_carru" id="sr_item_6">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion7_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 06-->


    </div>
    <!--LECCION 06-->


    <!--LECCION 07-->
    <style>
      #leccion7 {
        display: none;
      }
    </style>

    <div id="leccion7" class="container-carac">

      <!--Carrusel TF 12-->
      <article class="item_carru" id="item12_carru">
        <div class="tf_carru" id="tf_item_12">
          <h5>Local Mailbox</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->scanL();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR5.png" alt="">

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
          <h5>Local Mailbox</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resSF2  = $op->scanR2();
              while ($row = mysqli_fetch_array($resSF2)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR2.png" alt="">

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
          <h5>Digitalización Local (New Mailbox)</h5>
          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resSF3  = $op->scanR3();
              while ($row = mysqli_fetch_array($resSF3)) {
                echo $row['conf_b'];
              }
              ?>
            </p>

            <img src="./images/S/scanerR3.png" alt="">
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
          <h5>Local Mailbox (Configuración del Buzón)</h5>

          <div class="content-general">
            <p>
              <?php
              $opsf = new select_k_s();
              $resSF4 = $opsf->scanL2();
              while ($row = mysqli_fetch_array($resSF4)) {
                echo $row["conf_b"];
              }
              ?>
            </p>

            <img src="./images/S/scanerL1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href="#tf_item_14"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_16"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 15-->

      <!--Carrusel TF 16-->
      <article class="item_carru" id="item16_carru">
        <div class="tf_carru" id="tf_item_16">
          <h5>Local Mailbox (Configuración del Buzón)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resSF4 = $op->scanL3();
              while ($row = mysqli_fetch_array($resSF4)) {
                echo $row["conf_b"];
              }
              ?>
            </p>

            <img src="./images/S/scanerL2.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href="#tf_item_15"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_17"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 16-->


      <!--Carrusel TF 17-->
      <article class="item_carru" id="item17_carru">
        <div class="tf_carru" id="tf_item_17">
          <h5>Local Mailbox (Vista Previa del directorio Local)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $resSF4 = $op->scanL4();
              while ($row = mysqli_fetch_array($resSF4)) {
                echo $row["conf_b"];
              }
              ?>
            </p>

            <img src="./images/S/scanerL3.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href="#tf_item_16"><i class='bx bxs-chevron-left'></i></a>
            <a href="#tf_item_18"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel TF 17-->

      <!--Carrusel TF 18-->
      <article class="item_carru" id="item18_carru">
        <div class="tf_carru" id="tf_item_18">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente4.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion8_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 18-->


    </div>
    <!--LECCION 07-->


    <!--LECCION 08-->
    <style>
      #leccion8 {
        display: none;
      }
    </style>

    <div id="leccion8" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="sok_carru" id="sok_item_1">
          <h5>Actualización de Firmware USB (Preparar el archivo)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#sok_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="sok_carru" id="sok_item_2">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="sok_carru" id="sok_item_3">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="sok_carru" id="sok_item_4">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware4.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->


      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="sok_carru" id="sok_item_5">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware5.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->


      <!--Carrusel  06-->
      <article class="item_carru" id="item6_carru">
        <div class="sok_carru" id="sok_item_6">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so6();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware6.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 06-->

      <!--Carrusel  07-->
      <article class="item_carru" id="item7_carru">
        <div class="sok_carru" id="sok_item_7">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so7();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware7.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_6"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_8"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 07-->

      <!--Carrusel  08-->
      <article class="item_carru" id="item8_carru">
        <div class="sok_carru" id="sok_item_8">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so8();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware8.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_7"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_9"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 08-->

      <!--Carrusel  09-->
      <article class="item_carru" id="item9_carru">
        <div class="sok_carru" id="sok_item_9">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so9();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware9.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_8"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_10"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 09-->

      <!--Carrusel  10-->
      <article class="item_carru" id="item10_carru">
        <div class="sok_carru" id="sok_item_10">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so10();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware10.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_9"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_11"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 10-->

      <!--Carrusel  11-->
      <article class="item_carru" id="item11_carru">
        <div class="sok_carru" id="sok_item_11">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so11();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware11.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_10"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_12"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 11-->


      <!--Carrusel  12-->
      <article class="item_carru" id="item12_carru">
        <div class="sok_carru" id="sok_item_12">
          <h5>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->so12();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/firmware11.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#sok_item_11"><i class='bx bxs-chevron-left'></i></a>
            <a href="#sok_item_13"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 12-->

      <!--Carrusel TF 13-->
      <article class="item_carru" id="item13_carru">
        <div class="sok_carru" id="sok_item_13">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente2.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion9_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 19-->

    </div>
    <!--LECCION 08-->


    <!--LECCION 09-->
    <style>
      #leccion9 {
        display: none;
      }
    </style>

    <div id="leccion9" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="cs_carru" id="cs_item_1">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#cs_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="cs_carru" id="cs_item_2">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="cs_carru" id="cs_item_3">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="cs_carru" id="cs_item_4">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad4.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->


      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="cs_carru" id="cs_item_5">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad5.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->


      <!--Carrusel  06-->
      <article class="item_carru" id="item6_carru">
        <div class="cs_carru" id="cs_item_6">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs6();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad6.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 06-->

      <!--Carrusel  07-->
      <article class="item_carru" id="item7_carru">
        <div class="cs_carru" id="cs_item_7">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs7();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad7.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_6"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_8"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 07-->

      <!--Carrusel  08-->
      <article class="item_carru" id="item8_carru">
        <div class="cs_carru" id="cs_item_8">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs8();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>

            <img src="./images/S/cSeguridad8.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_7"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_9"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 08-->

      <!--Carrusel  09-->
      <article class="item_carru" id="item9_carru">
        <div class="cs_carru" id="cs_item_9">
          <h5>Proceso de Actualización</h5>

          <div class="content-general">
            <p>No apague el equipo!</p>
            <img src="./images/S/cSeguridad9.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_8"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_10"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 09-->

      <!--Carrusel  10-->
      <article class="item_carru" id="item10_carru">
        <div class="cs_carru" id="cs_item_10">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->cs9();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['so'];
              }
              ?>
            </p>


            <img src="./images/S/cSeguridad11.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#cs_item_9"><i class='bx bxs-chevron-left'></i></a>
            <a href="#cs_item_11"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 10-->

      <!--Carrusel TF 11-->
      <article class="item_carru" id="item11_carru">
        <div class="cs_carru" id="cs_item_11">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente3.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion10_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 11-->

    </div>
    <!--LECCION 09-->


    <!--LECCION 10-->
    <style>
      #leccion10 {
        display: none;
      }
    </style>

    <div id="leccion10" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="ri_carru" id="ri_item_1">
          <h5>Restauración Interna</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->restauracion();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['restauracion'];
              }
              ?>
            </p>

            <img src="./images/kip.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#ri_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="ri_carru" id="ri_item_2">
          <h5>Restauración Interna</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->restauracion2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['restauracion'];
              }
              ?>
            </p>

            <img src="./images/S/restauracion2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#ri_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ri_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="ri_carru" id="ri_item_3">
          <h5>Restauración Interna</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->restauracion3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['restauracion'];
              }
              ?>
            </p>

            <img src="./images/S/restauracion3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#ri_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ri_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="ri_carru" id="ri_item_4">
          <h5>Restauración Interna</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->restauracion4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['restauracion'];
              }
              ?>
            </p>

            <img src="./images/S/restauracion4.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#ri_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ri_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->


      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="ri_carru" id="ri_item_5">
          <h5>Actualización usando el Parche de Seguridad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->restauracion5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['restauracion'];
              }
              ?>
            </p>

            <img src="./images/S/restauracion6.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#ri_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ri_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->


      <!--Carrusel TF 11-->
      <article class="item_carru" id="item6_carru">
        <div class="ir_carru" id="ri_item_6">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente5.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion11_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 11-->

    </div>
    <!--LECCION 10-->


    <!--LECCION 11-->
    <style>
      #leccion11 {
        display: none;
      }
    </style>

    <div id="leccion11" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="c_carru" id="c_item_1">
          <h5>Centro de Contabilidad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/kip.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#c_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="c_carru" id="c_item_2">
          <h5>Centro de Contabilidad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad1.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="c_carru" id="c_item_3">
          <h5>Centro de Contabilidad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="c_carru" id="c_item_4">
          <h5>Centro de Contabilidad (Copia)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->


      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="c_carru" id="c_item_5">
          <h5>Centro de Contabilidad (Scan)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidadS.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->

      <!--Carrusel  06-->
      <article class="item_carru" id="item6_carru">
        <div class="c_carru" id="c_item_6">
          <h5>Centro de Contabilidad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad6();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad5.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 06-->

      <!--Carrusel  07-->
      <article class="item_carru" id="item7_carru">
        <div class="c_carru" id="c_item_7">
          <h5>Centro de Contabilidad</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad7();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad6.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_6"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_8"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 07-->

      <!--Carrusel  08-->
      <article class="item_carru" id="item8_carru">
        <div class="c_carru" id="c_item_8">
          <h5>Centro de Contabilidad (Nuevo Usuario)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad8();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad8.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_7"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_9"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 08-->

      <!--Carrusel  09-->
      <article class="item_carru" id="item9_carru">
        <div class="c_carru" id="c_item_9">
          <h5>Centro de Contabilidad (Asignar PIN)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad9();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad9.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_8"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_10"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 09-->

      <!--Carrusel  10-->
      <article class="item_carru" id="item10_carru">
        <div class="c_carru" id="c_item_10">
          <h5>Centro de Contabilidad (Nuevo Roll)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad10();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad10.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_9"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_11"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 10-->

      <!--Carrusel  11-->
      <article class="item_carru" id="item11_carru">
        <div class="c_carru" id="c_item_11">
          <h5>Centro de Contabilidad (Permisos y Privilegios)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad11();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad11.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_10"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_12"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 11-->

      <!--Carrusel  12-->
      <article class="item_carru" id="item12_carru">
        <div class="c_carru" id="c_item_12">
          <h5>Centro de Contabilidad (Permisos y Privilegios)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->contabilidad12();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['contabilidad'];
              }
              ?>
            </p>

            <img src="./images/S/contabilidad12.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#c_item_11"><i class='bx bxs-chevron-left'></i></a>
            <a href="#c_item_13"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 12-->

      <!--Carrusel TF 13-->
      <article class="item_carru" id="item13_carru">
        <div class="c_carru" id="c_item_13">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente2.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion12_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 11-->

    </div>
    <!--LECCION 11-->


    <!--LECCION 12-->
    <style>
      #leccion12 {
        display: none;
      }
    </style>

    <div id="leccion12" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="d_carru" id="d_item_1">
          <h5>Personalización de la Interfaz de Usuario</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->interfazU();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/p_interfaz_u1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#d_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="d_carru" id="d_item_2">
          <h5>Personalización de la Interfaz de Usuario</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->interfazU2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/p_interfaz_u2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#d_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#d_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="d_carru" id="d_item_3">
          <h5>Personalización de la Interfaz de Usuario</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->interfazU3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/p_interfaz_u3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#d_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#d_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="d_carru" id="d_item_4">
          <h5>Personalización de ña Interfaz de Usuario</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->interfazU4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/p_interfaz_u4.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#d_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#d_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->


      <!--Carrusel 05-->
      <article class="item_carru" id="item5_carru">
        <div class="d_carru" id="d_item_5">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion13_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel 05-->

    </div>
    <!--LECCION 12-->


    <!--LECCION 13-->
    <style>
      #leccion13 {
        display: none;
      }
    </style>

    <div id="leccion13" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="a_carru" id="a_item_1">
          <h5>Anidamiento de Tarbajos</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->anidamiento();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/anidamiento1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#a_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="a_carru" id="a_item_2">
          <h5>Anidamiento de Tarbajos</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->anidamiento2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/anidamiento2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#a_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#a_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="a_carru" id="a_item_3">
          <h5>Anidamiento de Tarbajos</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->anidamiento3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/anidamiento3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#a_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#a_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="a_carru" id="a_item_4">
          <h5>Anidamiento de Trabajos</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->anidamiento4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/anidamiento4.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#a_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#a_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->


      <!--Carrusel 05-->
      <article class="item_carru" id="item5_carru">
        <div class="a_carru" id="a_item_5">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente5.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion14_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel 05-->

    </div>
    <!--LECCION 13-->


    <!--LECCION 14-->
    <style>
      #leccion14 {
        display: none;
      }
    </style>

    <div id="leccion14" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="p_carru" id="p_item_1">
          <h5>Creado de Planatillas</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->plantillas();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/plantillas1.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#p_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="p_carru" id="p_item_2">
          <h5>Creado de Plantillas (Templates)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->plantillas2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/plantillas2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#p_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#p_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="p_carru" id="p_item_3">
          <h5>Creado de Planatillas (Propiedades de plantilla)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->plantillas3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/plantillas3.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#p_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#p_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="p_carru" id="p_item_4">
          <h5>Creado de Plantillas (Guardar Plantilla)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->plantillas4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/plantillas4.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#p_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#p_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->

      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="p_carru" id="p_item_5">
          <h5>Creado de Plantillas (Guardar Plantilla)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->plantillas5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/plantillas5.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#p_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#p_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->

      <!--Carrusel  05-->
      <article class="item_carru" id="item6_carru">
        <div class="p_carru" id="p_item_6">
          <h5>¿Como usar las plantillas generadas?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->plantillas6();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_ui'];
              }
              ?>
            </p>

            <img src="./images/S/plantillas6.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#p_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#p_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 06-->

      <!--Carrusel 07-->
      <article class="item_carru" id="item7_carru">
        <div class="p_carru" id="p_item_7">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion15_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel 07-->

    </div>
    <!--LECCION 14-->


    <!--LECCION 15-->
    <style>
      #leccion15 {
        display: none;
      }
    </style>

    <div id="leccion15" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="fc_carru" id="fc_item_1">
          <h5>Funciones de Configuración y Servicios I</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC1();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/kip.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#fc_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="fc_carru" id="fc_item_2">
          <h5>Guías de Usuario</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/S/guias1.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fc_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fc_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="fc_carru" id="fc_item_3">
          <h5>Ajustes de Servicio</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/S/ajustes1.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fc_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fc_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="fc_carru" id="fc_item_4">
          <h5>Niveles de Impresión y copiado (Medium)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/S/ajustes2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fc_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fc_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->

      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="fc_carru" id="fc_item_5">
          <h5>Hotname</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/S/hotname.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fc_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fc_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->

      <!--Carrusel  06-->
      <article class="item_carru" id="item6_carru">
        <div class="fc_carru" id="fc_item_6">
          <h5>Idioma</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC6();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/S/idioma.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fc_item_5"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fc_item_7"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 06-->

      <!--Carrusel  07-->
      <article class="item_carru" id="item7_carru">
        <div class="fc_carru" id="fc_item_7">
          <h5>Protocolo IPV4 & DNS</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesC7();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_i'];
              }
              ?>
            </p>

            <img src="./images/S/red.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fc_item_6"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fc_item_8"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 07-->

      <!--Carrusel 07-->
      <article class="item_carru" id="item8_carru">
        <div class="fc_carru" id="fc_item_8">
          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección.</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección.
            </p>

            <img src="./images/siguiente5.jpg" alt="">
          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion16_s();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel 07-->

    </div>
    <!--LECCION 15-->


    <!--LECCION 16-->
    <style>
      #leccion16 {
        display: none;
      }
    </style>

    <div id="leccion16" class="container-carac">

      <!--Carrusel  01-->
      <article class="item_carru" id="item1_carru">
        <div class="fcii_carru" id="fcii_item_1">
          <h5>Funciones de Configuración y Servicios II</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesCII();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_ii'];
              }
              ?>
            </p>

            <img src="./images/kip.png" alt="">

          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#fcii_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 01-->


      <!--Carrusel  02-->
      <article class="item_carru" id="item2_carru">
        <div class="fcii_carru" id="fcii_item_2">
          <h5>Configuración de Fecha y hora</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesCII2();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_ii'];
              }
              ?>
            </p>

            <img src="./images/S/fh.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fcii_item_1"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fcii_item_3"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 02-->


      <!--Carrusel  03-->
      <article class="item_carru" id="item3_carru">
        <div class="fcii_carru" id="fcii_item_3">
          <h5>Calibración de Toner</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesCII3();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_ii'];
              }
              ?>
            </p>

            <img src="./images/S/calibracionT.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fcii_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fcii_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 03-->


      <!--Carrusel  04-->
      <article class="item_carru" id="item4_carru">
        <div class="fcii_carru" id="fcii_item_4">
          <h5>Licencia</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesCII4();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_ii'];
              }
              ?>
            </p>

            <img src="./images/S/licencia1.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fcii_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fcii_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 04-->

      <!--Carrusel  05-->
      <article class="item_carru" id="item5_carru">
        <div class="fcii_carru" id="fcii_item_5">
          <h5>Licencia (Activación de Servicios)</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_k_s();
              $res  = $op->funcionesCII5();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['function_cog_ii'];
              }
              ?>
            </p>

            <img src="./images/S/licencia2.png" alt="">
          </div>


          <div class="ui_fle_carru">
            <a href="#fcii_item_4"><i class='bx bxs-chevron-left'></i></a>
            <a href="#fcii_item_6"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel 05-->


      <!--Carrusel 07-->
      <article class="item_carru" id="item6_carru">
        <div class="fcii_carru" id="fcii_item_6">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito la formación de Soporte para KIP G71</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Ir a la Evaluación" para comenzar la evaluación diagnostica<i class="ri-xbox-fill"></i> a</i> <i class="ri-vidicon-fill"></i>
            </p>
          </div>

          <div class="btn-enlaces-evaluacion">
            <a href="#">Ir a la Evaluación</a>
            <br>
            <a href="../KIPG71.php">Volver a los detalles de Inscripción</a>
          </div>

        </div>
      </article>
      <!--Carrusel 07-->

    </div>
    <!--LECCION 16-->



  </main>
  <!--Content-->


</body>

</html>