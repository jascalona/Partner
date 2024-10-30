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
    <link rel="stylesheet" href="./CSS_SERVICE/Bootstrap.css">
    <link rel="stylesheet" href="./CSS_SERVICE/service_training.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLE ICON-->

    <!--SCRIPT-->
    <script src="./JS_training/Bootstrap.js"></script>
    <!--SCRIPT-->


</head>
<body style="background: #d0d0d0;">

    
        <main>
            
        <!--Instancia de Conexion-->
        <?php  include ("./CONTROLLER/Conexion.php");?>
        <?php  include ("./CONTROLLER/select_c.php");?>
        <!--Instancia de Conexion-->
        
            <div class="container">

            <form action="post">

              <div style="background: #f3f3f3f3;" class="container-training">  
                
                <div style="width: 700px; height: 500px;" id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">

                    <!--item 01-->
                      <div class="carousel-item active">
                      
                        <div class="item-content">  
                        <p class="title">Capacitación de Servicio Técnico VersaLkin B400 & B405</p>

                        <div class="content">
                          <?php
                              $op = new select_c();
                              $res = $op->SelectC();
                              while ($row = mysqli_fetch_array($res)) {
                                  echo $row['caracteristicas'];
                              }  
                          ?>
                          <img src="./images/carrusel_1.png" alt="">

                        </div>

                          </div>
                      </div>
                      <!--item 01-->

                      <!--item 02-->
                      <div class="carousel-item" name="name2" id="2" >

                        <div class="item-content">      
                        <p class="title">Configuración</p>  
                        
                        <div  style="line-height: 2;" class="content">
                          <?php
                            $op = new select_c();
                            $res2 = $op->SelectC2();
                            while ($row = mysqli_fetch_array($res2)) {
                                echo $row['caracteristicas'];
                           }  
                          ?> 
                        <img src="./images/carrusel_1.png" alt="">
                        
                        </div>

                        </div>
                      </div>
                    <!--item 02-->
                     
                    <!--item 03-->
                      <div class="carousel-item" name="3">

                      <div class="item-content">      
                        <p class="title">Soporte de Medidas</p>  
                        
                        <div  style="" class="content">
                          <?php
                            $op = new select_c();
                            $res3 = $op->SelectC3();
                            while ($row = mysqli_fetch_array($res3)) {
                                echo $row['caracteristicas'];
                           }  
                          ?> 
                        <img style="max-width: 400px;" src="./images/H/carrucel_3.png" alt="">
                        
                        </div>

                        </div>
                      </div>
                    <!--item 03-->

                    <!--item 04-->
                    <div class="carousel-item" name="3">

                    <div class="item-content">      
                      <p class="title">Panel de Control</p>  
                      
                      <div  style="" class="content">
                        <?php
                          $op = new select_c();
                          $res4 = $op->SelectC4();
                          while ($row = mysqli_fetch_array($res4)) {
                              echo $row['caracteristicas'];
                        }  
                        ?> 
                      <img style="" src="./images/H/carrucel_4.png" alt="">
                      
                      </div>

                      </div>
                    </div>
                    <!--item 0-->

                    </div>

                <div class="navigator-btn">

                    <button  class="carousel-control-pre" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>

                    <div class="btn-volver">
                        <a href="../VL_B405.php"><i class='bx bxs-home-alt-2'></i></a>
                    </div>
                    
                   
                    <button class="carousel-control-nex" type="button" name="next" id="next"  data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>    

                  </form>

                </div>

                </div>

             
            </div>
        
        </main>