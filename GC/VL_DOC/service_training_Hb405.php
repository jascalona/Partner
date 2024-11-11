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
    <script src="./JS_training/btn_leccion.js"></script>
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
                        <li><a class="dropdown-item" href="#img_item1_carru">Producto</a></li>
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion2();">Interfaz de Usuario</a></li>
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion3();">Actuación</a></li>
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion4();">Herramientas y recursos</a></li>
                      </ul>
                    </li>   
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Instalación
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion5();">Instalación de Producto</a></li>
                      </ul>
                    </li>
          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teoria del funcionamiento
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion6();">Descripción general del sistema</a></li>
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion7();">Creado de imágenes</a></li>
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Sistema de alimentacion</a></li>
                        <li><a class="dropdown-item" id="boton" onclick="ir_leccion9();">DADF y escáner</a></li>

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
              <li><a class="dropdown-item" href="">Producto</a></li>
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion2();">Interfaz de Usuario</a></li>
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion3();">Actuación</a></li>
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion4();">Herramientas y recursos</a></li>
            </ul>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Instalación
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion5();">Instalación de Producto</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Teoria del funcionamiento
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item"id="boton" onclick="ir_leccion6();">Descripción general del sistema</a></li>
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion7();">Creado de imágenes</a></li>
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion8();">Sistema de alimentacion</a></li>
              <li><a class="dropdown-item" id="boton" onclick="ir_leccion9();">DADF y escáner</a></li>

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

            <!--END MODULO DE CARACTERISTICAS-->
            <div class="container-carac" id="leccion1">

              <div id="carouselExample" class="carousel slide">
                <div  class="carousel-inner">
                  

                <!--Carrusel 01-->                
                  <div class="carousel-item active">
                      <h5>Soporte Técnico para Productos VersaLink</h5>

                      <article class="content">
                        <p class="paragraph">
                            <?php
                              $op = new select_c();
                              $res = $op->SelectC();
                              while ($row = mysqli_fetch_array($res)) {
                                echo $row['caracteristicas'];
                              }
                            ?>
                        </p>

                        <img src="./images/H/b405.jpg" alt="IMG">

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
                      <h5>Caracteristicas</h5>

                      <article style="padding: 50pxs;" class="content">
                        <p class="paragraph">
                          <?php
                            $op = new select_c();
                            $res2 = $op->SelectC2();
                            while ($row2 = mysqli_fetch_array($res2)) {
                              echo $row2['caracteristicas'];
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
                      <h5>Opciones</h5>

                      <article class="content">
                        <p class="paragraph">
                          <?php
                            $op = new select_c();
                            $res2 = $op->SelectC3();
                            while ($row2 = mysqli_fetch_array($res2)) {
                              echo $row2['caracteristicas'];
                            }
                          ?>
                        </p>

                        <img src="./images/H/carrusel_3.png" alt="">

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
                      <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                      <article class="content">
                        <p class="paragraph">
                          De Click en "Siguiente" para acceder a la lección II
                        </p>
                        <img src="./images/H/siguiente.jpg" alt="">
                      </article>

                      <div class="btn-leccion">
                            <button id="boton" onclick="ir_leccion2();" >
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
              #leccion2{display: none;}
            </style>

            <div id="leccion2" class="container-carac">
              
            
              <!--Carrusel ui 1-->
              <article class="item_carru" id="item1_carru" >
                <div class="ui_carru" id="ui_item_1">
                  <h5>Interfaz de Usuario</h5>

                    <div class="content-general">
                      <p class="paragraph">
                        <?php
                          $op = new select_c();
                          $res2 = $op->SelectC4();
                          while ($row2 = mysqli_fetch_array($res2)) {
                            echo $row2['caracteristicas'];
                          }
                        ?>
                      </p>

                    </div>

                    <div class="ui_fle_carru">
                      <a href=""></a>
                      <a href="#ui_item_2"><i class='bx bxs-chevron-right'></i></a>
                    </div>

                </div>  

              </article>
              <!--Carrusel ui 1-->


              <!--Carrusel ui 2-->
              <article class="item_carru" id="item2_carru" >
                <div class="ui_carru" id="ui_item_2">
                  <h5>Controladores de impresion y escaneo</h5>

                    <div class="content-general">
                      <p class="paragraph">
                        <?php
                          $op = new select_c();
                          $res2 = $op->SelectC5();
                          while ($row2 = mysqli_fetch_array($res2)) {
                            echo $row2['caracteristicas'];
                          }
                        ?>
                      </p>

                      <img src="./images/H/controladores.png" alt="">

                    </div>

                    <div class="ui_fle_carru">                      
                      <a href="#ui_item_1"><i class='bx bxs-chevron-left'></i></a>
                      <a href="#ui_item_3"><i class='bx bxs-chevron-right'></i></a>
                    </div>

                </div>  

              </article>
              <!--Carrusel ui 2-->

               <!--Carrusel ui 3-->
               <article class="item_carru" id="item2_carru" >
                <div class="ui_carru" id="ui_item_3">
                  <h5>Servidor web Integrado</h5>

                      <div class="content-general">
                        <p>
                          <?php
                            $op = new select_c();
                            $res6 = $op->SelectC6();
                            while ($row6 = mysqli_fetch_array($res6)) {
                              echo $row6['caracteristicas'];
                            }
                          ?>
                        </p>

                        <img src="./images/H/web.png" alt="">

                      </div>


                <div class="ui_fle_carru">
                    <a href="#ui_item_2"><i class='bx bxs-chevron-left'></i></a>
                    <a href="#ui_item_4"><i class='bx bxs-chevron-right'></i></a>
                  </div>

                </div>  
                
              </article>
              <!--Carrusel ui 3-->

              <!--Carrusel ui 04-->
              <article class="item_carru" id="item4_carru" >
                <div class="ui_carru" id="ui_item_4">

                <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                    <div class="content-general">
                      <p class="paragraph">
                            De Click en "Siguiente" para acceder a la lección III
                      </p>

                      <img src="./images/H/siguiente2.jpg" alt="">

                    </div>

                      <div class="btn-leccion">
                        <button id="boton" onclick="ir_leccion3();" >
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
              #leccion3{display: none;}
           </style>
  
            <div id="leccion3" class="container-carac">
                
              
                <!--Carrusel ui 1-->
                <article class="item_carru" id="item1_carru" >
                  <div class="ac_carru" id="ac_item_1">
                    <h5>Factores de rendimiento de velocidad</h5>
  
                    <div class="content-general">
                      <p>
                        <?php
                          $op = new select_c();
                          $res7 = $op->SelectC7();
                          while ($row7 = mysqli_fetch_array($res7)) {
                            echo $row7['caracteristicas'];
                          }
                        ?>
                      </p>

                      <img style="height: 300px;" src="./images/H/factores.png" alt="">

                    </div>

                      <div class="ui_fle_carru">
                        <a href=""></a>
                        <a href="#ac_item_2"><i class='bx bxs-chevron-right'></i></a>
                      </div>
  
                  </div>  
  
                </article>
                <!--Carrusel ui 1-->
  
                <!--Carrusel ui 2-->
                <article class="item_carru" id="item2_carru" >
                  <div class="ui_carru" id="ac_item_2">
                      <h5>Factores de rendimiento de la calidad de impresión</h5>
                        
                        <div class="content-general">
                          <p>
                            <?php
                              $op = new select_c();
                              $res8 = $op->SelectC8();
                              while ($row = mysqli_fetch_array($res8)) {
                                echo $row['caracteristicas'];
                              }
                            ?>
                          </p>

                          <img style="height: 300px;" src="./images/H/factores.png" alt="">

                        </div>


                    <div class="ui_fle_carru">
                      <a href="#ac_item_1"><i class='bx bxs-chevron-left'></i></a>
                      <a href="#ac_item_3"><i class='bx bxs-chevron-right'></i></a>
                    </div>
  
                  </div>  
  
                </article>
                <!--Carrusel ui 2-->
  
                 <!--Carrusel ui 3-->
                 <article class="item_carru" id="item3_carru" >
                  <div class="ui_carru" id="ac_item_3">
                      <h5>Soluciones de Terceros</h5>

                          <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res9 = $op->SelectC9();
                                while ($row = mysqli_fetch_array($res9)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                                <img src="./images/H/soluciones_terceros.png" alt="">

                          </div>

                    <div class="ui_fle_carru">
                      <a href="#ac_item_3"><i class='bx bxs-chevron-left'></i></a>
                      <a href="#ac_item_4"><i class='bx bxs-chevron-right'></i></a>
                    </div>
  
                  </div>  
  
                </article>
                <!--Carrusel ui 3-->


                 <!--Carrusel ui 04-->
              <article class="item_carru" id="item4_carru" >
                <div class="ui_carru" id="ac_item_4">

                <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                    <div class="content-general">
                      <p class="paragraph">
                            De Click en "Siguiente" para acceder a la lección IV
                      </p>

                      <img src="./images/H/siguiente2.jpg" alt="">

                    </div>

                      <div class="btn-leccion">
                        <button id="boton" onclick="ir_leccion4();" >
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
              #leccion4{ display: none;}
            </style>

            <div id="leccion4" class="container-carac">

              <!--Carrusel HR 01-->
                  <article class="item_carru" id="item1_carru" >
                    <div class="hr_carru" id="hr_item_1">
                      <h5>Documentacion de Usuario</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res10 = $op->SelectC10();
                                while ($row = mysqli_fetch_array($res10)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                            <img src="./images/H/document.png" alt="img">
                        </div>
                              
                        <div class="ui_fle_carru">
                          <a href=""></a>
                          <a href="#hr_item_2"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel HR 01-->

              <!--Carrusel HR 02-->
              <article class="item_carru" id="item2_carru" >
                    <div class="hr_carru" id="hr_item_2">
                      <h5>Panel de Control</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res11 = $op->SelectC11();
                                while ($row = mysqli_fetch_array($res11)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                            <img src="./images/H/panel_control.png" alt="img">
                        </div>
                              
                        <div class="ui_fle_carru">
                        <a href="#hr_item_1"><i class='bx bxs-chevron-left'></i></a>
                        <a href="#hr_item_3"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel HR 02-->

                <!--Carrusel HR 03-->
                <article class="item_carru" id="item3_carru" >
                    <div class="hr_carru" id="hr_item_3">
                      <h5>Soluciones Remotas</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res12 = $op->SelectC12();
                                while ($row = mysqli_fetch_array($res12)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                        </div>

                              
                        <div class="ui_fle_carru">
                          <a href="#hr_item_2"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#hr_item_4"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel HR 03-->

              <!--Carrusel HR 04-->
              <article class="item_carru" id="item4_carru" >
                    <div class="hr_carru" id="hr_item_4">
                      <h5>Solución de Soporte del Controlador</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res13 = $op->SelectC13();
                                while ($row = mysqli_fetch_array($res13)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                        </div>
                              
                        <div class="ui_fle_carru">
                          <a href="#hr_item_3"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#hr_item_5"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel HR 04-->


              <!--Carrusel HR 05-->
              <article class="item_carru" id="item5_carru" >
                    <div class="hr_carru" id="hr_item_5">
                      <h5>Solución de Soporte del Controlador</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res14 = $op->SelectC14();
                                while ($row = mysqli_fetch_array($res14)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                            <img src="./images/H/solucion_remota2.png" alt="">

                        </div>
                              
                        <div class="ui_fle_carru">
                          <a href="#hr_item_4"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#hr_item_6"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel HR 05-->

               <!--Carrusel HR 06-->
               <article class="item_carru" id="item6_carru" >
                    <div class="hr_carru" id="hr_item_6">
                      <h5>Servidor Web Integrado</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $op = new select_c();
                                $res15 = $op->SelectC15();
                                while ($row = mysqli_fetch_array($res15)) {
                                  echo $row['caracteristicas'];
                                }
                              ?>
                            </p>

                            <img src="./images/H/solucion_remota3.png" alt="">

                        </div>
                              
                        <div class="ui_fle_carru">
                          <a href="#hr_item_5"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#hr_item_7"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel HR 06-->

              <!--Carrusel HR 07-->
              <article class="item_carru" id="item7_carru" >
                <div class="hr_carru" id="hr_item_7">

                <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                    <div class="content-general">
                      <p class="paragraph">
                            De Click en "Siguiente" para acceder a la lección V
                      </p>

                      <img src="./images/H/siguiente2.jpg" alt="">

                    </div>

                      <div class="btn-leccion">
                        <button id="boton" onclick="ir_leccion5();" >
                          Siguiente
                        </button>
                      </div>

                </div>
              </article>
              <!--Carrusel HR 07-->


              </div>
            <!--LECCION 04-->
            <!--END MODULO DE CARACTERISTICAS-->


            <!--MODULO DE INSTALACION-->
            <!--LECCION 05-->
            <style>
              #leccion5{display: none;}
            </style>

            <div id="leccion5" class="container-carac">

            <!--Carrusel IP 01-->
            <article class="item_carru" id="item1_carru" >
                  <div class="in_carru" id="in_item_1">
                    <h5>Descripción general de la Instalación</h5>

                      <div class="content-general">
                          <p>
                            <?php
                              $opi = new select_i();
                              $resI1 = $opi->SelecI();
                              while ($row = mysqli_fetch_array($resI1)) {
                                echo $row['instalacion'];
                              }
                            ?>
                          </p>

                          <img src="./images/H/INSTALACION_P.png" alt="img">
                      </div>
                            
                      <div class="ui_fle_carru">
                        <a href=""></a>
                        <a href="#in_item_2"><i class='bx bxs-chevron-right'></i></a>
                      </div>

                  </div>
            </article>
            <!--Carrusel IP 01-->

            <!--Carrusel IP 02-->
            <article class="item_carru" id="item2_carru" >
                  <div class="in_carru" id="in_item_2">
                    <h5>Traslado del Producto</h5>

                      <div class="content-general">
                          <p>
                            <?php
                              $opi = new select_i();
                              $resI2 = $opi->SelecI2();
                              while ($row = mysqli_fetch_array($resI2)) {
                                echo $row['instalacion'];
                              }
                            ?>
                          </p>

                          <img src="./images/H/instalacion1.png" alt="img">
                      </div>
                            
                      <div class="ui_fle_carru">
                      <a href="#in_item_1"><i class='bx bxs-chevron-left'></i></a>
                      <a href="#in_item_3"><i class='bx bxs-chevron-right'></i></a>
                      </div>

                  </div>
            </article>
            <!--Carrusel IP 02-->
              
            <!--Carrusel IP 03-->
            <article class="item_carru" id="item3_carru" >
                    <div class="in_carru" id="in_item_3">
                      <h5>Requsitos de Energia</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $opi = new select_i();
                                $resI3 = $opi->SelecI3();
                                while ($row = mysqli_fetch_array($resI3)) {
                                  echo $row['instalacion'];
                                }
                              ?>
                            </p>

                            <img src="./images/H/instalacion2.png" alt="img">
                        </div>
                              
                        <div class="ui_fle_carru">
                          <a href="#in_item_2"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#in_item_4"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel IP 03-->

              <!--Carrusel IP 04-->
              <article class="item_carru" id="item4_carru" >
                    <div class="in_carru" id="in_item_4">
                      <h5>Secuencia de Encendido/Apagado</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $opi = new select_i();
                                $resI4 = $opi->SelecI4();
                                while ($row = mysqli_fetch_array($resI4)) {
                                  echo $row['instalacion'];
                                }
                              ?>
                            </p>
                        </div>
                              
                        <div class="ui_fle_carru">
                        <a href="#in_item_3"><i class='bx bxs-chevron-left'></i></a>
                        <a href="#in_item_5"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>
                  </article>
              <!--Carrusel IP 04-->

              <!--Carrusel IP 05-->
              <article class="item_carru" id="item5_carru" >
                <div class="in_carru" id="in_item_5">
                  <h5>Conexión de Red</h5>

                    <div class="content-general">
                        <p>
                          <?php
                            $opi = new select_i();
                            $resI5 = $opi->SelecI5();
                            while ($row = mysqli_fetch_array($resI5)) {
                              echo $row['instalacion'];
                            }
                          ?>
                          <br><br>
                          Puede conseguir más documentación en la formación de Software
                        </p>

                        <img src="./images/H/instalacion3.png" alt="img">
                    </div>
                          
                    <div class="ui_fle_carru">
                    <a href="#in_item_4"><i class='bx bxs-chevron-left'></i></a>
                    <a href="#in_item_6"><i class='bx bxs-chevron-right'></i></a>
                    </div>

                </div>
              </article>
          <!--Carrusel IP 05-->

              <!--Carrusel IP 05-->
               <article class="item_carru" id="item6_carru" >
                <div class="hr_carru" id="in_item_6">

                <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                    <div class="content-general">
                      <p class="paragraph">
                            De Click en "Siguiente" para acceder a la lección VI
                      </p>

                      <img src="./images/H/siguiente3.jpg" alt="">

                    </div>

                      <div class="btn-leccion">
                        <button id="boton" onclick="ir_leccion6();" >
                          Siguiente
                        </button>
                      </div>

                </div>
              </article>
              <!--Carrusel IP 05-->

              <!--LECCION 05-->

               <!--Carrusel IP 06-->
               <article class="item_carru" id="item6_carru" >
                <div class="hr_carru" id="in_item_6">

                <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                    <div class="content-general">
                      <p class="paragraph">
                            De Click en "Siguiente" para acceder a la lección VI
                      </p>

                      <img src="./images/H/siguiente3.jpg" alt="">

                    </div>

                      <div class="btn-leccion">
                        <button id="boton" onclick="ir_leccion5();" >
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
              #leccion6{display: none;}
            </style>

            <div id="leccion6" class="container-carac">

              <!--Carrusel TF 01-->
              <article class="item_carru" id="item1_carru">
                <div class="tf_carru" id="tf_item_1">
                  <h5>Teoría del Funcionamiento</h5>

                    <div class="content-general">
                      <p style="font-size: 11px;">
                        <?php
                          $optf = new select_tf();
                          $resFT = $optf->select_tf();
                          while ($row = mysqli_fetch_array($resFT)) {
                            echo $row['teoria_funtion'];
                          }
                        ?>
                      </p>
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
                  <h5>Teoría del Funcionamiento Video</h5>

                    <div class="content-general">
                         
                      <video width="100%" height="300" controls>
                        <source src="./images/H/teoria_funcionamiento_1.mp4" type="video/mp4">
                        Su navegador no es compatible con la etiqueta de vídeo.
                      </video>
                    
                    </div>


                    <div class="ui_fle_carru">
                    <a href="#tf_item_1"><i class='bx bxs-chevron-left'></i></a>
                    <a href="#tf_item_3"><i class='bx bxs-chevron-right'></i></a>
                    </div>

                </div>

              </article>
              <!--Carrusel TF 02-->
            
              <!--Carrusel TF 03-->
              <article class="item_carru" id="item3_carru" >
                <div class="tf_carru" id="tf_item_3">

                <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                    <div class="content-general">
                      <p class="paragraph">
                            De Click en "Siguiente" para acceder a la lección VII
                      </p>

                      <img src="./images/H/siguiente4.jpg" alt="">

                    </div>

                      <div class="btn-leccion">
                        <button id="boton" onclick="ir_leccion7();" >
                          Siguiente
                        </button>
                      </div>

                </div>
              </article>
              <!--Carrusel TF 03-->


            </div>
            <!--LECCION 06-->


            <!--LECCION 07-->
            <style>
              #leccion7 {display: none;}
            </style>

            <div id="leccion7" class="container-carac">
                
            <!--Carrusel TF 04-->
            <article class="item_carru" id="item4_carru">
                <div class="tf_carru" id="tf_item_4">
                  <h5>Creado de Imágenes</h5>

                    <div class="content-general">
                      <p>
                        <?php
                          $optf = new select_tf() ;
                          $resTF2  = $optf->select_tf2();
                          while ($row = mysqli_fetch_array($resTF2)){
                            echo $row['teoria_funtion'];
                          } 
                        ?>
                      </p>

                      <img src="./images/H/teoria_funcionamiento_2.png" alt="">

                    </div>

                    <div class="ui_fle_carru">
                        <a href=""></a>
                        <a href="#tf_item_5"><i class='bx bxs-chevron-right'></i></a>
                    </div>

                </div>

              </article>
              <!--Carrusel TF 04-->

              <!--Carrusel TF 05-->
              <article class="item_carru" id="item5_carru">
                  <div class="tf_carru" id="tf_item_5">
                    <h5>Proceso de Toma de images</h5>

                      <div class="content-general">
                        <p>
                            <?php
                              $optf = new select_tf() ;
                              $resTF3  = $optf->select_tf3();
                              while ($row = mysqli_fetch_array($resTF3)){
                                echo $row['teoria_funtion'];
                              } 
                            ?>
                          </p>

                      </div>

                      <div class="ui_fle_carru">
                        <a href="#tf_item_4"><i class='bx bxs-chevron-left'></i></a>
                        <a href="#tf_item_6"><i class='bx bxs-chevron-right'></i></a>
                      </div>

                  </div>

                </article>
                <!--Carrusel TF 05-->

              <!--Carrusel TF 06-->
              <article class="item_carru" id="item6_carru">
                  <div class="tf_carru" id="tf_item_6">
                    <h5>Proceso de Toma de images</h5>

                    <div style=" display: flex; justify-content: center  " class="content-general">
                    <img  style="min-width: 90%; " src="./images/H/teoria_funcionamiento_3.png" alt="">
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
                      <h5>Desarrollo y Transferencia</h5>

                        <div class="content-general">
                              <p>
                                <?php
                                  $optf = new select_tf() ;
                                  $resTF4 = $optf->select_tf4();
                                  while ($row = mysqli_fetch_array($resTF4)) {
                                    echo $row["teoria_funtion"];
                                  }
                                ?>
                              </p>
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
                      <h5>Desarrollo y Transferencia</h5>

                        <div style=" display: flex; justify-content: center  " class="content-general">
                        <img  style="min-width: 300px;" src="./images/H/teoria_funcionamiento_4.png" alt="">
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
                      <h5>Fusionando</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $optf = new select_tf() ;
                                $resTF5 = $optf->select_tf5();
                                while ($row = mysqli_fetch_array($resTF5)){
                                  echo $row["teoria_funtion"];
                                }  
                              ?>
                            </p>

                              <img src="./images/H/teoria_funcionamiento_5.png" alt="">

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
                      <h5>Descripción general de la limpieza</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $optf = new select_tf() ;
                                $resTF6 = $optf->select_tf6();
                                while ($row = mysqli_fetch_array($resTF6)){
                                  echo $row["teoria_funtion"];
                                }  
                              ?>
                            </p>

                              <img src="./images/H/teoria_funcionamiento_6.png" alt="">

                        </div>


                        <div class="ui_fle_carru">
                          <a href="#tf_item_9"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#tf_item_11"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>

                  </article>
                  <!--Carrusel TF 10-->

                  <!--Carrusel TF 11-->
                  <article class="item_carru" id="item11_carru" >
                    <div class="tf_carru" id="tf_item_11">

                    <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                        <div class="content-general">
                          <p class="paragraph">
                                De Click en "Siguiente" para acceder a la lección <i class="ri-vidicon-fill"></i>
                          </p>

                          <img src="./images/H/siguiente.jpg" alt="">

                        </div>

                          <div class="btn-leccion">
                            <button id="boton" onclick="ir_leccion8();" >
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
              #leccion8 {display: none;}
            </style>

            <div id="leccion8" class="container-carac">
                
            <!--Carrusel TF 12-->
            <article class="item_carru" id="item12_carru">
                <div class="tf_carru" id="tf_item_12">
                  <h5>Ruta de papel y Sistema de alimentación</h5>

                    <div class="content-general">
                      <p>
                        <?php
                          $optf = new select_tf() ;
                          $resTF7  = $optf->select_tf7();
                          while ($row = mysqli_fetch_array($resTF7)){
                            echo $row['teoria_funtion'];
                          } 
                        ?>
                      </p>

                      <img src="./images/H/teoria_funcionamiento_7.png" alt="">

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
                    <h5>Descripción general de la ruta del papel</h5>

                      <div class="content-general">
                        <p>
                            <?php
                              $optf = new select_tf() ;
                              $resTF8  = $optf->select_tf8();
                              while ($row = mysqli_fetch_array($resTF8)){
                                echo $row['teoria_funtion'];
                              } 
                            ?>
                            <br><br>
                            <strong>Puedes ver un video demostrativo en la siguiente lamina!</strong>
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
                    <h5>Descripción general de la ruta del papel</h5>

                    <div class="content-general">
                         
                      <video width="100%" height="300" controls>
                        <source src="./images/H/teoria_funcionamiento_1.mp4" type="video/mp4">
                        Su navegador no es compatible con la etiqueta de vídeo.
                      </video>
                    
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
                      <h5>Sensores de la ruta del papel</h5>

                        <div class="content-general">
                              <p>
                                <?php
                                  $optf = new select_tf() ;
                                  $resTF9 = $optf->select_tf9();
                                  while ($row = mysqli_fetch_array($resTF9)) {
                                    echo $row["teoria_funtion"];
                                  }
                                ?>
                              </p>

                              <img src="./images/H/teoria_funcionamiento_8.png" alt="">

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
                        <h5>Descripción general de la ruta del papel</h5>
                          <small>
                            Acontinuación un breve vídeo que indica cómo localizar y eliminar atascos de papel.
                          </small>

                        <div class="content-general">  
                          <video width="100%" height="280" controls>
                            <source src="./images/H/teoria_funcionamiento_3.mp4" type="video/mp4">
                            Su navegador no es compatible con la etiqueta de vídeo.
                          </video>
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
                      <h5>Sistema de alimentación de papel</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $optf = new select_tf() ;
                                $resTF10 = $optf->select_tf10();
                                while ($row = mysqli_fetch_array($resTF10)){
                                  echo $row["teoria_funtion"];
                                }  
                              ?>
                            </p>

                              <img src="./images/H/teoria_funcionamiento_9.png" alt="">

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
                      <h5>Descripción general de la limpieza</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $optf = new select_tf() ;
                                $resTF6 = $optf->select_tf6();
                                while ($row = mysqli_fetch_array($resTF6)){
                                  echo $row["teoria_funtion"];
                                }  
                              ?>
                            </p>

                              <img src="./images/H/teoria_funcionamiento_6.png" alt="">

                        </div>

                        <div class="ui_fle_carru">
                          <a href="#tf_item_17"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#tf_item_19"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>

                  </article>
                  <!--Carrusel TF 18-->

                  <!--Carrusel TF 19-->
                  <article class="item_carru" id="item19_carru" >
                    <div class="tf_carru" id="tf_item_19">

                    <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                        <div class="content-general">
                          <p class="paragraph">
                                De Click en "Siguiente" para acceder a la lección IX <i class="ri-vidicon-fill"></i>
                          </p>

                          <img src="./images/H/siguiente2.jpg" alt="">

                        </div>

                          <div class="btn-leccion">
                            <button id="boton" onclick="ir_leccion9();" >
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
              #leccion9 {display: none;}
            </style>

            <div id="leccion9" class="container-carac">
                
            <!--Carrusel TF 20-->
            <article class="item_carru" id="item20_carru">
                <div class="tf_carru" id="tf_item_20">
                  <h5>DADF y escáner</h5>

                    <div class="content-general">
                      <p>
                        <?php
                          $optf = new select_tf() ;
                          $resTF11  = $optf->select_tf11();
                          while ($row = mysqli_fetch_array($resTF11)){
                            echo $row['teoria_funtion'];
                          } 
                        ?>
                      </p>

                      <img src="./images/H/teoria_funcionamiento_10.png" alt="">

                    </div>

                    <div class="ui_fle_carru">
                        <a href=""></a>
                        <a href="#tf_item_21"><i class='bx bxs-chevron-right'></i></a>
                    </div>

                </div>

              </article>
              <!--Carrusel TF 20-->

              <!--Carrusel TF 21-->
              <article class="item_carru" id="item21_carru">
                  <div class="tf_carru" id="tf_item_21">
                    <h5>Ruta de papel DADF</h5>

                      <div class="content-general">
                        <p>
                            <?php
                              $optf = new select_tf() ;
                              $resTF12  = $optf->select_tf12();
                              while ($row = mysqli_fetch_array($resTF12)){
                                echo $row['teoria_funtion'];
                              } 
                            ?>
                          </p>

                      </div>

                      <div class="ui_fle_carru">
                        <a href="#tf_item_20"><i class='bx bxs-chevron-left'></i></a>
                        <a href="#tf_item_22"><i class='bx bxs-chevron-right'></i></a>
                      </div>

                  </div>

                </article>
                <!--Carrusel TF 21-->

              <!--Carrusel TF 22-->
              <article class="item_carru" id="item22_carru">
                  <div class="tf_carru" id="tf_item_22">
                    <h5>Ruta de papel DADF</h5>

                    <div class="content-general">
                      <p>
                        <?php
                        $optf = new select_tf() ;
                        $resTF13 = $optf->select_tf13();
                        while ($row = mysqli_fetch_array($resTF13)){
                          echo $row['teoria_funtion'];
                        }
                        ?>
                      </p>

                      <img src="./images/H/teoria_funcionamiento_11.png" alt="">
                    </div>

                      <div class="ui_fle_carru">
                        <a href="#tf_item_21"><i class='bx bxs-chevron-left'></i></a>
                        <a href="#tf_item_23"><i class='bx bxs-chevron-right'></i></a>
                      </div>

                  </div>

                </article>
                <!--Carrusel TF 22-->

                <!--Carrusel TF 23-->
                <article class="item_carru" id="item23_carru">
                    <div class="tf_carru" id="tf_item_23">
                      <h5>Sensores de papel DADF</h5>

                        <div class="content-general">
                              <p>
                                <?php
                                  $optf = new select_tf() ;
                                  $resTF9 = $optf->select_tf14();
                                  while ($row = mysqli_fetch_array($resTF9)) {
                                    echo $row["teoria_funtion"];
                                  }
                                ?>
                              </p>

                        </div>

                        <div class="ui_fle_carru">
                          <a href="#tf_item_22"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#tf_item_24"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>

                  </article>
                  <!--Carrusel TF 23-->

                   <!--Carrusel TF 24-->
                  <article class="item_carru" id="item24_carru">
                      <div class="tf_carru" id="tf_item_24">
                        <h5>Sistema de alimentación de papel DADF</h5>

                        <div class="content-general">  
                          <p>
                            <?php
                              $optf = new select_tf() ;
                              $resTF15 = $optf->select_tf15();
                              while ($row = mysqli_fetch_array($resTF15)){
                                echo $row["teoria_funtion"];
                              }
                            ?>
                          </p>

                          <img src="./images/H/teoria_funcionamiento_13.png" alt="">
                        </div>

                          <div class="ui_fle_carru">
                            <a href="#tf_item_23"><i class='bx bxs-chevron-left'></i></a>
                            <a href="#tf_item_25"><i class='bx bxs-chevron-right'></i></a>
                          </div>

                      </div>

                    </article>
                    <!--Carrusel TF 24-->
                   
                  <!--Carrusel TF 25-->
                  <article class="item_carru" id="item25_carru">
                    <div class="tf_carru" id="tf_item_25">
                      <h5>Ruta de la imagen escaneada</h5>

                        <div class="content-general">
                            <p>
                              <?php
                                $optf = new select_tf() ;
                                $resTF16 = $optf->select_tf16();
                                while ($row = mysqli_fetch_array($resTF16)){
                                  echo $row["teoria_funtion"];
                                }  
                              ?>
                            </p>

                        </div>


                        <div class="ui_fle_carru">
                          <a href="#tf_item_24"><i class='bx bxs-chevron-left'></i></a>
                          <a href="#tf_item_26"><i class='bx bxs-chevron-right'></i></a>
                        </div>

                    </div>

                  </article>
                  <!--Carrusel TF 25-->

                  <!--Carrusel TF 26-->
                  <article class="item_carru" id="item26_carru" >
                    <div class="tf_carru" id="tf_item_26">

                    <h5>Felicidades <strong><?php echo $_SESSION['name']; ?></strong>, has culminado con exito está lección de formación Técnica</h5>

                        <div class="content-general">
                          <p class="paragraph">
                                De Click en "Siguiente" para acceder a la lección <i class="ri-xbox-fill"></i> <i class="ri-vidicon-fill"></i>
                          </p>

                          <img src="./images/H/siguiente_4.jpg" alt="">

                        </div>

                          <div class="btn-leccion">
                            <button id="boton" onclick="ir_leccion10();" >
                              Siguiente
                            </button>
                          </div>

                    </div>
                  </article>
                  <!--Carrusel TF 26-->


            </div>
            <!--LECCION 09-->    


            
          </main>
        <!--Content-->


</body>
</html>