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
    <!--SCRIPT-->


</head>
<body  class="grid-container">



        <header>
          <div class="text">
            <p><small>Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al Curso de Servicio Técnico para VersaLink B405</small></p>
          </div>

          
            <div class="btn-nav">
              <button class="btn btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                <i class='bx bxs-home' style='color: #ded4f6'></i>
              </button>
              
              <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="staticBackdropLabel"><strong>ELearning VLB405</strong></h5>
                  <button style="padding: 10px;" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class='bx bx-x' style='color:#ded4f6' ></i>
                  </button>
                </div>
                <div class="offcanvas-body">
                  
                  <div class="btn-cont">

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Caracteristicas de Producto
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Producto</a></li>
                        <li><a class="dropdown-item" href="#">Interfaz de Usuario</a></li>
                        <li><a class="dropdown-item" href="#">Actuación</a></li>
                        <li><a class="dropdown-item" href="#">Herramientas y recursos</a></li>
                      </ul>
                    </li>   
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Instalación
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Instalación de Producto</a></li>
                        <li><a class="dropdown-item" href="#">Conexionde red</a></li>
                        <li><a class="dropdown-item" href="#">Instalación del controlador</a></li>
                        <li><a class="dropdown-item" href="#">Herramientas y recursos</a></li>
                        <li><a class="dropdown-item" href="#">Impresiones y copias</a></li>
                        <li><re class="dropdown-item" href="#">Hardware de autenticación</a></li>
                      </ul>
                    </li>
          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teoria del funcionamiento
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Descripción general del sistema</a></li>
                        <li><a class="dropdown-item" href="#">Creando imagenes</a></li>
                        <li><a class="dropdown-item" href="#">Ruta del papel y sistema de alimentación</a></li>
                        <li><a class="dropdown-item" href="#">DADF Y escaner</a></li>
                      </ul>
                    </li>
          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mantenimiento
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Mantenimiento al cliente</a></li>
                        <li><a class="dropdown-item" href="#">Articulos remplazables por el cliente</a></li>
                        <li><a class="dropdown-item" href="#">Auto Ayuda</a></li>
                        <li><a class="dropdown-item" href="#">Atascos</a></li>
                        <li><a class="dropdown-item" href="#">Calidad de impresión</a></li>
                      </ul>
                    </li>
          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Herramientas y ajustes
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Herramientas de Servicio</a></li>
                        <li><a class="dropdown-item" href="#">Identificación del número de serie</a></li>
                        <li><a class="dropdown-item" href="#">Auto Ayuda</a></li>
                        <li><a class="dropdown-item" href="#">Software de máquina de carga</a></li>
                      </ul>
                    </li>
          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Problemas principales
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Recursos de apoyo local</a></li>
                        <li><a class="dropdown-item" href="#">Recursos para problemas comunes</a></li>
                      </ul>
                    </li>
                  </div>
                
                </div>
              </div>
            </div>
          

          
        
        </header>


        <nav>
  
          <div class="logo">
            <img src="./images/xdv.png" alt="">
          </div>

          <ul>
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Caracteristicas de Producto
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Producto</a></li>
              <li><a class="dropdown-item" href="#">Interfaz de Usuario</a></li>
              <li><a class="dropdown-item" href="#">Actuación</a></li>
              <li><a class="dropdown-item" href="#">Herramientas y recursos</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Instalación
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Instalación de Producto</a></li>
              <li><a class="dropdown-item" href="#">Conexionde red</a></li>
              <li><a class="dropdown-item" href="#">Instalación del controlador</a></li>
              <li><a class="dropdown-item" href="#">Herramientas y recursos</a></li>
              <li><a class="dropdown-item" href="#">Impresiones y copias</a></li>
              <li><re class="dropdown-item" href="#">Hardware de autenticación</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Teoria del funcionamiento
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Descripción general del sistema</a></li>
              <li><a class="dropdown-item" href="#">Creando imagenes</a></li>
              <li><a class="dropdown-item" href="#">Ruta del papel y sistema de alimentación</a></li>
              <li><a class="dropdown-item" href="#">DADF Y escaner</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mantenimiento
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Mantenimiento al cliente</a></li>
              <li><a class="dropdown-item" href="#">Articulos remplazables por el cliente</a></li>
              <li><a class="dropdown-item" href="#">Auto Ayuda</a></li>
              <li><a class="dropdown-item" href="#">Atascos</a></li>
              <li><a class="dropdown-item" href="#">Calidad de impresión</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Herramientas y ajustes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Herramientas de Servicio</a></li>
              <li><a class="dropdown-item" href="#">Identificación del número de serie</a></li>
              <li><a class="dropdown-item" href="#">Auto Ayuda</a></li>
              <li><a class="dropdown-item" href="#">Software de máquina de carga</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Problemas principales
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Recursos de apoyo local</a></li>
              <li><a class="dropdown-item" href="#">Recursos para problemas comunes</a></li>
            </ul>
          </li>

          </ul>
    
        </nav>

        <!--Content-->
          <main>

              <?php
                include './CONTROLLER/Conexion.php';
                include './CONTROLLER/select_c.php';
              ?>

              <div class="container-carac">

                <article>
                    <h5>Soporte Tecnico para VersaLink B405 & B400</h5>
                      <br>

                      <div class="content">
                        <p class="paragraph"><small>
                          <?php
                            $op = new select_c();
                            $res = $op->SelectC();
                            while ($row = mysqli_fetch_array($res)) {
                              echo $row['caracteristicas'];
                            }  
                          ?>
                        </small></p>
                        <img src="./images/H/b405.jpg" alt="">
                      </div>

                  </article>

              </div>
          </main>
        <!--Content-->