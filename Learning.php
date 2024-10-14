<?php
session_start();
if (!empty($_SESSION["name"])) {
  header("loaction: ./intranet.php");
} else {
  if ((time() - $_SESSION['time']) >
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
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
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
        <img src="./IMG/cubo.jpg" alt="" />
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
          <img src="./IMG/ysoft.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Ysoft Safeq 6</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Aprenda cómo</a>
          </div>
        </div>

        <div class="card" style="width: 20rem">
          <img src="./IMG/ysoft.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Aprenda cómo</a>
          </div>
        </div>
      </section>
    </div>
    <!--CONTAINER-LEARNING-PUBLIC-->
  </main>
</body>

</html>