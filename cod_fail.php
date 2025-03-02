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
  <title>Document-Service-Library</title>

  <!--STYLE ICON-->
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/responsive.css">
  <link rel="stylesheet" href="./CSS/cod_fail.css">
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--STYLE ICON-->


</head>

<body>
  <header>
    <div class="logo">
      <img src="./IMG/xdv.png" alt="" />
    </div>

    <input type="checkbox" id="check" />
    <label style="float: right" for="check" class="checkbtn">
      <i class="bx bx-menu" undefined></i>
    </label>
    
    <ul>
      <li><a href="./URLs/config?URL1=Learning?">Inicio</a></li>
      <li><a href="./URLs/config?URL2=portal?">Portal de Aprendizaje</a></li>
      <li><a href="./URLs/config?URL3=close?">Cerrar Sesion</a></li>
    </ul>
  </header>


  <div class="container-header-library">
    <img src="./IMG/atomo.png" alt="">
    <h6 clas="title">Service Library</h6>
    <p><small>ST Lightweight Knowledge Library</small></p>

    <div class="icon-item">
      <button type="button" class="btn btn-secondary"><a href="./library_raps.php">Library RAPs <i class='bx bxs-book'
            style='color:#f3f3f3f3'></i></a></button>
      <button type="button" class="btn btn-secondary"><a href="./parts_list.php">Parts List <i class='bx bxs-cog'
            style='color:#f3f3f3f3'></i></small></a></button>
    </div>
  </div>


  <!--Section Public-1-->
  <section class="fondo-public-1" id="section-1">
    <div class="public-1" id="public">
      <article class="item-public">
        <div class="contenido" id="item_1">
          <small><b>Service Library</b></small>
          <div class="contenct">
            <img src="./IMG/animation/public_1.gif" alt="#">
            <p>
              Service Library es la solución perfecta para las empresas de comunicación técnica que están interesadas en optimizar
              su entrega de contenido digital, hacer que su contenido sea
              fácil de encontrar y dar a sus usuarios el poder de interactuar con su contenido libremente.
              <br><br>
              Service Library  empodera a su audiencia con un control sin precedentes sobre su contenido con acceso a múltiples 
              dispositivos y un arsenal de herramientas. Desde la entrega e integración sin interrupciones 
              hasta el análisis empresarial y las actualizaciones sin interrupciones, 
              Service Library es la plataforma que necesita para modernizar su entrega de contenido digital.
            </p>
          </div>
        </div>
      </article>
    </div>
  </section>
  <!--Section Public-1-->

  <!--Section Public-2-->
  <section class="fondo-public-2" id="section-2">
    <div class="public-2" id="public">
      <article class="item-public">
        <small><b>Recursos</b></small>

        <div class="gallery-recursos">

          <div class="item-card">
            <img src="./IMG/Library_raps.png" alt="#">
            <p class="title"><b>Video Instructivo Library RAPs</b></p>
            <div class="desc">
              <p>Conozca la variedad de formas en que Service Library puede entregar contenido sin esfuerzo.</p>
              <a href="">Echar un Vistazo</a>
            </div>
          </div>

          <div class="item-card">
            <img src="./IMG/part_list.png" alt="#">
            <p class="title"><b>Video Instructivo Part List</b></p>
            <div class="desc">
              <p>Conozca la variedad de formas en que Service Library puede entregar contenido sin esfuerzo.</p>
              <a href="">Echar un Vistazo</a>
            </div>
          </div>

          <div class="item-card">
            <img
              src="https://images.unsplash.com/photo-1562654501-a0ccc0fc3fb1?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="#">
            <p class="title"><b>Folleto Service Library</b></p>
            <div class="desc">
              <p>Conozca la variedad de formas en que Service Library puede entregar contenido sin esfuerzo.</p>
              <a href="">Echar un Vistazo</a>
            </div>
          </div>

        </div>

      </article>
    </div>
  </section>
  <!--Section Public-2-->


  <!--Section Public-1-->
  <section class="fondo-public-3" id="section-3">
    <div class="public-3" id="public">
      <article class="item-public">
        <div class="contenct">
          <img
            src="https://images.unsplash.com/photo-1463171379579-3fdfb86d6285?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="#">
          <h6>Contactanos ahora para obtener más información sobre Service Library</h6>
          <br>
          <p>
            ¿Busca modernizar su entrega de contenido digital?
            Ponte en contacto con nosotros y colaboraremos para implementar
            tu plataforma de entrega de contenido personalizada.
          </p>
        </div>
      </article>
    </div>
  </section>
  <!--Section Public-1-->

  <!--
    <div class="vistas-data">
      <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">

          <button type="button" class="btn btn-outline-secondary">1</button>
          <button type="button" class="btn btn-outline-secondary">2</button>
          <button type="button" class="btn btn-outline-secondary">3</button>
          <button type="button" class="btn btn-outline-secondary">4</button>
        </div>
      </div>
    </div>
    -->

  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <script src="./JS/search.js"></script>
  <script src="./JS/search_m.js"></script>
  <!--SCRIPT-->

  <footer>
    <p class="m-0">Service Library
      2010-2024 &copy; Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small>
    </p>
  </footer>