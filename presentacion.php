<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./IMG/x.png" />
    <title>Partner</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!--STYLE ICON-->

    <!--SCRIPT-->
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPT-->
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./IMG/x.png" alt="" />
        <div class="line">Xerox de Venezuela</div>
      </div>

      <input type="checkbox" id="check" />
      <label style="float: right" for="check" class="checkbtn">
        <i class="bx bx-menu" undefined></i>
      </label>

      <ul>
        <li><a href="">Inicio</a></li>
        <li><a href="">Portal de Aprendizaje</a></li>
        <li><a href="">Apps Gallery</a></li>
      </ul>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./IMG/carrusel02.jpg" class="d-block w-100" alt="..." />
        </div>

        <div class="carousel-item">
          <img src="./IMG/carrusel01.jpg" class="d-block w-100" alt="..." />
        </div>

        <div class="carousel-item">
          <img src="./IMG/carrusel03.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </body>
</html>
