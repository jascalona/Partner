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
  <link rel="stylesheet" href="./CSS_SERVICE/style_service.css">
  <link rel="stylesheet" href="./CSS_SERVICE/Bootstrap.css">
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
      <p><small>Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al Curso de soporte para KIP
          G71</small></p>
    </div>
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
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">E-Learning KIP G71</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

          <!--#01-->
          <details>
            <summary>Característica de Producto <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
            </summary>
            <p><small>
                <a id="boton" onclick="ir_item_2();">Plotter KIP G71</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Característica Generales</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Características de Escáner</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Introducción</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Técnologia de Impresion de alta definición (HDP)</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Técnologia de Velocidad Constante</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Máxima durabilidad de Imagen</a>
                <br>
                <a id="boton" onclick="ir_item_2();">Capacidad del Medio</a>
              </small></p>
          </details>
          <!--#01-->

          <!--#02-->
          <details>
            <summary>Controlador y utilidades<i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
            </summary>
            <p><small>
                <a id="boton" onclick="ir_item_3();">Descarga del Controlador</a>
                <br>
                <a id="boton" onclick="ir_item_8();">Instalación del Controlador</a>
                <br>
                <a id="boton" onclick="ir_item_11();">Instalación del Controlador .EXE</a>
                <br>
                <a id="boton" onclick="ir_item_11();">Configuración del Controlador de Impresión</a>
                <br>
                <a id="boton" onclick="ir_item_11();">¿Cómo remover el Controlador de Impresión?</a>
                <br>
                <a id="boton" onclick="ir_item_11();">¿Cómo usar el Controlador de Impresión?</a>
                <br>
                <a id="boton" onclick="ir_item_11();">¿Cómo usar las propiedades del Controlador?</a>
                <br>
                <a id="boton" onclick="ir_item_11();">Interfaz de Impresión</a>
                <br>
                <a id="boton" onclick="ir_item_11();">KIP ImagePro</a>
                <br>
                <a id="boton" onclick="ir_item_11();">KIP ImagePro (Resumen de Uso)</a>
                <br>
                <a id="boton" onclick="ir_item_11();">¿Cómo Descargar el KIP ImagePro?</a>
                <br>
                <a id="boton" onclick="ir_item_11();">¿Cómo Instalar el KIP ImagePro?</a>
                <br>
                <ac id="boton" onclick="ir_item_11();">Creación y guardado de trabajos</a>
                  <br>
                  <te id="boton" onclick="ir_item_11();">Creación y uso de ajustes prestablecidos</a>
                    <br>
                    <a id="boton" onclick="ir_item_11();">Creación de multiples trabajos</a>
                    <br>
                    <a id="boton" onclick="ir_item_11();">¿Cómo utilizar la configuración de calidad de Impresión?</a>
                    <br>
                    <a id="boton" onclick="ir_item_11();">KIP PrintPro.net</a>
                    <br>
              </small></p>
          </details>
          <!--#02-->

          <!--#03-->
          <details>
            <summary>Configuración de Buzón KIP<i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
            </summary>
            <p><small>
                <a id="boton" onclick="ir_item_12();">Digitalización en Red</a>
                <br>
                <a id="boton" onclick="ir_item_14();">Local Mailbox</a>
              </small></p>
          </details>
          <!--#03-->

          <!--#04-->
          <details>
            <summary>Sistema Operativo <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
            </summary>
            <p><small>
                <a id="boton" onclick="ir_item_21();">Formware USB serie 71</a>
                <br>
                <a id="boton" onclick="ir_item_27();">Actualización usando parche de seguridad</a>
                <br>
                <a id="boton" onclick="ir_item_33();">Restauración Interna</a>
                <br>
              </small></p>
          </details>
          <!--#04-->


          <!--#05-->
          <details>
            <summary>Contabilidad<i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
            </summary>
            <p><small>
                <a id="boton" onclick="ir_item_37();">Contabilidad</a>
              </small></p>
          </details>
          <!--#05-->

          <!--#06-->
          <details>
            <summary>Funciones UI<i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
            </summary>
            <p><small>
                <a id="boton" onclick="ir_item_37();">Personalización de la Interfaz de Usuario</a>
                <br>
                <a id="boton" onclick="ir_item_37();">Anidamiento</a>
                <br>
                <a id="boton" onclick="ir_item_37();">Creación de Plantillas</a>
                <br>
                <a id="boton" onclick="ir_item_37();">Funciones de Configuración y Servicios I</a>
                <br>
                <a id="boton" onclick="ir_item_37();">Funciones de configuración y Servicios II</a>
              </small></p>
          </details>
          <!--#06-->


        </div>
      </div>
    </div>



    <div class="container-document">

      <?php include "./CONTROLLER/select_k_s.php"; ?>

      <!--Item 01-->
      <article class="item-card">
        <div class="contenido" id="item_1">
          <h6>Plotter KIP G71</h6>
          <div class="contenct">
            <img src="./images/S/p1.png" alt="#">
            <p>
              <?php
              $op = new select_cac();
              $resD4 = $op->c1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
          </div>

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
          <h6>Caracteristicas Generales</h6>
          <div class="contenct">
            <img src="./images/S/P2.png" alt="#">
            <p>
              <?php
              $op = new select_cac();
              $resD4 = $op->c2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Caracteristicas de Impresora</h6>
          <div class="contenct">
            <img src="./images/S/p3.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Caracteristicas Controlador</h6>
          <div class="contenct">
            <img src="./images/S/p4.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Caracteristicas de Escáner</h6>
          <div class="contenct">
            <img src="./images/S/P2.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Tecnología de impresión de alta definición (HDP)</h6>
          <div class="contenct">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Tecnología de impresión de alta definición (HDP)</h6>
          <div class="contenct">
            <img src="./images/S/t1.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Tecnología de Velocidad Constante</h6>
          <div class="contenct">
            <img src="./images/S/t2.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Máxima durabilidad de la imagen</h6>
          <div class="contenct">
            <img src="./images/S/t3.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Capacidad de Medio</h6>
          <div class="contenct">
            <img src="./images/S/t4.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['caracteristicas']);
              }
              ?>
            </p>
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
          <h6>Descarga del Controlador</h6>
          <div class="contenct">
            <img src="./images/S/driver1.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_10();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_12();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 11-->

      <!--Item 12-->
      <style>
        #item_12 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_12">
          <h6>Instalación del Controlador</h6>
          <div class="contenct">
            <img src="./images/S/driver2.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_11();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_13();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 12-->

      <!--Item 13-->
      <style>
        #item_13 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_13">
          <h6>Instalación del Controlador .EXE</h6>
          <div class="contenct">
            <img src="./images/S/driver3.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_12();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_14();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 13-->


      <!--Item 14-->
      <style>
        #item_14 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_14">
          <h6>Configuración del Controlador de Impresión</h6>
          <div class="contenct">
            <img src="./images/S/driver4.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_13();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_15();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 14-->

      <!--Item 15-->
      <style>
        #item_15 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_15">
          <h6>Configuración del Controlador de Impresión</h6>
          <div class="contenct">
            <img src="./images/S/driver5.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_14();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_16();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 15-->

      <!--Item 16-->
      <style>
        #item_16 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_16">
          <h6>¿Cómo remover el controlador de impresión?</h6>
          <div class="contenct">
            <img src="./images/S/driver6.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_15();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_17();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 16-->


      <!--Item 17-->
      <style>
        #item_17 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_17">
          <h6>¿Cómo remover el controlador de impresión?</h6>
          <div class="contenct">
            <img src="./images/S/driver7.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_16();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_18();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 17-->

      <!--Item 18-->
      <style>
        #item_18 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_18">
          <h6>¿Cómo usar el controlador de impresión?</h6>
          <div class="contenct">
            <img src="./images/S/driver8.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_17();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_19();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 18-->


      <!--Item 19-->
      <style>
        #item_19 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_19">
          <h6>¿Cómo usar las propiedades del controlador?</h6>
          <div class="contenct">
            <img src="./images/S/driver9.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['driver']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_18();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_20();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 19-->

      <!--Item 20-->
      <style>
        #item_20 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_20">
          <h6>Interfaz de Impresión</h6>
          <div class="contenct">
            <img src="./images/S/interfazP1.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['interfazP']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_19();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_21();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 20-->

      <!--Item 21-->
      <style>
        #item_21 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_21">
          <h6>KIP ImagePro</h6>
          <div class="contenct">
            <img src="./images/S/interfazP2.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['interfazP']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_20();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_22();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 21-->

      <!--Item 22-->
      <style>
        #item_22 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_22">
          <h6>KIP ImagePro (Resumen de Uso)</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/S/KIP ImagePro SP.mp4" type="video/mp4">
            </video>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_21();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_23();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 22-->


      <!--Item 23-->
      <style>
        #item_23 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_23">
          <h6>¿Cómo descargar el KIP ImagePro?</h6>
          <div class="contenct">
            <img src="./images/S/driver2.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['interfazP']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_22();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_24();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 23-->


      <!--Item 24-->
      <style>
        #item_24 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_24">
          <h6>¿Cómo Instalar el KIP ImagePro?</h6>
          <div class="contenct">
            <img src="./images/S/interfazP4.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['interfazP']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_23();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_25();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 24-->

      <!--Item 25-->
      <style>
        #item_25 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_25">
          <h6>Creación y guardado de trabajos</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/S/creado_guardado_trabajos.mp4" type="video/mp4">
            </video>


          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_24();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_26();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 25-->

      <!--Item 26-->
      <style>
        #item_26 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_26">
          <h6>Creación y uso de ajustes prestablecidos</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/S/creacion_ajustes_prestablecidos.mp4" type="video/mp4">
            </video>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_25();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_27();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 26-->


      <!--Item 27-->
      <style>
        #item_27 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_27">
          <h6>Creación de múltiples trabajos</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/S/creacion_multiples_trabajos.mp4" type="video/mp4">
            </video>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_26();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_28();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 27-->


      <!--Item 28-->
      <style>
        #item_28 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_28">
          <h6>Cómo utilizar la configuración de calidad de impresión</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/S/calidad_impresion.mp4" type="video/mp4">
            </video>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_27();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_29();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 28-->


      <!--Item 29-->
      <style>
        #item_29 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_29">
          <h6>KIP PrintPro.net</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/S/interfazP2.png" type="video/mp4">
            </video>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_28();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_30();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 29-->


      <!--Item 30-->
      <style>
        #item_30 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_30">
          <h6>Digitalizacion en red</h6>
          <div class="contenct">

            <img src="./images/S/scanerR1.png" alt="#">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp6();
              while ($row = mysqli_fetch_array(result: $resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_29();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_31();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 30-->


      <!--Item 31-->
      <style>
        #item_31 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_31">
          <h6>Digitalización en red</h6>
          <div class="contenct">

            <img src="./images/S/scanerR2.png" alt="#">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_30();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_32();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 31-->


      <!--Item 32-->
      <style>
        #item_32 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_32">
          <h6>Digitalización en red (New Mailbox)</h6>
          <div class="contenct">
            <img src="./images/S/scanerR3.png" alt="" id="animation14">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>


          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_31();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_33();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 32-->


      <!--Item 33-->
      <style>
        #item_33 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_33">
          <h6>Digitalización en red (New Mailbox)</h6>
          <div class="contenct">

            <img src="./images/S/scanerR4.png" alt="" id="animation14">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_32();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_34();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 33-->


      <!--Item 34-->
      <style>
        #item_34 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_34">
          <h6>Digitalización en red (Configuración del Buzón)</h6>
          <div class="contenct">

            <img src="./images/S/scanerR5.png" alt="#">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp10();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_33();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_35();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 34-->


      <!--Item 35-->
      <style>
        #item_35 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_35">
          <h6>Local Mailbox</h6>
          <div class="contenct">

            <img src="./images/S/scanerR5.png" alt="#">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp11();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_34();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_36();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 35-->


      <!--Item 36-->
      <style>
        #item_36 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_36">
          <h6>Local Mailbox</h6>
          <div class="contenct">

            <img src="./images/S/scanerR2.png" alt="#">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp12();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_35();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_37();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 36-->


      <!--Item 37-->
      <style>
        #item_37 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_37">
          <h6>Digitalización Local (New Mailbox)</h6>
          <div class="contenct">

            <img src="./images/S/scanerL1.png" alt="#" id="img_feed_roller">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_36();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_38();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 37-->


      <!--Item 38-->
      <style>
        #item_38 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_38">
          <h6>Local Mailbox (Configuración del Buzón)</h6>
          <div class="contenct">

            <img src="./images/S/scanerL2.png" alt="#" id="img_drum">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>

            <button id="boton" onclick="drum_cartridges();">Vídeo sobre cartuchos de tambor</button>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_37();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_39();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 38-->


      <!--Item 39-->
      <style>
        #item_39 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_39">
          <h6>Local Mailbox (Configuración del Búzon)</h6>
          <div class="contenct">

            <img src="./images/S/scanerL2.png" alt="#" id="img_drum">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>


          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_38();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_40();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 39-->

      <!--Item 40-->
      <style>
        #item_40 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_40">
          <h6>Local Mailbox (Vista Previa del directorio Local)</h6>
          <div class="contenct">
            <img src="./images/S/scanerL3.png" alt="#">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['conf_b']);
              }
              ?>
            </p>


          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_39();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_41();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 40-->

      <!--Item 41-->
      <style>
        #item_41 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_41">
          <h6>Actualizacion de Formware USB (Preparar el archivo)</h6>
          <div class="contenct">

            <img src="./images/S/firmware1.png" alt="" id="img_DADF">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_40();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_42();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 41-->

      <!--Item 42-->
      <style>
        #item_42 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_42">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware2.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_41();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_43();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 42-->


      <!--Item 43-->
      <style>
        #item_43 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_43">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware3.png" alt="#" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_42();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_44();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 43-->


      <!--Item 44-->
      <style>
        #item_44 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_44">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware4.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_43();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_45();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 44-->

      <!--Item 45-->
      <style>
        #item_45 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_45">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware5.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant10();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_44();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_46();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 45-->


      <!--Item 46-->
      <style>
        #item_46 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_46">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware6.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant11();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_45();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_47();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 46-->


      <!--Item 47-->
      <style>
        #item_47 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_47">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware7.png" alt="" id="img_faul_history">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant12();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_46();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_48();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 47-->


      <!--Item 48-->
      <style>
        #item_48 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_48">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware8.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant13();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_47();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_49();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 48-->

      <!--Item 49-->
      <style>
        #item_49 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_49">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware9.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant14();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_48();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_50();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 49-->

      <!--Item 50-->
      <style>
        #item_50 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_50">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware10.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant15();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_49();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_51();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 50-->


      <!--Item 51-->
      <style>
        #item_51 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_51">
          <h6>Actualización de Firmware (Abrir la GUI del mantenimiento de KCS)</h6>
          <div class="contenct">

            <img src="./images/S/firmware11.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant16();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_50();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_52();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 51-->

      <!--Item 52-->
      <style>
        #item_52 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_52">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad1.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant17();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_51();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_53();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 52-->

      <!--Item 53-->
      <style>
        #item_53 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_53">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad2.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant18();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_52();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_54();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 53-->


      <!--Item 54-->
      <style>
        #item_54 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_54">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant19();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_53();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_55();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 54-->

      <!--Item 55-->
      <style>
        #item_55 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_55">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad4.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant20();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_54();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_56();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 55-->


      <!--Item 56-->
      <style>
        #item_56 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_56">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad5.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant21();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_55();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_57();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 56-->


      <!--Item 57-->
      <style>
        #item_57 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_57">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad6.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant22();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_56();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_58();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 57-->


      <!--Item 58-->
      <style>
        #item_58 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_58">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad7.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant23();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_57();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_59();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 58-->


      <!--Item 59-->
      <style>
        #item_59 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_59">
          <h6>Actualización usando parche de seguridad</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad8.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant24();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_58();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_60();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 59-->


      <!--Item 60-->
      <style>
        #item_60 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_60">
          <h6>Proceso de Actualización</h6>
          <div class="contenct">

            <img src="./images/S/cSeguridad10.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant25();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['so']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_59();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_61();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 60-->


      <!--Item 61-->
      <style>
        #item_61 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_61">
          <h6>Restauración Interna</h6>
          <div class="contenct">

            <img src="./images/kip.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant26();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['restauracion']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_60();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_62();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 61-->


      <!--Item 62-->
      <style>
        #item_62 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_62">
          <h6>Restauración Interna</h6>
          <div class="contenct">

            <img src="./images/S/restauracion2.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant27();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['restauracion']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_61();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_63();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 62-->


      <!--Item 63-->
      <style>
        #item_63 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_63">
          <h6>Restauración Interna</h6>
          <div class="contenct">

            <img src="./images/S/restauracion3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant28();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['restauracion']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_61();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_63();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 63-->


      <!--Item 64-->
      <style>
        #item_64 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_64">
          <h6>Restauración Interna</h6>
          <div class="contenct">

            <img src="./images/S/restauracion4.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant29();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['restauracion']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_62();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_64();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 64-->


      <!--Item 65-->
      <style>
        #item_65 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_65">
          <h6>Restauración Interna</h6>
          <div class="contenct">

            <img src="./images/S/restauracion5.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant30();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['restauracion']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_64();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_66();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 65-->



      <!--Item 66-->
      <style>
        #item_66 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_66">
          <h6>Centro de Contabilidad</h6>
          <div class="contenct">

            <img src="./images/kip.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant31();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_65();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_67();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 66-->


      <!--Item 67-->
      <style>
        #item_67 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_67">
          <h6>Centro de Contabilidad</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad1.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant32();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_66();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_68();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 67-->


      <!--Item 68-->
      <style>
        #item_68 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_68">
          <h6>Centro de Contabilidad</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad2.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant33();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_67();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_69();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 68-->

      <!--Item 69-->
      <style>
        #item_69 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_69">
          <h6>Centro de Contabilidad (Copia)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant34();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_68();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_70();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 69-->


      <!--Item 70-->
      <style>
        #item_70 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_70">
          <h6>Centro de Contabilidad (Scan)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant35();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_69();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_71();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 70-->

      <!--Item 71-->
      <style>
        #item_71 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_71">
          <h6>Centro de Contabilidad</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad4.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant35();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_70();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_72();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 71-->


      <!--Item 72-->
      <style>
        #item_72 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_72">
          <h6>Centro de Contabilidad</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad5.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant36();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_71();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_73();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 72-->


      <!--Item 73-->
      <style>
        #item_73 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_73">
          <h6>Centro de Contabilidad</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad6.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant37();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_72();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_74();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 73-->


      <!--Item 74-->
      <style>
        #item_74 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_74">
          <h6>Centro de Contabilidad (Nuevo Usuario)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad8.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant38();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_73();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_75();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 74-->


      <!--Item 75-->
      <style>
        #item_75 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_75">
          <h6>Centro de Contabilidad (Asiganer PIN)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad9.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant39();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_74();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_76();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 75-->


      <!--Item 76-->
      <style>
        #item_76 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_76">
          <h6>Centro de Contabilidad (Asiganer PIN)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad10.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant40();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_75();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_77();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 76-->


      <!--Item 77-->
      <style>
        #item_77 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_77">
          <h6>Centro de Contabilidad (Permisos y Privilegios)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad11.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant41();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_76();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_78();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 77-->


      <!--Item 78-->
      <style>
        #item_78 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_78">
          <h6>Centro de Contabilidad (Permisos y Privilegios)</h6>
          <div class="contenct">

            <img src="./images/S/contabilidad12.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant42();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['contabilidad']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_77();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_79();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 78-->


      <!--Item 79-->
      <style>
        #item_79 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_79">
          <h6>Personalización de la Interfaz de Usuario</h6>
          <div class="contenct">

            <img src="./images/S/p_interfaz_u1.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant43();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_78();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_80();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 79-->

      <!--Item 80-->
      <style>
        #item_80 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_80">
          <h6>Personalización de la Interfaz de Usuario</h6>
          <div class="contenct">

            <img src="./images/S/p_interfaz_u2.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant44();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_79();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_81();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 80-->


      <!--Item 81-->
      <style>
        #item_81 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_81">
          <h6>Personalización de la Interfaz de Usuario</h6>
          <div class="contenct">

            <img src="./images/S/p_interfaz_u3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant43();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_80();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_82();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 81-->


      <!--Item 82-->
      <style>
        #item_82 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_82">
          <h6>Personalización de la Interfaz de Usuario</h6>
          <div class="contenct">

            <img src="./images/S/p_interfaz_u1.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant44();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_81();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_83();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 82-->

      <!--Item 83-->
      <style>
        #item_83 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_83">
          <h6>Personalización de la Interfaz de Usuario</h6>
          <div class="contenct">

            <img src="./images/S/p_interfaz_u3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant45();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_82();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_84();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 83-->

      <!--Item 84-->
      <style>
        #item_84 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_84">
          <h6>Personalización de la Interfaz de Usuario</h6>
          <div class="contenct">

            <img src="./images/S/p_interfaz_u4.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant46();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_83();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_85();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 84-->


      <!--Item 85-->
      <style>
        #item_85 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_85">
          <h6>Anidamiento de Trabajos</h6>
          <div class="contenct">

            <img src="./images/S/anidamiento1.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant47();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_84();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_86();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 85-->


      <!--Item 86-->
      <style>
        #item_86 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_86">
          <h6>Anidamiento de Trabajos</h6>
          <div class="contenct">

            <img src="./images/S/anidamiento2.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant48();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_84();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_86();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 86-->


      <!--Item 87-->
      <style>
        #item_87 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_87">
          <h6>Anidamiento de Trabajos</h6>
          <div class="contenct">

            <img src="./images/S/anidamiento3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant49();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_86();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_88();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 87-->


      <!--Item 88-->
      <style>
        #item_88 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_88">
          <h6>Anidamiento de Trabajos</h6>
          <div class="contenct">

            <img src="./images/S/anidamiento4.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant50();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_87();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_89();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 88-->


      <!--Item 89-->
      <style>
        #item_89 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_89">
          <h6>Creado de Plantillas</h6>
          <div class="contenct">

            <img src="./images/S/plantillas1.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant51();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_88();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_90();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 89-->


      <!--Item 90-->
      <style>
        #item_90 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_90">
          <h6>Creado de Plantillas (Templates)</h6>
          <div class="contenct">

            <img src="./images/S/plantillas2.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant52();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_89();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_91();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 90-->


      <!--Item 91-->
      <style>
        #item_91 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_91">
          <h6>Creado de Plantillas (Propiedades de Plantillas)</h6>
          <div class="contenct">

            <img src="./images/S/plantillas3.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant53();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_90();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_92();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 91-->


      <!--Item 92-->
      <style>
        #item_92 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_92">
          <h6>Creado de Plantillas (Guardar Platilla)</h6>
          <div class="contenct">

            <img src="./images/S/plantillas4.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant54();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_91();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_93();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 92-->


      <!--Item 93-->
      <style>
        #item_93 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_93">
          <h6>Creado de Plantillas (Guardar Platilla)</h6>
          <div class="contenct">

            <img src="./images/S/plantillas5.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant55();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_92();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_94();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 93-->


      <!--Item 94-->
      <style>
        #item_94 {
          display: none;
        }
      </style>

      <article class="item-card">
        <div class="contenido" id="item_94">
          <h6>¿Cómo usar las plantillas generadas?</h6>
          <div class="contenct">

            <img src="./images/S/plantillas6.png" alt="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant56();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['function_ui']);
              }
              ?>
            </p>
          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_93();"><i class='bx bxs-left-arrow'></i></button>
            <button id="boton" onclick="ir_item_95();"><i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 94-->







    </div>

  </main>


</body>

</html>