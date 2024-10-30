<?php
session_start();
if (!empty($_SESSION["name"])) {
    header("loaction: ./intranet.php");
}else{
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

            <div class="container">

              <div class="container-training">  
                
                <div style="width: 700px; height: 500px;" id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">

                      <div class="carousel-item active">
                        <img src="./images/Carrusel_01.png" class="d-block w-100" alt="...">
                      </div>
                      
                      <div class="carousel-item">
                        <img src="./images/Carrusel_02.png" class="d-block w-100" alt="...">
                      </div>
                      
                      <div class="carousel-item">
                        <img src="./images/Carrusel_03.png" class="d-block w-100" alt="...">
                      </div>
                    
                      <div class="carousel-item">
                        <img src="./images/Carrusel_20.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_04.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_05.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_24.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_25.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_26.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_06.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_21.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_22.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_23.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_07.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_08.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_09.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_10.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_11.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_12.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_13.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_14.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_15.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_16.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_17.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_18.png" class="d-block w-100" alt="...">
                      </div>

                      <div class="carousel-item">
                        <img src="./images/Carrusel_19.png" class="d-block w-100" alt="...">
                      </div>


                    </div>
                    <br>

                <div class="navigator-btn">

                    <button  class="carousel-control-pre" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>

                    <div class="btn-volver">
                        <a href="../VL_B405.php"><i class='bx bxs-home-alt-2'></i></a>
                    </div>
                    
                    <button class="carousel-control-nex" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>    

                </div>

                </div>

             
            </div>
        
        </main>