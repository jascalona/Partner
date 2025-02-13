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
  <link rel="stylesheet" href="./CSS/test.css">
  <link rel="stylesheet" href="./CSS/responsive.css">
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--STYLE ICON-->

  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <!--SCRIPT-->
</head>

<body>
  <header>
    <div class="logo">
      <img src="./IMG/x.png" alt="" />
      <div class="line">Portal ST</div>
    </div>

    <input type="checkbox" id="check" />
    <label style="float: right" for="check" class="checkbtn">
      <i class="bx bx-menu" undefined></i>
    </label>

    <ul>
      <li><a href="./portal.php">Portal de Aprendizaje</a></li>
      <li><a href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
    </ul>
  </header>

  <main>
    <article class="text-bienvenida">
      <p>

      </p>
    </article>

    <!--CONTAINER-LEARNING-PUBLIC-->
    <div class="container-baner">
      <div class="text-baner">

        <p> Hola <strong><?php echo $_SESSION['name']; ?></strong>, Bienvenido al Portal ST</p>

        <small>"El genio se hace con un 1% de talento y un 99% de esfuerzo".</small>

        <br>

        <div class="btn">
          <button type="button" class="btn btn-dark"><a href="./cod_fail.php">Service Library</a></button>
        </div>

      </div>

      <!--SECTION IMG-->
      <div class="container-baner-image">

        <div class="img-item1" id="img1">
          <img src="./IMG/animation/crumpled-paper02.svg" alt="">
        </div>

        <div class="img-item0" id="img1">
          <img src="./IMG/animation/cubo-3d.png" alt="">
        </div>

        <div class="img-item2" id="img2">
          <img src="./IMG/animation/coffeecup.svg" alt="">
        </div>

        <div class="img-item3" id="img3">
          <img src="./IMG/animation/gestion.png" alt="">
        </div>


        <div class="img-item4" id="img9">
          <img src="./IMG/animation/iphone.svg" alt="">
        </div>


        <div class="img-item9" id="img10">
          <img src="./IMG/animation/pen02.svg" alt="">
        </div>

        <div class="img-item10" id="img4">
          <img src="./IMG/animation/pen01.svg" alt="">
        </div>

        <div class="img-item5" id="img5">
          <img src="./IMG/animation/nota1.svg" alt="">
        </div>


        <div class="img-item6" id="img6">
          <img src="./IMG/animation/nota2.svg" alt="">
        </div>


        <div class="img-item7" id="img7">
          <img src="./IMG/animation/notepad.svg" alt="">
        </div>


        <div class="img-item8" id="img8">
          <img src="./IMG/animation/crumpled-paper02.svg" alt="">
        </div>


      </div>

      <div class="baner-movil">
        <img src="./IMG/header2.png" alt="">
      </div>

      <div class="baner-movil-2">
        <img src="./IMG/animation/gestion.png" alt="">
      </div>
      <!--SECTION IMG-->

    </div>

    <div class="text">

      <h6>¡Le damos la bienvenida al Portal de servicio técnico!</h6>

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

    <div class="container-learning-card">
      <div class="we-make">
        <img src="./IMG/we_make.png" alt="" />
      </div>
    </div>
    <!--CONTAINER-LEARNING-PUBLIC-->
  </main>

  <!--START FOOTER-->
  <footer>
    <p class="m-0">Service Library
      2010-2024 &copy; Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small></p>
  </footer>
  <!--START FOOTER-->

</body>

</html>