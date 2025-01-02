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
  <title>Learning</title>

  <!--STYLE ICON-->
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--STYLE ICON-->

  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <!--SCRIPT-->
</head>

<body style="background: #f3f3f3f3">
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
      <li><a href="./cod_fail.php">código de Fallas</a></li>
      <li><a href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
    </ul>
  </header>

  <main>
    <article class="text-bienvenida">
      <p>
        Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al
        Portal de Aliados
      </p>
    </article>

    <!--CONTAINER-LEARNING-PUBLIC-->
    <div class="container-learning">
      <div class="img-public">
        <img src="https://images.pexels.com/photos/159751/book-address-book-learning-learn-159751.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
      </div>

      <div class="container-learning-text">
        <p class="title">¡Le damos la bienvenida al Portal de socios!</p>

        <p>
          Descubra un concentrador integral para todos los recursos,
          herramientas y asistencia que necesita para mejorar su negocio.
          Manténgase informado sobre las últimas noticias de Xerox y explore
          información detallada sobre productos, software, servicios y
          programas exclusivos. Acceda a materiales de marketing, módulos de
          formación y gestione su cuenta sin esfuerzo para racionalizar las
          operaciones de su negocio, en un solo lugar.
        </p>
      </div>
    </div>

    <div class="container-learning-card">
      <div class="we-make">
        <img src="./IMG/we_make.png" alt="" />
      </div>
      <article>
        <p class="title">Soluciones Técnologicas</p>
      </article>

      <section class="gallery">

        <div class="card" style="width: 20rem">
          <img src="./IMG/docushare.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">DocuShare®</h5>
            <p class="card-text">
              DocuShare® Ofrece a cualquier organización las herramientas sólidas
              para automatizar procesos y respaldar la transformación digital.
            </p>
            <br>
            <a href="#" class="btn btn-primary">Aprenda cómo</a>
          </div>
        </div>


        <div class="card" style="width: 20rem">
          <img src="./IMG/ysoft.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Ysoft Safeq 6</h5>
            <p class="card-text">
              Equipe a los equipos de TI con una herramienta centralizada para supervisar la impresión ,
              el escaneo y el fax de toda una organización, con funciones avanzadas y personalizaciones a mano .
            </p>
            <a href="#" class="btn btn-primary">Aprenda cómo</a>
          </div>
        </div>

      </section>
    </div>
    <!--CONTAINER-LEARNING-PUBLIC-->
  </main>

  <!--START FOOTER-->
  <div class="container-fluid" style="display: flex; justify-content: center; margin-top: 50px;">
    <div class="row">
      <div class="">
        <p style="color: black;" class="m-0">Portal de Aliados XDV
          &copy; Todos los derechos reservados. XDV® | Designed by <a
            href="https://portafoliosjesclona.000webhostapp.com/" style="color: blue;">JE</a>
        </p>
        <div class="linear"></div>
        <div class="icons">
          <a href="https://www.linkedin.com/public-profile/settings"><img src="IMG/linkdin.svg" alt=""></a>
          <a href="https://github.com/jascalona"><img src="IMG/github.svg" alt=""></a>
          <a href="https://wa.me/4129854529?text=Hola,%20Me%20Intersa!"><img src="IMG/whatsapp.svg" alt=""></a>
          <a href="https://www.instagram.com/abrahamescalona.84?igsh=MTg2YWQ1ODh6bWt6NA=="><img src="IMG/intagram.svg"
              alt=""></a>
        </div>

      </div>
    </div>
  </div>
  <!--START FOOTER-->

  <!-- Footer Start 
    
     <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
      <div class="row pt-5">
          <div class="col-lg-3 col-md-6 mb-5">
              <a href="" class="navbar-brand">
                  <h1 class="text-primary"><span class="text-white">GRUPO XDV</span></h1>
              </a>
              <p>
                Somos XDV, nos enfocamos con calidad, excelencia y gran entusiasmo para lograr los retos propuestos y alcanzar la satisfacción tanto de nuestros clientes internos y externos, 
                a través de nuestra tecnología, nuestra experiencia y nuestro servicio profecional.
              </p>
              <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">SIGUENOS</h6>
              <div class="d-flex justify-content-start">
                  <p class="btn btn-outline-primary btn-square mr-2"><i class='bx bxl-facebook'></i></p>
                  <p class="btn btn-outline-primary btn-square mr-2"><i class='bx bxl-instagram'></i></p>
                  <p class="btn btn-outline-primary btn-square"><i class='bx bxl-whatsapp'></i></p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
              <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Acceso Directo</h5>
              <div class="d-flex flex-column justify-content-start">
                  <a class="text-white-50 mb-2" href="./panel.php"><i class="fa fa-angle-right mr-2"></i>Panel</a>
                  <a class="text-white-50 mb-2" href="./control_asistencia.php"><i class="fa fa-angle-right mr-2"></i>Control de Asistencia</a>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-5"></div>

          <div class="col-lg-3 col-md-6 mb-5">
              <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contacto</h5>
              <p><i class="fa fa-map-marker-alt mr-2"></i>Av. Ávila, Caracas 1060, Miranda, Venezuela</p>
              <p><i class="fa fa-phone-alt mr-2"></i>+58 05009376934</p>
              <p><i class="fa fa-envelope mr-2"></i>cac@grupoxven.com</p>
              
           
      </div>
  </div>
  <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
      <div class="row">
          <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
              <p class="m-0 text-white-50">Virtual Assistance &copy; <a href="" style="color: red;">XDV</a>. Todos los derechos reservados. XDV®</a>
              </p>
          </div>
          <div class="col-lg-6 text-center text-md-right">
              <p class="m-0 text-white-50">Designed by <a href="" style="color: red;">JE</a>
              </p>
          </div>
      </div>
  </div>
   Footer End -->



</body>

</html>