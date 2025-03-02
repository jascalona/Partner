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
} 
?>

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
    <img src="./IMG/animation/cuboazul.gif" alt="">
    <h6 clas="title">Hola, <b><?php echo $_SESSION['name']; ?></b> Bienvenido al Potal ST</h6>
    <p><small>"Genius is made up of 1% talent and 99% effort."</small></p>

    <div class="icon-item">
      <button type="button" class="btn btn-secondary"><a href="./URLs/config?URL4=cod_fail?">Service Library</a></button>
    </div>

  </div>

  <main>

    <div class="text-public">
      <small>XDV CORPORATION</small><br>
      <h6>¡Le damos la bienvenida al Portal de servicio y entrenamiento!</h6>
      <p>
      </p>
    </div>


    <div class="container-learning">
      <article>
        <div class="contenct">
          <img src="./IMG/pc_learning.png" alt="">
          <small><b>Comunicado Servicio</b></small>
          <p>
            Deshazte de las malas prácticas y herramientas no optimizadas. El portal de entrenamiento XDV
            ofrece un acceso exclusivo a documentación y herramientas eficaces y de facil manejo.

            Mejora tu experiencia a la hora de atender una llamada de servicio, este portal fue diseñado
            con el proposito brindar a cada técnico y/o aliado de servicio, una formación completa sobre
            cada producto comercializado a nivel nacional en la gama de prodcutos Xerox y aliados comerciales
            tales como plataformas de control, herramientas para automatización de procesos y por su puesto equipos
            de gestión documental a fin de brindar soluciones digitales.

          </p>
        </div>
      </article>
    </div>

    <!--Section Public-1-->
    <section class="fondo-public-1" id="section-1">
      <div class="public-1" id="public">
        <article class="item-public">
          <div class="contenido" id="item_1">
            <small><b>Desarrollos Recientes</b></small>
            <div class="contenct">
              <img src="./IMG/pantalla-learning.png" alt="#">
              <p>
                La plataforma Service Library hace más que optimizar la entrega y la administración de su contenido: los
                usuarios tienen control total sobre cómo se utiliza el contenido. Los usuarios pueden anotar, resaltar
                filtrar e interactuar con su contenido en todos los dispositivos y sistemas operativos estándar de la industria a velocidades sin procedentes.

                Service Library es la plataforma de entrega de contenido interactiva, flexible y multidispositivo 
                que has estado buscando. Ya sea que su usuario de contenido esté anotando procedimientos de prueba o 
                desglosando manuales de hardware, Service Library les brinda la capacidad que han estado buscando.
                <br><br>
                Mejora la experiencia de las comunicaciones técnicas al dar a los expertos un control 
                total sobre la forma en que interactúan con el 
                contenido gracias a nuestra interacción única con las capacidades de resaltar, anotar y referenciar. 

              </p>
            </div>
          </div>
        </article>
      </div>
    </section>
    <!--Section Public-1-->







  </main>

  <!--START FOOTER-->
  <footer>
    <p class="m-0"> 
    &copy; 2010-2024 Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small></p>
  </footer>
  <!--START FOOTER-->





  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <!--SCRIPT-->

</body>
</html>