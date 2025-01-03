<?php
session_start();
if (!empty($_SESSION["name"])) {
  header("loaction: ./intranet.php");
} else {
  if (
    (time() - $_SESSION['time']) >
    40
  ) {
    header("location: ./intranet.php");
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./IMG/x.png" />
  <title>Learning-Codigo-error</title>

  <!--STYLE ICON-->
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/cod_fail.css">
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--STYLE ICON-->

  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <script src="./JS/search.js"></script>
  <!--SCRIPT-->
</head>

<body>
  <header>
    <div class="logo">
      <img src="./IMG/x.png" alt="" />
      <div class="line">Portal de Aliados</div>
    </div>

    <input type="checkbox" id="check" />
    <label style="float: right" for="check" class="checkbtn">
      <i class="bx bx-menu" undefined></i>
    </label>

    <ul>
      <li><a href="./portal.php">Portal de Aprendizaje</a></li>
      <li><a href="">código de Fallas</a></li>
      <li><a href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
    </ul>
  </header>



  <main class="table-fail">

    <!-- start search filter -->
    <div class="search" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <form class="">
          <input class="form-control me-2 light-table-filter" data-table="table" type="text" placeholder="Buscar...">
        </form>
      </div>
    </div>
    <!-- end search filter -->

    <div class="icons">

      <div class="icon-item">
        <a href=""><i class='bx bxs-cog' style='color:#5e5a5a'></i></a><br>
        <a href=""><small>Plataformas</small></a>
      </div>

      <div class="icon-item">
        <a href=""><i class='bx bxl-microsoft' style='color:#5e5a5a'></i></a><br>
        <a href=""><small>Fallas Mecánica</small></a>
      </div>

    </div>

    <!--Table-->


    <!--Model device-->
    <div class="gallery-model-device">

      <article class="item-gal">
        <p><small>Versalink B400/B405</small></p>
      </article>
    
      <article>
        <p><small>VersaLink B7100 Family</small></p>
      </article>

      <article>
        <p><small>VersaLink C7100 Family</small></p>
      </article>  

      <article>
        <p><small>AltaLink B8170 Family</small></p>
      </article>    

      <article>
        <p><small>Versalink C8170 Family</small></p>
      </article>

      <article>
        <p><small>VersaLink B625</small></p>
      </article>


    </div>
    <!--Model device-->

    <?php include './CONTROLLER/conexion.php' ?>

    <table class="table">

      <thead class="table table-dark">
        <tr>
          <th scope="col">Modelo</th>
          <th scope="col">Codigo</th>
          <th scope="col">Solucion</th>
        </tr>
      </thead>


      <!--Sentencia de seleccion-->
      <?php
      $sql = $conexion->query('SELECT *FROM cod_fail');
      while ($datos = $sql->fetch_object()) {
        ?>
        <!--Sentencia de seleccion-->


        <tbody>
          <tr>
            <td scope="row"><?= $datos->modelo ?></th>
            <td scope="row"><?= $datos->codigoF ?></th>

            <td>
              <!--Ventana description-->
              <div class="container-modal-desc">
                <h6>Como abordar el error <i style="color: red;"><?php echo $datos->codigoF ?></i></h6>
                <p><small>
                    <?php echo "Chain " . $datos->chain ?>
                  </small></p>

                <div class="btn-calification">
                  <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight" >
                    <i class='bx bxs-comment-detail' style='color:#f3f3f3f3'></i>
                  </button>

                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasRightLabel">¿Como Calificarías esta solución?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                      <p><small>
                        Error <?php echo $datos->codigoF?>
                      </small></p>

                      <br>


          
                    </div>
                  </div>

                </div>
                <!--Ventana Modal-->



            </td>


          </tr>
        </tbody>

        <?php
      }
      ?>

    </table>
    <!--Table-->

  </main>