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
            <summary>Configuración de Buzón KIP<i class='bx bx-chevron-down' style='color:#4c4c4c'>/i>
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

      <?php include "./CONTROLLER/select_b8155.php"; ?>

      <!--Item 01-->
      <article class="item-card">
        <div class="contenido" id="item_1">
          <h6>Capacitación Xerox AltaLink Serie B8100</h6>
          <div class="contenct">
            <img src="./images/b8100.png" alt="#">
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
          <h6>Objetivos del curso</h6>
          <div class="contenct">
            <img src="./images/c2.png" alt="#">
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
          <h6>Instalación de hardware</h6>
          <div class="contenct">
            <img src="./images/i1.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Requisitos de espacio</h6>
          <div class="contenct">
            <img src="./images/i2.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Proceso de Intercambio</h6>
          <div class="contenct">
            <img src="./images/i3.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Instalación del Front End Digital (DFE)</h6>
          <div class="contenct">
            <img src="./images/i4.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Requisitos de energía</h6>
          <div class="contenct">
            <img src="./images/i5.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Configurar conexiones de red</h6>
          <div class="contenct">
            <img src="./images/i6.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Imprimir un informe de configuración</h6>
          <div class="contenct">
            <img src="./images/i8.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Problemas comunes de conectividad</h6>
          <div class="contenct">
            <img src="./images/i9.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Encedido y apagado</h6>
          <div class="contenct">
            <img src="./images/i10.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->i9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['instalation']);
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
          <h6>Operacion del Equipo (Divers)</h6>
          <div class="contenct">
            <img src="./images/o1.png" alt="#">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Controlador de Impresión como herramienta</h6>
          <div class="contenct">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Panel de control UI</h6>
          <div class="contenct">
            <img src="./images/o2.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Interfaz de usuario como herramienta</h6>
          <div class="contenct">
            <img src="./images/o3.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Descripción general de la navegación EWS</h6>
          <div class="contenct">
            <img src="./images/o5.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Descripción general de la navegación EWS</h6>
          <div class="contenct">
            <img src="./images/o6.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Identificar la versión actual del software</h6>
          <div class="contenct">
            <img src="./images/o7.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Métodos de actualización</h6>
          <div class="contenct">
            <img src="./images/o8.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Actualizaciones manuales</h6>
          <div class="contenct">
            <img src="./images/o9.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->o9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['operacion']);
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
          <h6>Rutas de papel DADF</h6>
          <div class="contenct">
            <img src="./images/tp1.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
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
          <h6>130 Sheet DADF</h6>
          <div class="contenct">
            <img src="./images/tp2.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>
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
          <h6>Atascos de papel: el problema más común</h6>
          <div class="contenct">
            <img src="./images/tp3.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
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
          <h6>Eliminacion de Atascos</h6>
          <div class="contenct">
            <img src="./images/tp4.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
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
          <h6>Eliminacion de Atascos</h6>
          <div class="contenct">
            <img src="./images/tp6.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>
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
          <h6>Eliminacion de Atascos</h6>
          <div class="contenct">
            <img src="./images/tp7.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>
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
          <h6>Rodillos de recorrido del papel</h6>
          <div class="contenct">
            <img src="./images/tp8.png" alt="">
            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>
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
          <h6>Animaciones de ruta de Papel</h6>
          <div class="contenct">

            <style>
              #animation1 {
                display: none;
              }

              #animation2 {
                display: none;
              }

              #animation3 {
                display: none;
              }

              #animation4 {
                display: none;
              }
            </style>

            <img src="./images/tray_1_to_exit1.gif" alt="" id="animation1">

            <img src="./images/tray_2_to_exit1.gif" alt="" id="animation2">

            <img src="./images/tray1_to_exit2.gif" alt="" id="animation3">

            <img src="./images/tray2_to_exit2.gif" alt="" id="animation4">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>

            <button id="boton" onclick="animation_tray1();">Bandeja 1 a Salida 1</button>

            <button id="boton" onclick="animation_tray2();">Bandeja 2 a Salida 1</button>

            <button id="boton" onclick="animation_tray1_exit2();">Bandeja 1 a Salida 2</button>

            <button id="boton" onclick="animation_tray2_exit_2();">Bandeja 2 a Salida 2</button>

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
          <h6>Animaciones de ruta de papel bypass</h6>
          <div class="contenct">

            <style>
              #animation5 {
                display: none;
              }

              #animation6 {
                display: none;
              }

              #animation7 {
                display: none;
              }
            </style>

            <img src="./images/bypass_tray_to_exit_1.gif" alt="" id="animation5">

            <img src="./images/bypass_tray_to_exit_2.gif" alt="" id="animation6">

            <img src="./images/bypass_tray_to_left_side_output_tray.gif" alt="" id="animation7">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>

            <button id="boton" onclick="bypass_tray_to_exit1();">Bypass a salida 1</button>

            <button id="boton" onclick="bypass_tray_to_exit2();">Bypass a salida 2</button>

            <button id="boton" onclick="bypass_tray_to_left_side_output_tray();">Bypass a salida del lado
              izquierdo</button>

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
          <h6>Ruta del papel duplex</h6>
          <div class="contenct">

            <img src="./images/paper_duplex.gif" alt="#">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp10();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
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
          <h6>Ubicaciones de atascos</h6>
          <div class="contenct">

            <img src="./images/tp9.png" alt="#">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp11();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
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
          <h6>Pasos para Eliminar atascos</h6>
          <div class="contenct">

            <style>
              #animation8 {
                display: none;
              }

              #animation9 {
                display: none;
              }

              #animation10 {
                display: none;
              }

              #animation11 {
                display: none;
              }

              #animation12 {
                display: none;
              }

              #animation13 {
                display: none;
              }

              #animation14 {
                display: none;
              }
            </style>

            <img src="./images/DAFD_jam_at_exit.gif" alt="" id="animation8">

            <img src="./images/DAFD_jam_at_extir_chute.gif" alt="" id="animation9">

            <img src="./images/DAFD_jam_under_top_cover.gif" alt="" id="animation10">

            <img src="./images/jam_at_fuser.gif" alt="" id="animation11">

            <img src="./images/jam_in_exit_gate_1.gif" alt="" id="animation12">

            <img src="./images/jam_in_duplexer.gif" alt="" id="animation13">

            <img src="./images/jam_at_outputof_tray3.gif" alt="" id="animation14">


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->tp12();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['transporte']);
              }
              ?>
            </p>

            <button id="boton" onclick="DADF_jam_at_exit();">DADF Jam at Exit</button>

            <button id="boton" onclick="DADF_jam_at_exit_chute();">DADF Jam at Exit Chute</button>

            <button id="boton" onclick="DADF_jam_under_top_cover();">DADF Jam under Top Cover</button>

            <button id="boton" onclick="jam_at_fuser();">Jam at Fuser</button>

            <button id="boton" onclick="jam_in_exit_gate();">Jam in Exit Gate 1</button>

            <button id="boton" onclick="jam_in_duplexer();">Jam in Duplexer</button>

            <button id="boton" onclick="jam_at_output_of_tray_3();">Jam at Output of Tray 3</button>



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
          <h6>Video del recorrido por los suministros</h6>
          <div class="contenct">

            <video width="100%" height="280" controls>
              <source src="./images/consumibles.mp4" type="video/mp4">
            </video>


            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant1();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Resumen de CRU</h6>
          <div class="contenct">

            <img src="./images/mant1.png" alt="#">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant2();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Fusor</h6>
          <div class="contenct">

            <img src="./images/mant2.png" alt="#">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant3();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Fusor Fallas comunes (Videos)</h6>
          <div class="contenct">

            <style>
              #animation_video1 {
                display: none;
              }
            </style>

            <video width="100%" height="280" controls id="animation_video1">
              <source src="./images/fusor1.mp4" type="video/mp4">
            </video>

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant4();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
              }
              ?>
            </p>

            <button id="boton" onclick="video_fuser();">Video del Fusor</button>

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
          <h6>Mantenimiento al cliente</h6>
          <div class="contenct">

            <img src="./images/mant3.png" alt="#" id="img_feed_roller">

            <style>
              #animation_video2 {
                display: none;
              }
            </style>

            <video width="100%" height="280" controls id="animation_video2">
              <source src="./images/feed_roller.mp4" type="video/mp4">
            </video>

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant5();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
              }
              ?>
            </p>

            <button id="boton" onclick="feed_roller();">Vídeo del rodillo de alimentación</button>

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
          <h6>Cartuchos de tambor</h6>
          <div class="contenct">

            <img src="./images/mant4.png" alt="#" id="img_drum">

            <style>
              #animation_video3 {
                display: none;
              }
            </style>

            <video width="100%" height="280" controls id="animation_video3">
              <source src="./images/drum_cartridges.mp4" type="video/mp4">
            </video>

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant6();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Consejos para los cartuchos de tóner residual</h6>
          <div class="contenct">

            <img src="./images/mant5.png" alt="#" id="img_drum">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant7();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Esperanza de vida de los suministros</h6>
          <div class="contenct">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant8();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Kits de rodillos de alimentación DADF</h6>
          <div class="contenct">

            <img src="./images/mant6.png" alt="" id="img_DADF">

            <style>
              #DADF_250 {
                display: none;
              }

              #DADF_130 {
                display: none;
              }
            </style>

            <video width="100%" height="280" controls id="DADF_250">
              <source src="./images/DADF_250.mp4" type="video/mp4">
            </video>

            <video width="100%" height="280" controls id="DADF_130">
              <source src="./images/DADF_130.mp4" type="video/mp4">
            </video>

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant9();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
              }
              ?>
            </p>

            <button id="boton" onclick="kit_dadf_250();">Kit de rodillo de alimentacón DADF 250
              hojas</button>
            <button id="boton" onclick="kit_dadf_130();">Kit de rodillo de alimentacón DADF 130
              hojas</button>


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
          <h6>Limpiar el exterior de la impresora</h6>
          <div class="contenct">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant10();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Limpieza del interior de la impresora</h6>
          <div class="contenct">

            <img src="./images/mant8.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant11();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Informe de configuración</h6>
          <div class="contenct">

            <img src="./images/mant9.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant12();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Códigos de error y falla</h6>
          <div class="contenct">

            <img src="./images/mant10.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant13();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Mensajes de alerta</h6>
          <div class="contenct">

            <img src="./images/mant11.png" alt="" id="">

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant14();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
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
          <h6>Historial de fallas</h6>
          <div class="contenct">

            <img src="./images/mant12.png" alt="" id="img_faul_history">

            <style>
              #faul_history_v {
                display: none;
              }
            </style>

            <video width="100%" height="280" controls id="faul_history_v">
              <source src="./images/simulation_fallas.mp4" type="video/mp4">
            </video>

            <p>
              <?php
              $op = new select_inst();
              $resD4 = $op->mant15();
              while ($row = mysqli_fetch_array($resD4)) {
                echo nl2br($row['mantenimiento']);
              }
              ?>
            </p>

            <button id="boton" onclick="faul_history();">Historial de Fallas</button>

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
          <h6>Felicidades <?php echo $_SESSION['name'] ?>, has culminado con exito la formación de Servicio
            para AltaLink B8155</h6>
          <div class="contenct">

            <img src="./images/siguiente2.jpg" alt="">

            <style>
              #faul_history_v {
                display: none;
              }
            </style>

            <video width="100%" height="280" controls id="faul_history_v">
              <source src="./images/simulation_fallas.mp4" type="video/mp4">
            </video>

            <p>
              De Click en "Ir a la Evaluación" para comenzar la evaluación diagnostica
            </p>

            <a href="">Ir a la Evaluación</a>
            <br>
            <a href="../B8155.php">Volver a los detalles de Inscripción</a>

          </div>

          <div class="btn-navigation">
            <button id="boton" onclick="ir_item_47();"><i class='bx bxs-left-arrow'></i></button>
          </div>
        </div>
      </article>
      <!--Item 48-->



    </div>

  </main>


</body>

</html>