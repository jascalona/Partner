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
  <title>XDV ELearning VLB405</title>

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
      <p><small>Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al Curso de soporte para VersaLink B405</small></p>
    </div>


    <div class="btn-nav">
      <button class="btn btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
        <i class='bx bxs-food-menu' style='color: #ded4f6'></i>
      </button>

      <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="staticBackdropLabel"><strong>ELearning VLB405</strong></h5>
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
                <li><a class="dropdown-item" href="">Producto</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Conexiones de red
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion2();">Conexiones Cableadas</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion3();">Conexiones Inalámbrica</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion4();">Configurar una ip estática</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Protocolos de Red
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion5();">Configuración protocolo SMTP</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">Configuración protocolo LDAP</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Herramientas y ajustes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">¿Cómo acceder a diagnóstico?</a></li>
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion7();">Rutinas NVM</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Actualizaciones de Software 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Carga y actualizaciones</a></li>
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
    include './CONTROLLER/Conexion.php';
    include './CONTROLLER/select_s.php';
    ?>

    <!--END MODULO DE CARACTERISTICAS-->
    <div class="container-carac" id="leccion1">

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">


          <!--Carrusel 01-->
          <div class="carousel-item active">
            <h5>Soporte para Productos VersaLink</h5>

            <article class="content">
              <p class="paragraph">
                <?php
                $op = new select_cac();
                $res = $op->select_c2();
                while ($row = mysqli_fetch_array($res)) {
                  echo $row['carac'];
                }
                ?>
              </p>

              <img src="./images/S/carrusel_1.png" alt="IMG">

              <!--Navegation-->
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="bx bx-chevron-right" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <!--Navegation-->
            </article>
          </div>
          <!--Carrusel 01-->

          <!--Carrusel 02-->
          <div class="carousel-item">
            <h5>Características</h5>

            <article style="padding: 50pxs;" class="content">
              <p class="paragraph">
                <?php
                $op = new select_cac();
                $res3 = $op->select_c3();
                while ($row = mysqli_fetch_array($res3)) {
                  echo $row['carac'];
                }
                ?>
              </p>

              <img src="./images/H/medidas.png" alt="">

              <!--Navegation-->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="bx bx-chevron-left" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="bx bx-chevron-right" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <!--Navegation-->

            </article>
          </div>
          <!--Carrusel 02-->

          <!--Carrusel 03-->
          <div class="carousel-item" id="">
            <h5>Menú de navegación (Browser)</h5>

            <article class="content">
              <p class="paragraph">
                <?php
                $op = new select_cac();
                $res3 = $op->select_c4();
                while ($row = mysqli_fetch_array($res3)) {
                  echo $row['carac'];
                }
                ?>
              </p>

              <img src="./images/S/carrusel_4.png" alt="">


              <!--Navegation-->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="bx bx-chevron-left" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="bx bx-chevron-right" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <!--Navegation-->

            </article>
          </div>
          <!--Carrusel 03-->

           <!--Carrusel 04-->
           <div class="carousel-item" id="">
            <h5>Menú de navegación (Browser)</h5>

            <article class="content">
              <p class="paragraph">
                <?php
                $op = new select_cac();
                $res5 = $op->select_c5();
                while ($row = mysqli_fetch_array($res5)) {
                  echo $row['carac'];
                }
                ?>
              </p>

              <!--Navegation-->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="bx bx-chevron-left" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="bx bx-chevron-right" style="color: #000; font-size: 50px;" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <!--Navegation-->

            </article>
          </div>
          <!--Carrusel 04-->

          <!--Carrusel 04-->
          <div class="carousel-item" id="">
            <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

            <article class="content">
              <p class="paragraph">
                De Click en "Siguiente" para acceder a la lección II
              </p>
              <img src="./images/H/siguiente.jpg" alt="">
            </article>

            <div class="btn-leccion">
              <button id="boton" onclick="ir_leccion2();">
                Siguiente
              </button>
            </div>

          </div>
          <!--Carrusel 04-->

        </div>

      </div>
    </div>

    <!--LECCION 02-->
    <style>
      #leccion2 {
        display: none;
      }
    </style>

    <div id="leccion2" class="container-carac">


      <!--Carrusel ui 1-->
      <article class="item_carru" id="item1_carru">
        <div class="ui_carru" id="ui_item_1">
          <h5>Conexiones de Red</h5>

          <div class="content-general">
            <p class="paragraph">
              <?php
              $op = new select_cred();
              $res = $op->select_r();
              while ($row = mysqli_fetch_array($res)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/S/red1.png" alt="">

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
          <h5>Conexiones Cableadas</h5>

          <div class="content-general">
            <p class="paragraph">
              <?php
              $op = new select_cred();
              $res2 = $op->select_r2();
              while ($row2 = mysqli_fetch_array($res2)) {
                echo $row2['red'];
              }
              ?>
            </p>

            <img src="./images/S/red2.png" alt="">

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
          <h5>¿Qué se debe tener en cuenta para conectarse a través de USB?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_cred();
              $res3 = $op->select_r3();
              while ($row = mysqli_fetch_array($res3)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/S/red3.png" alt="">

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
          <h5>¿Qué se debe tener en cuenta para conectarse a través de Ethernet?</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_cred();
              $res3 = $op->select_r4();
              while ($row = mysqli_fetch_array($res3)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/S/red2.png" alt="">

          </div>


          <div class="ui_fle_carru">
            <a href="#ui_item_3"><i class='bx bxs-chevron-left'></i></a>
            <a href="#ui_item_5"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>

      </article>
      <!--Carrusel ui 3-->

      

      <!--Carrusel ui 04-->
      <article class="item_carru" id="item5_carru">
        <div class="ui_carru" id="ui_item_5">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección III
            </p>

            <img src="./images/H/siguiente2.jpg" alt="">

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
    <!--LECCION 02-->


    <!--LECCION 03-->
    <style>
      #leccion3 {
        display: none;
      }
    </style>

    <div id="leccion3" class="container-carac">


      <!--Carrusel ui 1-->
      <article class="item_carru" id="item1_carru">
        <div class="ac_carru" id="ac_item_1">
          <h5>Conexión Inalámbrica</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_cred();
              $res6 = $op->select_r5();
              while ($row = mysqli_fetch_array($res6)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/S/red4.png" alt="">

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
          <h5>Instalación de adaptador Wi-Fi</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_cred();
              $res7 = $op->select_r6();
              while ($row = mysqli_fetch_array($res7)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/S/red5.png" alt="">

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
          <h5>Configuración de red Wi-Fi</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_cred();
              $res8 = $op->select_r7();
              while ($row = mysqli_fetch_array($res8)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/H/soluciones_terceros.png" alt="">

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

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección IV
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
    <!--LECCION 03-->


    <!--LECCION 04-->
    <style>
      #leccion4 {
        display: none;
      }
    </style>

    <div id="leccion4" class="container-carac">

      <!--Carrusel HR 01-->
      <article class="item_carru" id="item1_carru">
        <div class="hr_carru" id="hr_item_1">
          <h5>Configurar una ip estática</h5>

          <div class="content-general">
            <p>
              <?php
              $op = new select_cred();
              $res8 = $op->select_r8();
              while ($row = mysqli_fetch_array($res8)) {
                echo $row['red'];
              }
              ?>
            </p>

            <img src="./images/S/red6.png" alt="img">
          </div>

          <div class="ui_fle_carru">
            <a href=""></a>
            <a href="#hr_item_2"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel HR 01-->

      <!--Carrusel HR 07-->
      <article class="item_carru" id="item2_carru">
        <div class="hr_carru" id="hr_item_2">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección V
            </p>

            <img src="./images/H/siguiente2.jpg" alt="">

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
    <!--LECCION 04-->

    <!--MODULO PROTOCOLOS DE RED-->
    <!--LECCION 05-->
    <style>
      #leccion5 {
        display: none;
      }
    </style>

    <div id="leccion5" class="container-carac">

      <!--Carrusel IP 01-->
      <article class="item_carru" id="item1_carru">
        <div class="in_carru" id="in_item_1">
          <h5>Configuración protocolo SMTP</h5>

          <div class="content-general">
            <p>
              <?php
              $oppro = new select_pro();
              $resP = $oppro->select_prot();
              while ($row = mysqli_fetch_array($resP)) {
                echo $row['protocolos'];
              }
              ?>
            </p>

            <img src="./images/S/protocol1.png" alt="img">
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
          <h5>Configuración protocolo LDAP</h5>

          <div class="content-general">
            <p>
              <?php
              $oppro = new select_pro();
              $resI2 = $oppro->select_prot2();
              while ($row = mysqli_fetch_array($resI2)) {
                echo $row['protocolos'];
              }
              ?>
            </p>

            <img src="./images/S/protocol2.png" alt="img">
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
          <h5>Test protocolo LDAP</h5>

          <div class="content-general">
            <p>
              <?php
              $oppro = new select_pro();
              $resP3 = $oppro->select_prot3();
              while ($row = mysqli_fetch_array($resP3)) {
                echo $row['protocolos'];
              }
              ?>
            </p>

            <img src="./images/S/protocol3.png" alt="img">
          </div>

          <div class="ui_fle_carru">
            <a href="#in_item_2"><i class='bx bxs-chevron-left'></i></a>
            <a href="#in_item_4"><i class='bx bxs-chevron-right'></i></a>
          </div>

        </div>
      </article>
      <!--Carrusel IP 03-->

      <!--Carrusel IP 05-->
      <article class="item_carru" id="item4_carru">
        <div class="hr_carru" id="in_item_4">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección VI
            </p>

            <img src="./images/H/siguiente3.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion6();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 05-->

      <!--LECCION 05-->

      <!--Carrusel IP 06-->
      <article class="item_carru" id="item6_carru">
        <div class="hr_carru" id="in_item_6">

          <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

          <div class="content-general">
            <p class="paragraph">
              De Click en "Siguiente" para acceder a la lección VI
            </p>

            <img src="./images/H/siguiente3.jpg" alt="">

          </div>

          <div class="btn-leccion">
            <button id="boton" onclick="ir_leccion5();">
              Siguiente
            </button>
          </div>

        </div>
      </article>
      <!--Carrusel IP 06-->

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