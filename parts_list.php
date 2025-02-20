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
  <title>Learning-Parts-list</title>

  <!--STYLE ICON-->
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/responsive.css">
  <link rel="stylesheet" href="./CSS/cod_fail.css">
  <link rel="stylesheet" href="./CSS/part_list.css">
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
      <li><a href="./Learning.php">Inicio</a></li>
      <li><a href="./portal.php">Portal de Aprendizaje</a></li>
      <li><a href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
    </ul>
  </header>


  <div class="container-header-library">
    <h6 clas="title">Part List</h6>
    <p><small>ST Lightweight Knowledge Library</small></p>

    <div class="icon-item">
      <button type="button" class="btn btn-secondary"><a href="./library_raps.php">Library RAPs <i class='bx bxs-book'
            style='color:#f3f3f3f3'></i></a></button>
      <button type="button" class="btn btn-secondary"><a href="./parts_list.php">Parts List <i class='bx bxs-cog'
            style='color:#f3f3f3f3'></i></small></a></button>
    </div>

  </div>

  <main class="table-fail">

    <!--Boton flotante modelos-->
    <div class="container-btn">
      <input type="checkbox" id="btn-mas">

      <div class="modelos">
        <a id="device" onclick="ab8155();">B81</a>
        <a id="device" onclick="ab8255();">B82</a>
      </div>

      <div class="btn-mas">
        <label for="btn-mas"><i class='bx bx-plus' style='color:#9fa3a9'></i></label>
      </div>

    </div>
    <!--Boton flotante modelos-->


    <div class="container-content">

      <div class="container-head">


        <div class="xerox-family" id="xerox-family">

          <div class="container-learning">
            <article>
              <div class="contenct">
                <img src="./IMG/gif_part.gif" alt="">
                <small><b>Parts List</b></small>
                <p>
                  Find and know the part code to request after answering a service call. Optimize your time by easily
                  locating each component when performing a diagnosis, from sensors and gears to fuses inside logic
                  boards. Compare parts and components similar or alternative to other equipment.
                  <br>
                  Service Library is a secure, next-generation, professional-grade digital distribution platform
                  designed to deliver advanced design and research capabilities. It is also specifically designed for
                  knowledge workers who need constant access to reference content – ​​customers working in the legal,
                  financial, educational, or scientific and technological sectors.
                </p>
              </div>
            </article>
          </div>
        </div>


        <!--Sesion para modelo B8155-->
        <!--Modal para B8155-->
        <div class="menu-modal-part" id="modal-8155">
          <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class='bx bx-food-menu'></i>
          </button>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu Parts Lists</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

              <details>
                <summary>PL 1 - Standby Power <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part1();">PL 1.05 Electrical - Rear (1 of 3)</a>
                    <br>
                    <a id="boton" onclick="ir_part2();">PL 1.10 Electrical - Rear (2 of 3)</a>
                    <br>
                    <a id="boton" onclick="ir_part3()">PL 1.15 Electrical - Rear (3 of 3)</a>
                    <br>
                    <a id="boton" onclick="ir_part4()">PL 1.20 Electrical - Front/Right</a>
                    <br>
                    <a id="boton" onclick="ir_part5()">PL 1.25 Wire Harness</a></li>
                  </small></p>
              </details>
              <!--#01-->

              <!--#02-->
              <details>
                <summary>PL 2 - User Interface <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part6();">PL 2.05 User Interface (B8145/B8155)</a>
                    <br>
                    <a id="boton" onclick="ir_part7();">PL 2.10 User Interface (B8170)</a>
                  </small></p>
              </details>
              <!--#02-->

              <!--#03-->
              <details>
                <summary>PL 3 - Machine Run Control <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part8();">PL 3.05 Single Board Control Unit (SBC PWB)</a>
                    <br>
                    <a id="boton" onclick="ir_part9();">PL 3.06 Single Board Control Unit (SBC PWB) (Type B)</a>
                    <br>
                    <a id="boton" onclick="ir_part10();">PL 3.10 Video Contact Chassis Unit</a>
                    <br>
                    <a id="boton" onclick="ir_part11();">PL 3.15 Video Contact Chassis Assembly</a>
                  </small></p>
              </details>
              <!--#03-->

              <!--#04-->
              <details>
                <summary>PL 5 - DADF (250) <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part12();">PL 5.1 DADF Component (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part13();">PL 5.2 DADF, DADF Cover (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part14();">PL 5.3 DADF PWB (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part15();">PL 5.4 DCDC PWB (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part16();">PL 5.5 Document Tray, Tray Feed (250)(B8270)</a></li>
                    <br>
                    <a id="boton" onclick="ir_part17();">PL 5.6 DADF Document Tray (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part18();">PL 5.7 DADF Feeder Cover Unit (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part19();">PL 5.8 DADF Feeder Cover Assembly (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part20();">PL 5.9 Sensor Component (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part21();">PL 5.10 Drive Component (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part22();">PL 5.11 Lower Chute Assembly, Retard Roll (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part23();">PL 5.12 Pre Regi. In Chute, Platen High Roll (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part24();">PL 5.13 Exit Lower Chute, Out Chute Assembly (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part25();">PL 5.14 DADF Nudger Housing Assembly (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part26();">PL 5.15 Sonic Sensor Assembly (250) (B8270)</a>
                  </small></p>
              </details>
              <!--#04-->

              <!--#05-->
              <details>
                <summary>PL 5 - DADF (130) <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part27();">PL 5.50 DADF Component (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part28();">PL 5.51 DADF Cover (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part29();">PL 5.52 DADF Top Cover, Document Tray (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part30();">PL 5.53 DADF Base Frame Assembly (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part31();">PL 5.54 Regi. / Retard Chute/ Invert Unit (130)
                      (B8245/B8255)</a></li>
                    <br>
                    <a id="boton" onclick="ir_part32();">PL 5.55 Top Cover (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part33();">PL 5.56 Feeder / Nudger Roll Assembly (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part34();">PL 5.57 DADF Document Tray (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part35();">PL 5.58 DADF Drive (130) (B8245/B8255)</a>
                  </small></p>
              </details>
              <!--#05-->

              <!--#06-->
              <details>
                <summary>PL 10 - Copy Transportation and Fusing <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_part36();">PL 10.05 Fuser</a>
                    <br>
                    <a id="boton" onclick="ir_part37();">PL 10.10 Exit 1 Transport Components</a>
                    <br>
                    <a id="boton" onclick="ir_part38();">PL 10.15 Exit 2 Transport Components</a>
                    <br>
                    <a id="boton" onclick="ir_part39();">PL 10.20 Face Up Tray Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part40();">PL 10.25 Exit 2 Transport Assembly</a></li>
                    <br>
                    <a id="boton" onclick="ir_part41();">PL 10.30 Face Up Chute Assembly</a>
                  </small></p>
              </details>
              <!--#06-->

              <!--#07-->
              <details>
                <summary>PL 26 - Consumables and Tools <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_part42();">PL 26.10 Consumables and Tools</a>
                  </small></p>
              </details>
              <!--#7-->

              <!--#08-->
              <details>
                <summary>PL 28 - Covers <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part43();">PL 28.05 Covers (Front)</a>
                    <br>
                    <a id="boton" onclick="ir_part44();">PL 28.10 Covers (Rear)</a>
                    <br>
                    <a id="boton" onclick="ir_part45();">PL 28.15 Covers (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part46();">PL 28.20 Covers (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part47();">PL 28.25 Front Left Cover Compartment</a></li>
                    <br>
                    <a id="boton" onclick="ir_part48();">PL 28.30 Workshelf</a>
                  </small></p>
              </details>
              <!--#8-->

              <!--#09-->
              <details>
                <summary>PL 40 - Main Drive Assembly <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_part49();">PL 40.05 Main Drive Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part50();">PL 40.10 NOHAD (front)</a>
                    <br>
                    <a id="boton" onclick="ir_part51();">PL 40.15 NOHAD (rear)</a>
                  </small></p>
              </details>
              <!--#9-->

              <!--#10-->
              <details>
                <summary>PL 60 - Imaging <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_part52();">PL 60.05 LPH Module</a>
                    <br>
                    <a id="boton" onclick="ir_part53();">PL 60.10 Platen/IIT Cover (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part54();">PL 60.15 Platen Glass (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part55();">PL 60.20 CCD Lens (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part56();">PL 60.25 Carriage Cable/Motor (B8270)</a></li>
                    <br>
                    <a id="boton" onclick="ir_part57();">PL 60.30 Full/Half Carriage (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_part58();">PL 60.35 Platen/IIT Cover (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part59();">PL 60.40 Platen Glass (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part60();">PL 60.45 CCD Lens (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part61();">PL 60.50 Carriage Cable/Motor (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_part62();">PL 60.55 Full/Half Carriage (B8245/B8255)</a>
                  </small></p>
              </details>
              <!--#10-->

              <!--#011-->
              <details>
                <summary>PL 70 - Paper Supply <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_part63();">PL 70.05 Tray 1 and 2 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part64();">PL 70.10 Tray 1 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part65();">PL 70.15 Tray 2 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part66();">PL 70.30 TTM Components</a>
                    <br>
                    <a id="boton" onclick="ir_part67();">PL 70.35 TTM Covers and Tray 3/4 Assembly</a></li>
                    <br>
                    <a id="boton" onclick="ir_part68();">PL 70.40 TTM Tray 3 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part69();">PL 70.45 TTM Tray 4 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part70();">PL 70.50 Bypass Tray Components</a>
                    <br>
                    <a id="boton" onclick="ir_part71();">PL 70.55 Bypass Tray Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part72();">PL 70.70 Envelope Tray</a>
                  </small></p>
              </details>
              <!--#11-->

              <!--#012-->
              <details>
                <summary>PL 80 - Paper Transport <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_part73();">PL 80.05 Tray 1 and 2 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part74();">PL 80.10 Tray 1 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part75();">PL 80.15 Tray 2 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part76();">PL 80.40 TTM Transport Assembly / Tray 3 and 4 Feedhead
                      Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part77();">PL 80.45 TTM Drive Assembly</a></li>
                    <br>
                    <a id="boton" onclick="ir_part78();">PL 80.50 TTM Tray 3 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part79();">PL 80.55 TTM Tray 4 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part80();">PL 80.60 TTM Transport Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part81();">PL 80.65 Left Cover Components</a>
                    <br>
                    <a id="boton" onclick="ir_part82();">PL 80.70 Left Cover Transport Components</a>
                    <br>
                    <a id="boton" onclick="ir_part83();">PL 80.75 Left Cover Transport Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part84();">PL 80.80 Duplex Inner Chute Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part85();">PL 80.85 Duplex Chute Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part86();">PL 80.90 Registration Transport Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part87();">PL 80.95 Registration Drive Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part88();">PL 80.115 Bypass Tray Takeaway Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_part89();">PL 80.120 Bypass Tray Feedhead Assembly</a>
                  </small></p>
              </details>
              <!--#12-->

              <!--#013-->
              <details>
                <summary>PL 90 - Xerographics <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_part90();">PL 90.05 Developer Unit</a>
                    <br>
                    <a id="boton" onclick="ir_part91();">PL 90.10 Toner Dispense</a>
                    <br>
                    <a id="boton" onclick="ir_part92();">PL 90.15 Xerographic Components</a>
                    <br>
                    <a id="boton" onclick="ir_part93();">PL 90.20 Xerographic Assembly (1 of 2)</a>
                    <br>
                    <a id="boton" onclick="ir_part94();">PL 90.25 Xerographic Assembly (2 of 2)</a></li>
                    <br>
                    <a id="boton" onclick="ir_part95();">PL 90.30 IBT Belt Unit Components</a>
                    <br>
                    <a id="boton" onclick="ir_part96();">PL 90.35 IBT Belt Unit Assembly</a>
                  </small></p>
              </details>
              <!--#13-->

            </div>

          </div>
        </div>
        <!--Modal para B8155-->

        <!--Sesion para modelo B8255-->
        <!--Modal para B8255-->
        <style>
          #modal-8255 {
            display: none;

          }
        </style>

        <div class="menu-modal-part" id="modal-8255">
          <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExampleB82"
            aria-controls="offcanvasExampleB82">
            <i class='bx bx-food-menu'></i>
          </button>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExampleB82"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu Parts Lists</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

              <details>
                <summary>PL 1 - Standby Power <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_1();">PL 1.05 Electrical - Rear (1 of 3)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_2();">PL 1.10 Electrical - Rear (2 of 3)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_3()">PL 1.15 Electrical - Rear (3 of 3)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_4()">PL 1.20 Electrical - Front/Right</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_5()">PL 1.25 Wire Harness</a></li>
                  </small></p>
              </details>
              <!--#01-->

              <!--#02-->
              <details>
                <summary>PL 2 - User Interface <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_6();">PL 2.05 User Interface (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_7();">PL 2.10 User Interface (B8270)</a>
                  </small></p>
              </details>
              <!--#02-->

              <!--#03-->
              <details>
                <summary>PL 3 - Machine Run Control <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_8();">PL 3.05 Single Board Control Unit (SBC PWB)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_9();">PL 3.10 Video Contact Chassis Unit</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_10();">PL 3.15 Video Contact Chassis Assembly</a>
                  </small></p>
              </details>
              <!--#03-->

              <!--#04-->
              <details>
                <summary>PL 5 - DADF (250) <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_11();">PL 5.1 DADF Component (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_12();">PL 5.2 DADF, DADF Cover (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_13();">PL 5.3 DADF PWB (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_14();">PL 5.4 DCDC PWB (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_15();">PL 5.5 Document Tray, Tray Feed (250)(B8270)</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_16();">PL 5.6 DADF Document Tray (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_17();">PL 5.7 DADF Feeder Cover Unit (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_18();">PL 5.8 DADF Feeder Cover Assembly (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_19();">PL 5.9 Sensor Component (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_20();">PL 5.10 Drive Component (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_21();">PL 5.11 Lower Chute Assembly, Retard Roll (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_22();">PL 5.12 Pre Regi. In Chute, Platen High Roll (250)
                      (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_23();">PL 5.13 Exit Lower Chute, Out Chute Assembly (250)
                      (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_24();">PL 5.14 DADF Nudger Housing Assembly (250) (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_25();">PL 5.15 Sonic Sensor Assembly (250) (B8270)</a>
                  </small></p>
              </details>
              <!--#04-->

              <!--#05-->
              <details>
                <summary>PL 5 - DADF (130) <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_26();">PL 5.50 DADF Component (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_27();">PL 5.51 DADF Cover (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_28();">PL 5.52 DADF Top Cover, Document Tray (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_29();">PL 5.53 DADF Base Frame Assembly (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_30();">PL 5.54 Regi. / Retard Chute/ Invert Unit (130)
                      (B8245/B8255)</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_31();">PL 5.55 Top Cover (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_32();">PL 5.56 Feeder / Nudger Roll Assembly (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_33();">PL 5.57 DADF Document Tray (130) (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_34();">PL 5.58 DADF Drive (130) (B8245/B8255)</a>
                  </small></p>
              </details>
              <!--#05-->

              <!--#06-->
              <details>
                <summary>PL 10 - Copy Transportation and Fusing <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_35();">PL 10.05 Fuser</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_36();">PL 10.10 Exit 1 Transport Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_37();">PL 10.15 Exit 2 Transport Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_38();">PL 10.20 Face Up Tray Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_39();">PL 10.25 Exit 2 Transport Assembly</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_40();">PL 10.30 Face Up Chute Assembly</a>
                  </small></p>
              </details>
              <!--#06-->

              <!--#07-->
              <details>
                <summary>PL 26 - Consumables and Tools <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_41();">PL 26.10 Consumables and Tools</a>
                  </small></p>
              </details>
              <!--#7-->

              <!--#08-->
              <details>
                <summary>PL 28 - Covers <i class='bx bx-chevron-down' style='color:#4c4c4c'></i></summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_42();">PL 28.05 Covers (Front)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_43();">PL 28.10 Covers (Rear)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_44();">PL 28.15 Covers (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_45();">PL 28.20 Covers (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_46();">PL 28.25 Front Left Cover Compartment</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_47();">PL 28.30 Workshelf</a>
                  </small></p>
              </details>
              <!--#8-->

              <!--#09-->
              <details>
                <summary>PL 40 - Main Drive Assembly <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_48();">PL 40.05 Main Drive Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_49();">PL 40.10 NOHAD (front)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_50();">PL 40.15 NOHAD (rear)</a>
                  </small></p>
              </details>
              <!--#9-->

              <!--#10-->
              <details>
                <summary>PL 60 - Imaging <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_51();">PL 60.05 LPH Module</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_52();">PL 60.10 Platen/IIT Cover (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_53();">PL 60.15 Platen Glass (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_54();">PL 60.20 CCD Lens (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_55();">PL 60.25 Carriage Cable/Motor (B8270)</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_56();">PL 60.30 Full/Half Carriage (B8270)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_57();">PL 60.35 Platen/IIT Cover (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_58();">PL 60.40 Platen Glass (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_59();">PL 60.45 CCD Lens (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_60();">PL 60.50 Carriage Cable/Motor (B8245/B8255)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_61();">PL 60.55 Full/Half Carriage (B8245/B8255)</a>
                  </small></p>
              </details>
              <!--#10-->

              <!--#011-->
              <details>
                <summary>PL 70 - Paper Supply <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_62();">PL 70.05 Tray 1 and 2 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_63();">PL 70.10 Tray 1 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_64();">PL 70.15 Tray 2 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_65();">PL 70.30 TTM Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_66();">PL 70.35 TTM Covers and Tray 3/4 Assembly</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_67();">PL 70.40 TTM Tray 3 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_68();">PL 70.45 TTM Tray 4 Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_69();">PL 70.50 Bypass Tray Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_70();">PL 70.55 Bypass Tray Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_71();">PL 70.70 Envelope Tray</a>
                  </small></p>
              </details>
              <!--#11-->

              <!--#012-->
              <details>
                <summary>PL 80 - Paper Transport <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_72();">PL 80.05 Tray 1 and 2 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_73();">PL 80.10 Tray 1 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_74();">PL 80.15 Tray 2 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_75();">PL 80.40 TTM Transport Assembly / Tray 3 and 4 Feedhead
                      Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_76();">PL 80.45 TTM Drive Assembly</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_77();">PL 80.50 TTM Tray 3 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_78();">PL 80.55 TTM Tray 4 Feedhead Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_79();">PL 80.60 TTM Transport Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_80();">PL 80.65 Left Cover Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_81();">PL 80.70 Left Cover Transport Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_82();">PL 80.75 Left Cover Transport Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_83();">PL 80.80 Duplex Inner Chute Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_84();">PL 80.85 Duplex Chute Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_85();">PL 80.90 Registration Transport Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_86();">PL 80.95 Registration Drive Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_87();">PL 80.115 Bypass Tray Takeaway Assembly</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_88();">PL 80.120 Bypass Tray Feedhead Assembly</a>
                  </small></p>
              </details>
              <!--#12-->

              <!--#013-->
              <details>
                <summary>PL 90 - Xerographics <i class='bx bx-chevron-down' style='color:#4c4c4c'></i>
                </summary>
                <p><small>
                    <a id="boton" onclick="ir_b8255_89();">PL 90.05 Developer Unit</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_90();">PL 90.10 Toner Dispense</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_91();">PL 90.15 Xerographic Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_92();">PL 90.20 Xerographic Assembly (1 of 2)</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_93();">PL 90.25 Xerographic Assembly (2 of 2)</a></li>
                    <br>
                    <a id="boton" onclick="ir_b8255_94();">PL 90.30 IBT Belt Unit Components</a>
                    <br>
                    <a id="boton" onclick="ir_b8255_95();">PL 90.35 IBT Belt Unit Assembly</a>
                  </small></p>
              </details>
              <!--#13-->

            </div>

          </div>
        </div>
        <!--Modal para B8255-->

      </div>

      <!--show content parts-->
      <div class="show">
        <div class="show-header">

          <!--container-b8155-->
          <div class="container-b8155">
            <!--article id 00-->
            <style>
              #part0 {
                display: none;
              }

              #modal-8155 {
                display: none;
              }
            </style>

            <article class="item-article" id="part0">
              <h6>AltaLink B8155</h6>
              <img src="./IMG/images_pl/Altalinkb8155.png" alt="">
              <p>In this section you can view the part numbers for the AltaLink B8155 equipment.</p>
            </article>
            <!--article id 00-->

            <!--article id 01-->
            <style>
              #part1 {
                display: none;
              }
            </style>

            <article class="item-article" id="part1">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.05 Electrical - Rear (1 of 3)</p>
              <img src="./IMG/images_pl/PL_1Standby_power.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL1.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 01-->

            <!--article id 02-->
            <style>
              #part2 {
                display: none;
              }
            </style>

            <article class="item-article" id="part2">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.10 Electrical - Rear (2 of 3)</p>
              <img src="./IMG/images_pl/PL 1.10 Electrical - Rear (2 of 3).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL1.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 02-->

            <!--article id 03-->
            <style>
              #part3 {
                display: none;
              }
            </style>

            <article class="item-article" id="part3">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.15 Electrical - Rear (3 of 3)</p>
              <img src="./IMG/images_pl/PL 1.15 Electrical - Rear (3 of 3).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL1.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 03-->

            <!--article id 04-->
            <style>
              #part4 {
                display: none;
              }
            </style>

            <article class="item-article" id="part4">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.20 Electrical - Front/Right</p>
              <img src="./IMG/images_pl/PL 1.20 Electrical - Front_Right.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL1.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 04-->

            <!--article id 05-->
            <style>
              #part5 {
                display: none;
              }
            </style>

            <article class="item-article" id="part5">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.25 Wire Harness</p>
              <img src="./IMG/images_pl/PL 1.25 Wire Harness.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL1.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 05-->

            <!--article id 06-->
            <style>
              #part6 {
                display: none;
              }
            </style>

            <article class="item-article" id="part6">
              <h6>PL 2 - User Interface</h6>
              <p>PL 2.05 User Interface (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 2.05 User Interface (B8145-B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL2.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 06-->

            <!--article id 07-->
            <style>
              #part7 {
                display: none;
              }
            </style>

            <article class="item-article" id="part7">
              <h6>PL 2 - User Interface</h6>
              <p>PL 2.10 User Interface (B8170)</p>
              <img src="./IMG/images_pl/PL 2.10 User Interface (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL2.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 07-->

            <!--article id 08-->
            <style>
              #part8 {
                display: none;
              }
            </style>

            <article class="item-article" id="part8">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.05 Single Board Control Unit (SBC PWB) (Type A)</p>
              <img src="./IMG/images_pl/PL 3.05 Single Board Control Unit (SBC PWB) (Type A).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL3.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 08-->

            <!--article id 09-->
            <style>
              #part9 {
                display: none;
              }
            </style>

            <article class="item-article" id="part9">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.06 Single Board Control Unit (SBC PWB) (Type B)</p>
              <img src="./IMG/images_pl/PL 3.06 Single Board Control Unit (SBC PWB) (Type B).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL3.06' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 09-->

            <!--article id 10-->
            <style>
              #part10 {
                display: none;
              }
            </style>

            <article class="item-article" id="part10">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.10 Video Contact Chassis Unit</p>
              <img src="./IMG/images_pl/PL 3.10 Video Contact Chassis Unit.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL3.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 10-->

            <!--article id 11-->
            <style>
              #part11 {
                display: none;
              }
            </style>

            <article class="item-article" id="part11">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.15 Video Contact Chassis Assembly</p>
              <img src="./IMG/images_pl/PL 3.15 Video Contact Chassis Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL3.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 11-->

            <!--article id 12-->
            <style>
              #part12 {
                display: none;
              }
            </style>

            <article class="item-article" id="part12">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.1 DADF Component (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.1 DADF Component (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.1' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 12-->

            <!--article id 13-->
            <style>
              #part13 {
                display: none;
              }
            </style>

            <article class="item-article" id="part13">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.2 DADF, DADF Cover (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.2 DADF, DADF Cover (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.2' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 13-->


            <!--article id 14-->
            <style>
              #part14 {
                display: none;
              }
            </style>

            <article class="item-article" id="part14">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.3 DADF PWB (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.3 DADF PWB (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.3' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 14-->


            <!--article id 15-->
            <style>
              #part15 {
                display: none;
              }
            </style>

            <article class="item-article" id="part15">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.4 DCDC PWB (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.4 DCDC PWB (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.4' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 15-->


            <!--article id 16-->
            <style>
              #part16 {
                display: none;
              }
            </style>

            <article class="item-article" id="part16">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.5 Document Tray, Tray Feed (250)(B8170)</p>
              <img src="./IMG/images_pl/PL 5.5 Document Tray, Tray Feed (250)(B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.5' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 16-->

            <!--article id 17-->
            <style>
              #part17 {
                display: none;
              }
            </style>

            <article class="item-article" id="part17">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.6 DADF Document Tray (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.6 DADF Document Tray (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.6' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 17-->

            <!--article id 18-->
            <style>
              #part18 {
                display: none;
              }
            </style>

            <article class="item-article" id="part18">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.7 DADF Feeder Cover Unit (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.7 DADF Feeder Cover Unit (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.7' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 18-->


            <!--article id 19-->
            <style>
              #part19 {
                display: none;
              }
            </style>

            <article class="item-article" id="part19">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.8 DADF Feeder Cover Assembly (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.8 DADF Feeder Cover Assembly (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.8' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 19-->

            <!--article id 20-->
            <style>
              #part20 {
                display: none;
              }
            </style>

            <article class="item-article" id="part20">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.9 Sensor Component (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.9 Sensor Component (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.9' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 20-->

            <!--article id 21-->
            <style>
              #part21 {
                display: none;
              }
            </style>

            <article class="item-article" id="part21">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.10 Drive Component (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.10 Drive Component (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 21-->

            <!--article id 22-->
            <style>
              #part22 {
                display: none;
              }
            </style>

            <article class="item-article" id="part22">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.10 Drive Component (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.11 Lower Chute Assembly, Retard Roll (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.11' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 22-->

            <!--article id 23-->
            <style>
              #part23 {
                display: none;
              }
            </style>

            <article class="item-article" id="part23">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.12 Pre Regi. In Chute, Platen High Roll (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.12 Pre Regi. In Chute, Platen High Roll (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.12' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 23-->

            <!--article id 23-->
            <style>
              #part24 {
                display: none;
              }
            </style>

            <article class="item-article" id="part24">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.13 Exit Lower Chute, Out Chute Assembly (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.13 Exit Lower Chute, Out Chute Assembly (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.13' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 24-->


            <!--article id 25-->
            <style>
              #part25 {
                display: none;
              }
            </style>

            <article class="item-article" id="part25">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.14 DADF Nudger Housing Assembly (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.14 DADF Nudger Housing Assembly (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.14' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 25-->

            <!--article id 26-->
            <style>
              #part26 {
                display: none;
              }
            </style>

            <article class="item-article" id="part26">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.15 Sonic Sensor Assembly (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.15 Sonic Sensor Assembly (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 26-->

            <!--article id 27-->
            <style>
              #part27 {
                display: none;
              }
            </style>

            <article class="item-article" id="part27">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.50 DADF Component (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.50 DADF Component (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 27-->

            <!--article id 28-->
            <style>
              #part28 {
                display: none;
              }
            </style>

            <article class="item-article" id="part28">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.51 DADF Cover (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.51 DADF Cover (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.51' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 28-->

            <!--article id 29-->
            <style>
              #part29 {
                display: none;
              }
            </style>

            <article class="item-article" id="part29">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.52 DADF Top Cover, Document Tray (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.52 DADF Top Cover, Document Tray (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.52' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 29-->

            <!--article id 30-->
            <style>
              #part30 {
                display: none;
              }
            </style>

            <article class="item-article" id="part30">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.53 DADF Base Frame Assembly (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.53 DADF Base Frame Assembly (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.53' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 30-->

            <!--article id 31-->
            <style>
              #part31 {
                display: none;
              }
            </style>

            <article class="item-article" id="part31">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.54 Regi. / Retard Chute/ Invert Unit (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.54 Regi. _Retard Chute_Invert Unit (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.54' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 31-->


            <!--article id 32-->
            <style>
              #part32 {
                display: none;
              }
            </style>

            <article class="item-article" id="part32">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.55 Top Cover (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.55 Top Cover (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 32-->


            <!--article id 33-->
            <style>
              #part33 {
                display: none;
              }
            </style>

            <article class="item-article" id="part33">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.56 Feeder / Nudger Roll Assembly (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.56 Feeder _ Nudger Roll Assembly (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.56' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 33-->


            <!--article id 34-->
            <style>
              #part34 {
                display: none;
              }
            </style>

            <article class="item-article" id="part34">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.57 DADF Document Tray (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.57 DADF Document Tray (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.57' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 34-->


            <!--article id 35-->
            <style>
              #part35 {
                display: none;
              }
            </style>

            <article class="item-article" id="part35">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.58 DADF Drive (130) (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 5.58 DADF Drive (130) (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.58' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 35-->

            <!--article id 36-->
            <style>
              #part36 {
                display: none;
              }
            </style>

            <article class="item-article" id="part36">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.05 Fuser</p>
              <img src="./IMG/images_pl/PL 10.05 Fuser.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL10.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 36-->

            <!--article id 37-->
            <style>
              #part37 {
                display: none;
              }
            </style>

            <article class="item-article" id="part37">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.10 Exit 1 Transport Components</p>
              <img src="./IMG/images_pl/PL 10.10 Exit 1 Transport Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL10.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 37-->

            <!--article id 38-->
            <style>
              #part38 {
                display: none;
              }
            </style>

            <article class="item-article" id="part38">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.15 Exit 2 Transport Components</p>
              <img src="./IMG/images_pl/PL 10.15 Exit 2 Transport Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL10.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 38-->

            <!--article id 39-->
            <style>
              #part39 {
                display: none;
              }
            </style>

            <article class="item-article" id="part39">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.20 Face Up Tray Assembly</p>
              <img src="./IMG/images_pl/PL 10.20 Face Up Tray Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL10.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 39-->

            <!--article id 40-->
            <style>
              #part40 {
                display: none;
              }
            </style>

            <article class="item-article" id="part40">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.25 Exit 2 Transport Assembly</p>
              <img src="./IMG/images_pl/PL 10.25 Exit 2 Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL10.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 40-->

            <!--article id 41-->
            <style>
              #part41 {
                display: none;
              }
            </style>

            <article class="item-article" id="part41">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.30 Face Up Chute Assembly</p>
              <img src="./IMG/images_pl/PL 10.30 Face Up Chute Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL10.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 41-->

            <!--article id 42-->
            <style>
              #part42 {
                display: none;
              }
            </style>

            <article class="item-article" id="part42">
              <h6>PL 26 - Consumables and Tools</h6>
              <p>PL 26.10 Consumables and Tools</p>
              <img src="./IMG/images_pl/PL 26.10 Consumables and Tools.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL26.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 42-->

            <!--article id 43-->
            <style>
              #part43 {
                display: none;
              }
            </style>

            <article class="item-article" id="part43">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.05 Covers (Front)</p>
              <img src="./IMG/images_pl/PL 28.05 Covers (Front).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL28.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 43-->


            <!--article id 44-->
            <style>
              #part44 {
                display: none;
              }
            </style>

            <article class="item-article" id="part44">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.10 Covers (Rear)</p>
              <img src="./IMG/images_pl/PL 28.10 Covers (Rear).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL28.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 44-->

            <!--article id 45-->
            <style>
              #part45 {
                display: none;
              }
            </style>

            <article class="item-article" id="part45">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.15 Covers (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 28.15 Covers (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL28.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 45-->

            <!--article id 46-->
            <style>
              #part46 {
                display: none;
              }
            </style>

            <article class="item-article" id="part46">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.20 Covers (B8170)</p>
              <img src="./IMG/images_pl/PL 28.20 Covers (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL28.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 46-->

            <!--article id 47-->
            <style>
              #part47 {
                display: none;
              }
            </style>

            <article class="item-article" id="part47">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.25 Front Left Cover Compartment</p>
              <img src="./IMG/images_pl/PL 28.25 Front Left Cover Compartment.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL28.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 47-->

            <!--article id 48-->
            <style>
              #part48 {
                display: none;
              }
            </style>

            <article class="item-article" id="part48">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.30 Workshelf</p>
              <img src="./IMG/images_pl/PL 28.30 Workshelf.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL28.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 48-->

            <!--article id 49-->
            <style>
              #part49 {
                display: none;
              }
            </style>

            <article class="item-article" id="part49">
              <h6>PL 40 - Main Drive Assembly</h6>
              <p>PL 40.05 Main Drive Assembly</p>
              <img src="./IMG/images_pl/PL 40.05 Main Drive Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL40.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 49-->


            <!--article id 50-->
            <style>
              #part50 {
                display: none;
              }
            </style>

            <article class="item-article" id="part50">
              <h6>PL 40 - Main Drive Assembly</h6>
              <p>PL 40.10 NOHAD (front)</p>
              <img src="./IMG/images_pl/PL 40.10 NOHAD (front).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL40.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 50-->



            <!--article id 51-->
            <style>
              #part51 {
                display: none;
              }
            </style>

            <article class="item-article" id="part51">
              <h6>PL 40 - Main Drive Assembly</h6>
              <p>PL 40.15 NOHAD (rear)</p>
              <img src="./IMG/images_pl/PL 40.15 NOHAD (rear).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL40.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 51-->


            <!--article id 52-->
            <style>
              #part52 {
                display: none;
              }
            </style>

            <article class="item-article" id="part52">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.05 LPH Module</p>
              <img src="./IMG/images_pl/PL 60.05 LPH Module.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 52-->

            <!--article id 53-->
            <style>
              #part53 {
                display: none;
              }
            </style>

            <article class="item-article" id="part53">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.10 Platen/IIT Cover (B8170)</p>
              <img src="./IMG/images_pl/PL 60.10 Platen_IIT Cover (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 53-->


            <!--article id 54-->
            <style>
              #part54 {
                display: none;
              }
            </style>

            <article class="item-article" id="part54">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.15 Platen Glass (B8170)</p>
              <img src="./IMG/images_pl/PL 60.15 Platen Glass (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 54-->


            <!--article id 55-->
            <style>
              #part55 {
                display: none;
              }
            </style>

            <article class="item-article" id="part55">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.20 CCD Lens (B8170)</p>
              <img src="./IMG/images_pl/PL 60.20 CCD Lens (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 55-->


            <!--article id 56-->
            <style>
              #part56 {
                display: none;
              }
            </style>

            <article class="item-article" id="part56">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.25 Carriage Cable/Motor (B8170)</p>
              <img src="./IMG/images_pl/PL 60.25 Carriage Cable_Motor (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 56-->


            <!--article id 57-->
            <style>
              #part57 {
                display: none;
              }
            </style>

            <article class="item-article" id="part57">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.30 Full/Half Carriage (B8170)</p>
              <img src="./IMG/images_pl/PL 60.30 Full_Half Carriage (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 57-->


            <!--article id 58-->
            <style>
              #part58 {
                display: none;
              }
            </style>

            <article class="item-article" id="part58">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.35 Platen/IIT Cover (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 60.35 Platen_IIT Cover (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.35' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 58-->


            <!--article id 59-->
            <style>
              #part59 {
                display: none;
              }
            </style>

            <article class="item-article" id="part59">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.40 Platen Glass (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 60.40 Platen Glass (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.40' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 59-->


            <!--article id 60-->
            <style>
              #part60 {
                display: none;
              }
            </style>

            <article class="item-article" id="part60">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.45 CCD Lens (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 60.45 CCD Lens (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.45' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 60-->


            <!--article id 61-->
            <style>
              #part61 {
                display: none;
              }
            </style>

            <article class="item-article" id="part61">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.50 Carriage Cable/Motor (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 60.50 Carriage Cable_Motor (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 61-->


            <!--article id 62-->
            <style>
              #part62 {
                display: none;
              }
            </style>

            <article class="item-article" id="part62">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.55 Full/Half Carriage (B8145/B8155)</p>
              <img src="./IMG/images_pl/PL 60.55 Full_Half Carriage (B8145_B8155).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL60.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 62-->


            <!--article id 63-->
            <style>
              #part63 {
                display: none;
              }
            </style>

            <article class="item-article" id="part63">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.05 Tray 1 and 2 Assembly</p>
              <img src="./IMG/images_pl/PL 70.05 Tray 1 and 2 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 63-->

            <!--article id 64-->
            <style>
              #part64 {
                display: none;
              }
            </style>

            <article class="item-article" id="part64">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.10 Tray 1 Assembly</p>
              <img src="./IMG/images_pl/PL 70.10 Tray 1 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 64-->


            <!--article id 65-->
            <style>
              #part65 {
                display: none;
              }
            </style>

            <article class="item-article" id="part65">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.15 Tray 2 Assembly</p>
              <img src="./IMG/images_pl/PL 70.15 Tray 2 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 65-->


            <!--article id 66-->
            <style>
              #part66 {
                display: none;
              }
            </style>

            <article class="item-article" id="part66">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.30 TTM Components</p>
              <img src="./IMG/images_pl/PL 70.30 TTM Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 66-->


            <!--article id 67-->
            <style>
              #part67 {
                display: none;
              }
            </style>

            <article class="item-article" id="part67">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.35 TTM Covers and Tray 3/4 Assembly</p>
              <img src="./IMG/images_pl/PL 70.35 TTM Covers and Tray 3_4 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.35' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 67-->


            <!--article id 68-->
            <style>
              #part68 {
                display: none;
              }
            </style>

            <article class="item-article" id="part68">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.40 TTM Tray 3 Assembly</p>
              <img src="./IMG/images_pl/PL 70.40 TTM Tray 3 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.40' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 68-->


            <!--article id 69-->
            <style>
              #part69 {
                display: none;
              }
            </style>

            <article class="item-article" id="part69">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.45 TTM Tray 4 Assembly</p>
              <img src="./IMG/images_pl/PL 70.45 TTM Tray 4 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.45' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 69-->

            <!--article id 70-->
            <style>
              #part70 {
                display: none;
              }
            </style>

            <article class="item-article" id="part70">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.50 Bypass Tray Components</p>
              <img src="./IMG/images_pl/PL 70.50 Bypass Tray Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 70-->


            <!--article id 71-->
            <style>
              #part71 {
                display: none;
              }
            </style>

            <article class="item-article" id="part71">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.55 Bypass Tray Assembly</p>
              <img src="./IMG/images_pl/PL 70.55 Bypass Tray Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 71-->


            <!--article id 72-->
            <style>
              #part72 {
                display: none;
              }
            </style>

            <article class="item-article" id="part72">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.70 Envelope Tray</p>
              <img src="./IMG/images_pl/PL 70.70 Envelope Tray.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL70.70' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 72-->


            <!--article id 73-->
            <style>
              #part73 {
                display: none;
              }
            </style>

            <article class="item-article" id="part73">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.05 Tray 1 and 2 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.05 Tray 1 and 2 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 73-->

            <!--article id 74-->
            <style>
              #part74 {
                display: none;
              }
            </style>

            <article class="item-article" id="part74">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.10 Tray 1 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.10 Tray 1 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 74-->


            <!--article id 75-->
            <style>
              #part75 {
                display: none;
              }
            </style>

            <article class="item-article" id="part75">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.15 Tray 2 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.15 Tray 2 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 75-->



            <!--article id 76-->
            <style>
              #part76 {
                display: none;
              }
            </style>

            <article class="item-article" id="part76">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.40 TTM Transport Assembly / Tray 3 and 4 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.40 TTM Transport Assembly _ Tray 3 and 4 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.40' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 76-->


            <!--article id 77-->
            <style>
              #part77 {
                display: none;
              }
            </style>

            <article class="item-article" id="part77">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.45 TTM Drive Assembly</p>
              <img src="./IMG/images_pl/PL 80.45 TTM Drive Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.45' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 77-->


            <!--article id 78-->
            <style>
              #part78 {
                display: none;
              }
            </style>

            <article class="item-article" id="part78">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.50 TTM Tray 3 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.50 TTM Tray 3 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 78-->

            <!--article id 79-->
            <style>
              #part79 {
                display: none;
              }
            </style>

            <article class="item-article" id="part79">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.55 TTM Tray 4 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.55 TTM Tray 4 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 79-->


            <!--article id 80-->
            <style>
              #part80 {
                display: none;
              }
            </style>

            <article class="item-article" id="part80">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.60 TTM Transport Assembly</p>
              <img src="./IMG/images_pl/PL 80.60 TTM Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.60' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 80-->

            <!--article id 81-->
            <style>
              #part81 {
                display: none;
              }
            </style>

            <article class="item-article" id="part81">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.65 Left Cover Components</p>
              <img src="./IMG/images_pl/PL 80.65 Left Cover Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.65' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 81-->


            <!--article id 82-->
            <style>
              #part82 {
                display: none;
              }
            </style>

            <article class="item-article" id="part82">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.70 Left Cover Transport Components</p>
              <img src="./IMG/images_pl/PL 80.70 Left Cover Transport Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.70' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 82-->


            <!--article id 83-->
            <style>
              #part83 {
                display: none;
              }
            </style>

            <article class="item-article" id="part83">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.75 Left Cover Transport Assembly</p>
              <img src="./IMG/images_pl/PL 80.75 Left Cover Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.75' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 83-->


            <!--article id 84-->
            <style>
              #part84 {
                display: none;
              }
            </style>

            <article class="item-article" id="part84">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.80 Duplex Inner Chute Assembly</p>
              <img src="./IMG/images_pl/PL 80.80 Duplex Inner Chute Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.80' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 84-->


            <!--article id 85-->
            <style>
              #part85 {
                display: none;
              }
            </style>

            <article class="item-article" id="part85">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.85 Duplex Chute Assembly</p>
              <img src="./IMG/images_pl/PL 80.85 Duplex Chute Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.85' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 85-->


            <!--article id 86-->
            <style>
              #part86 {
                display: none;
              }
            </style>

            <article class="item-article" id="part86">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.90 Registration Transport Assembly</p>
              <img src="./IMG/images_pl/PL 80.90 Registration Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.90' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 86-->


            <!--article id 87-->
            <style>
              #part87 {
                display: none;
              }
            </style>

            <article class="item-article" id="part87">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.95 Registration Drive Assembly</p>
              <img src="./IMG/images_pl/PL 80.95 Registration Drive Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.95' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 87-->


            <!--article id 88-->
            <style>
              #part88 {
                display: none;
              }
            </style>

            <article class="item-article" id="part88">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.115 Bypass Tray Takeaway Assembly</p>
              <img src="./IMG/images_pl/PL 80.115 Bypass Tray Takeaway Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.115' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 88-->


            <!--article id 89-->
            <style>
              #part89 {
                display: none;
              }
            </style>

            <article class="item-article" id="part89">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.120 Bypass Tray Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.120 Bypass Tray Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL80.120' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 89-->


            <!--article id 90-->
            <style>
              #part90 {
                display: none;
              }
            </style>

            <article class="item-article" id="part90">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.05 Developer Unit</p>
              <img src="./IMG/images_pl/PL 90.05 Developer Unit.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 90-->


            <!--article id 91-->
            <style>
              #part91 {
                display: none;
              }
            </style>

            <article class="item-article" id="part91">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.10 Toner Dispense</p>
              <img src="./IMG/images_pl/PL 90.10 Toner Dispense.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 91-->


            <!--article id 92-->
            <style>
              #part92 {
                display: none;
              }
            </style>

            <article class="item-article" id="part92">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.15 Xerographic Components</p>
              <img src="./IMG/images_pl/PL 90.15 Xerographic Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 92-->


            <!--article id 93-->
            <style>
              #part93 {
                display: none;
              }
            </style>

            <article class="item-article" id="part93">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.20 Xerographic Assembly (1 of 2)</p>
              <img src="./IMG/images_pl/PL 90.20 Xerographic Assembly (1 of 2).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 93-->



            <!--article id 94-->
            <style>
              #part94 {
                display: none;
              }
            </style>

            <article class="item-article" id="part94">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.25 Xerographic Assembly (2 of 2)</p>
              <img src="./IMG/images_pl/PL 90.25 Xerographic Assembly (2 of 2).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 94-->



            <!--article id 95-->
            <style>
              #part95 {
                display: none;
              }
            </style>

            <article class="item-article" id="part95">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.30 IBT Belt Unit Components</p>
              <img src="./IMG/images_pl/PL 90.30 IBT Belt Unit Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 95-->



            <!--article id 96-->
            <style>
              #part96 {
                display: none;
              }
            </style>

            <article class="item-article" id="part96">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.35 IBT Belt Unit Assembly</p>
              <img src="./IMG/images_pl/PL 90.35 IBT Belt Unit Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL90.35' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 96-->

          </div>
          <!--container-b8155-->


          <!--container-b8255-->
          <div class="container-b8255">
            <!--article id 00-->
            <style>
              #b8255_0 {
                display: none;
              }

              #modal-8255 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_0">
              <h6>AltaLink B8255</h6>
              <img src="./IMG/images_pl_8255/B8255.png" alt="">
              <p>In this section you can view the part numbers for the AltaLink B8255 equipment.</p>
            </article>
            <!--article id 00-->

            <!--article id 01-->
            <style>
              #b8255_1 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_1">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.05 Electrical - Rear (1 of 3)</p>
              <img src="./IMG/images_pl_8255/PL 1.05 Electrical - Rear (1 of 3).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL1.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 01-->

            <!--article id 02-->
            <style>
              #b8255_2 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_2">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.10 Electrical - Rear (2 of 3)</p>
              <img src="./IMG/images_pl_8255/PL 1.10 Electrical - Rear (2 of 3).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL1.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 02-->

            <!--article id 03-->
            <style>
              #b8255_3 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_3">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.15 Electrical - Front/Right</p>
              <img src="./IMG/images_pl_8255/PL 1.15 Electrical - Rear (3 of 3).png " alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL1.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 03-->

            <!--article id 04-->
            <style>
              #b8255_4 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_4">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.20 Electrical - Front/Right</p>
              <img src="./IMG/images_pl_8255/PL 1.20 Electrical - Front_Right.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL1.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 04-->

            <!--article id 05-->
            <style>
              #b8255_5 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_5">
              <h6>PL 1 - Standby Power</h6>
              <p>PL 1.25 Wire Harness</p>
              <img src="./IMG/images_pl_8255/PL 1.25 Wire Harness.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL1.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 05-->

            <!--article id 06-->
            <style>
              #b8255_6 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_6">
              <h6>PL 2 - User Interface</h6>
              <p>PL 2.05 User Interface (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 2.05 User Interface (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL2.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 06-->

            <!--article id 07-->
            <style>
              #b8255_7 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_7">
              <h6>PL 2 - User Interface</h6>
              <p>PL 2.10 User Interface (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 2.10 User Interface (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL2.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 07-->

            <!--article id 08-->
            <style>
              #b8255_8 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_8">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.05 Single Board Control Unit (SBC PWB) (Type A)</p>
              <img src="./IMG/images_pl_8255/PL 3.05 Single Board Control Unit (SBC PWB).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL3.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 08-->

            <!--article id 09-->
            <style>
              #b8255_9 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_9">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.10 Video Contact Chassis Unit</p>
              <img src="./IMG/images_pl/PL 3.10 Video Contact Chassis Unit.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL3.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 09-->

            <!--article id 10-->
            <style>
              #b8255_10 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_10">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 3.15 Video Contact Chassis Assembly</p>
              <img src="./IMG/images_pl/PL 3.15 Video Contact Chassis Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL3.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 10-->

            <!--article id 11-->
            <style>
              #b8255_11 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_11">
              <h6>PL 3 - Machine Run Control</h6>
              <p>PL 5.1 DADF Component (250) (B8270)</p>
              <img src="./IMG/images_pl/PL 5.1 DADF Component (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.1' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 11-->

            <!--article id 12-->
            <style>
              #b8255_12 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_12">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.2 DADF, DADF Cover (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.2 DADF, DADF Cover (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.2' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 12-->

            <!--article id 13-->
            <style>
              #b8255_13 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_13">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.2 DADF, DADF Cover (250) (B8170)</p>
              <img src="./IMG/images_pl/PL 5.2 DADF, DADF Cover (250) (B8170).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8155 WHERE codPL='PL5.2' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 13-->


            <!--article id 14-->
            <style>
              #b8255_14 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_14">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.3 DADF PWB (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.3 DADF PWB (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.3' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 14-->


            <!--article id 15-->
            <style>
              #b8255_15 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_15">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.4 DCDC PWB (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.4 DCDC PWB (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.4' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 15-->


            <!--article id 16-->
            <style>
              #b8255_15 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_15">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.5 Document Tray, Tray Feed (250)(B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.5 Document Tray, Tray Feed (250)(B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.5' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 16-->

            <!--article id 17-->
            <style>
              #b8255_16 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_16">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.6 DADF Document Tray (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.6 DADF Document Tray (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.6' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 17-->

            <!--article id 18-->
            <style>
              #b8255_17 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_17">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.7 DADF Feeder Cover Unit (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.7 DADF Feeder Cover Unit (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.7' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 18-->


            <!--article id 19-->
            <style>
              #b8255_18 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_18">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.8 DADF Feeder Cover Assembly (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.8 DADF Feeder Cover Assembly (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.8' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 19-->

            <!--article id 20-->
            <style>
              #b8255_19 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_19">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.9 Sensor Component (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.9 Sensor Component (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.9' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 20-->

            <!--article id 21-->
            <style>
              #b8255_20 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_20">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.10 Drive Component (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.10 Drive Component (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 21-->

            <!--article id 22-->
            <style>
              #b8255_21 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_21">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.10 Drive Component (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.11 Lower Chute Assembly, Retard Roll (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.11' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 22-->

            <!--article id 23-->
            <style>
              #b8255_22 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_22">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.12 Pre Regi. In Chute, Platen High Roll (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.12 Pre Regi. In Chute, Platen High Roll (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.12' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 23-->

            <!--article id 23-->
            <style>
              #b8255_23 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_23">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.13 Exit Lower Chute, Out Chute Assembly (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.13 Exit Lower Chute, Out Chute Assembly (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.13' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 24-->


            <!--article id 25-->
            <style>
              #b8255_24 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_24">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.14 DADF Nudger Housing Assembly (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.14 DADF Nudger Housing Assembly (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.14' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 25-->

            <!--article id 26-->
            <style>
              #b8255_25 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_25">
              <h6>PL 5 - DADF (250)</h6>
              <p>PL 5.15 Sonic Sensor Assembly (250) (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 5.15 Sonic Sensor Assembly (250) (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 26-->

            <!--article id 27-->
            <style>
              #b8255_26 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_26">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.50 DADF Component (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.50 DADF Component (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 27-->

            <!--article id 28-->
            <style>
              #b8255_27 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_27">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.51 DADF Cover (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.51 DADF Cover (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.51' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 28-->

            <!--article id 29-->
            <style>
              #b8255_28 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_28">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.52 DADF Top Cover, Document Tray (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.52 DADF Top Cover, Document Tray (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.52' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 29-->

            <!--article id 30-->
            <style>
              #b8255_29 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_29">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.53 DADF Base Frame Assembly (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.53 DADF Base Frame Assembly (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.53' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 30-->

            <!--article id 31-->
            <style>
              #b8255_30 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_30">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.54 Regi. / Retard Chute/ Invert Unit (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.54 Regi. _ Retard Chute_ Invert Unit (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.54' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 31-->


            <!--article id 32-->
            <style>
              #b8255_31 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_31">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.55 Top Cover (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.55 Top Cover (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 32-->


            <!--article id 33-->
            <style>
              #b8255_32 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_32">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.56 Feeder / Nudger Roll Assembly (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.56 Feeder _ Nudger Roll Assembly (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.56' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 33-->


            <!--article id 34-->
            <style>
              #b8255_33 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_33">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.57 DADF Document Tray (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.57 DADF Document Tray (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.57' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 34-->


            <!--article id 35-->
            <style>
              #b8255_34 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_34">
              <h6>PL 5 - DADF (130)</h6>
              <p>PL 5.58 DADF Drive (130) (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 5.58 DADF Drive (130) (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL5.58' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 35-->

            <!--article id 36-->
            <style>
              #b8255_35 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_35">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.05 Fuser</p>
              <img src="./IMG/images_pl_8255/PL 10.05 Fuser.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL10.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 36-->

            <!--article id 37-->
            <style>
              #b8255_36 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_36">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.10 Exit 1 Transport Components</p>
              <img src="./IMG/images_pl_8255/PL 10.10 Exit 1 Transport Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL10.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 37-->

            <!--article id 38-->
            <style>
              #b8255_37 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_37">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.15 Exit 2 Transport Components</p>
              <img src="./IMG/images_pl_8255/PL 10.15 Exit 2 Transport Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL10.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 38-->

            <!--article id 39-->
            <style>
              #b8255_38 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_38">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.20 Face Up Tray Assembly</p>
              <img src="./IMG/images_pl_8255/PL 10.20 Face Up Tray Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL10.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 39-->

            <!--article id 40-->
            <style>
              #b8255_39 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_39">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.25 Exit 2 Transport Assembly</p>
              <img src="./IMG/images_pl_8255/PL 10.25 Exit 2 Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL10.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 40-->

            <!--article id 41-->
            <style>
              #b8255_40 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_40">
              <h6>PL 10 - Copy Transportation and Fusing</h6>
              <p>PL 10.30 Face Up Chute Assembly</p>
              <img src="./IMG/images_pl_8255/PL 10.30 Face Up Chute Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL10.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 41-->

            <!--article id 42-->
            <style>
              #b8255_41 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_41">
              <h6>PL 26 - Consumables and Tools</h6>
              <p>PL 26.10 Consumables and Tools</p>
              <img src="./IMG/images_pl_8255/PL 26.10 Consumables and Tools.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL26.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 42-->

            <!--article id 43-->
            <style>
              #b8255_42 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_42">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.05 Covers (Front)</p>
              <img src="./IMG/images_pl_8255/PL 28.05 Covers (Front).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL28.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 43-->


            <!--article id 44-->
            <style>
              #b8255_43 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_43">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.10 Covers (Rear)</p>
              <img src="./IMG/images_pl_8255/PL 28.10 Covers (Rear).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL28.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 44-->

            <!--article id 45-->
            <style>
              #b8255_44 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_44">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.15 Covers (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 28.15 Covers (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL28.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 45-->

            <!--article id 46-->
            <style>
              #b8255_45 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_45">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.20 Covers (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 28.20 Covers (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL28.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 46-->

            <!--article id 47-->
            <style>
              #b8255_46 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_46">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.25 Front Left Cover Compartment</p>
              <img src="./IMG/images_pl_8255/PL 28.25 Front Left Cover Compartment.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL28.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 47-->

            <!--article id 48-->
            <style>
              #b8255_47 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_47">
              <h6>PL 28 - Covers</h6>
              <p>PL 28.30 Workshelf</p>
              <img src="./IMG/images_pl_8255/PL 28.30 Workshelf.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL28.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 48-->

            <!--article id 49-->
            <style>
              #b8255_48 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_48">
              <h6>PL 40 - Main Drive Assembly</h6>
              <p>PL 40.05 Main Drive Assembly</p>
              <img src="./IMG/images_pl_8255/PL 40.05 Main Drive Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL40.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 49-->


            <!--article id 50-->
            <style>
              #b8255_49 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_49">
              <h6>PL 40 - Main Drive Assembly</h6>
              <p>PL 40.10 NOHAD (front)</p>
              <img src="./IMG/images_pl_8255/PL 40.10 NOHAD (front).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL40.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 50-->



            <!--article id 51-->
            <style>
              #b8255_50 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_50">
              <h6>PL 40 - Main Drive Assembly</h6>
              <p>PL 40.15 NOHAD (rear)</p>
              <img src="./IMG/images_pl_8255/PL 40.15 NOHAD (rear).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL40.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 51-->


            <!--article id 52-->
            <style>
              #b8255_51 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_51">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.05 LPH Module</p>
              <img src="./IMG/images_pl_8255/PL 60.05 LPH Module.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 52-->

            <!--article id 53-->
            <style>
              #b8255_52 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_52">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.10 Platen/IIT Cover (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 60.10 Platen_IIT Cover (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 53-->


            <!--article id 54-->
            <style>
              #b8255_53 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_53">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.15 Platen Glass (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 60.15 Platen Glass (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 54-->


            <!--article id 55-->
            <style>
              #b8255_54 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_54">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.20 CCD Lens (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 60.20 CCD Lens (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 55-->


            <!--article id 56-->
            <style>
              #b8255_55 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_55">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.25 Carriage Cable/Motor (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 60.25 Carriage Cable_Motor (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 56-->


            <!--article id 57-->
            <style>
              #b8255_56 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_56">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.30 Full/Half Carriage (B8270)</p>
              <img src="./IMG/images_pl_8255/PL 60.30 Full_Half Carriage (B8270).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 57-->


            <!--article id 58-->
            <style>
              #b8255_57 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_57">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.35 Platen/IIT Cover (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 60.35 Platen_IIT Cover (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.35' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 58-->


            <!--article id 59-->
            <style>
              #b8255_58 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_58">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.40 Platen Glass (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 60.40 Platen Glass (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.40' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 59-->


            <!--article id 60-->
            <style>
              #b8255_59 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_59">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.45 CCD Lens (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 60.45 CCD Lens (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.45' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 60-->


            <!--article id 61-->
            <style>
              #b8255_60 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_60">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.50 Carriage Cable/Motor (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 60.50 Carriage Cable_Motor (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 61-->


            <!--article id 62-->
            <style>
              #b8255_61 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_61">
              <h6>PL 60 - Imaging</h6>
              <p>PL 60.55 Full/Half Carriage (B8245/B8255)</p>
              <img src="./IMG/images_pl_8255/PL 60.55 Full_Half Carriage (B8245_B8255).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL60.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 62-->


            <!--article id 63-->
            <style>
              #b8255_62 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_62">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.05 Tray 1 and 2 Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.05 Tray 1 and 2 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 63-->

            <!--article id 64-->
            <style>
              #b8255_63 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_63">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.10 Tray 1 Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.10 Tray 1 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 64-->


            <!--article id 65-->
            <style>
              #b8255_64 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_64">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.15 Tray 2 Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.15 Tray 2 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 65-->


            <!--article id 66-->
            <style>
              #b8255_65 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_65">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.30 TTM Components</p>
              <img src="./IMG/images_pl_8255/PL 70.30 TTM Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 66-->


            <!--article id 67-->
            <style>
              #b8255_66 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_66">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.35 TTM Covers and Tray 3/4 Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.35 TTM Covers and Tray 3_4 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.35' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 67-->


            <!--article id 68-->
            <style>
              #b8255_67 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_67">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.40 TTM Tray 3 Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.40 TTM Tray 3 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.40' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 68-->


            <!--article id 69-->
            <style>
              #b8255_68 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_68">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.45 TTM Tray 4 Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.45 TTM Tray 4 Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.45' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 69-->

            <!--article id 70-->
            <style>
              #b8255_69 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_69">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.50 Bypass Tray Components</p>
              <img src="./IMG/images_pl_8255/PL 70.50 Bypass Tray Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 70-->


            <!--article id 71-->
            <style>
              #b8255_70 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_70">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.55 Bypass Tray Assembly</p>
              <img src="./IMG/images_pl_8255/PL 70.55 Bypass Tray Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 71-->


            <!--article id 72-->
            <style>
              #b8255_71 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_71">
              <h6>PL 70 - Paper Supply</h6>
              <p>PL 70.70 Envelope Tray</p>
              <img src="./IMG/images_pl_8255/PL 70.70 Envelope Tray.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL70.70' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 72-->


            <!--article id 73-->
            <style>
              #b8255_72 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_72">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.05 Tray 1 and 2 Feedhead Assembly</p>
              <img src="./IMG/images_pl/PL 80.05 Tray 1 and 2 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 73-->

            <!--article id 74-->
            <style>
              #b8255_73 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_73">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.10 Tray 1 Feedhead Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.10 Tray 1 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 74-->


            <!--article id 75-->
            <style>
              #b8255_74 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_74">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.15 Tray 2 Feedhead Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.15 Tray 2 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 75-->



            <!--article id 76-->
            <style>
              #b8255_75 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_75">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.40 TTM Transport Assembly / Tray 3 and 4 Feedhead Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.40 TTM Transport Assembly - Tray 3 and 4 Feedhead Assembly.png"
                alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.40' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 76-->


            <!--article id 77-->
            <style>
              #b8255_76 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_76">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.45 TTM Drive Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.45 TTM Drive Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.45' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 77-->


            <!--article id 78-->
            <style>
              #b8255_77 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_77">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.50 TTM Tray 3 Feedhead Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.50 TTM Tray 3 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.50' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 78-->

            <!--article id 79-->
            <style>
              #b8255_78 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_78">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.55 TTM Tray 4 Feedhead Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.55 TTM Tray 4 Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.55' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 79-->


            <!--article id 80-->
            <style>
              #b8255_79 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_79">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.60 TTM Transport Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.60 TTM Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.60' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 80-->

            <!--article id 81-->
            <style>
              #b8255_80 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_80">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.65 Left Cover Components</p>
              <img src="./IMG/images_pl_8255/PL 80.65 Left Cover Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.65' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 81-->


            <!--article id 82-->
            <style>
              #b8255_81 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_81">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.70 Left Cover Transport Components</p>
              <img src="./IMG/images_pl_8255/PL 80.70 Left Cover Transport Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.70' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 82-->


            <!--article id 83-->
            <style>
              #b8255_82 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_82">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.75 Left Cover Transport Assembly</p>
              <img src="./IMG/images_pl/PL 80.75 Left Cover Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.75' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 83-->


            <!--article id 84-->
            <style>
              #b8255_83 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_83">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.80 Duplex Inner Chute Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.80 Duplex Inner Chute Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.80' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 84-->


            <!--article id 85-->
            <style>
              #b8255_84 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_84">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.85 Duplex Chute Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.85 Duplex Chute Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.85' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 85-->


            <!--article id 86-->
            <style>
              #b8255_85 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_85">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.90 Registration Transport Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.90 Registration Transport Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.90' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 86-->


            <!--article id 87-->
            <style>
              #b8255_86 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_86">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.95 Registration Drive Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.95 Registration Drive Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.95' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 87-->


            <!--article id 88-->
            <style>
              #b8255_87 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_87">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.115 Bypass Tray Takeaway Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.115 Bypass Tray Takeaway Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.115' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 88-->


            <!--article id 89-->
            <style>
              #b8255_88 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_88">
              <h6>PL 80 - Paper Transport</h6>
              <p>PL 80.120 Bypass Tray Feedhead Assembly</p>
              <img src="./IMG/images_pl_8255/PL 80.120 Bypass Tray Feedhead Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL80.120' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 89-->


            <!--article id 90-->
            <style>
              #b8255_89 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_89">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.05 Developer Unit</p>
              <img src="./IMG/images_pl_8255/PL 90.05 Developer Unit.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.05' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 90-->


            <!--article id 91-->
            <style>
              #b8255_90 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_90">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.10 Toner Dispense</p>
              <img src="./IMG/images_pl_8255/PL 90.10 Toner Dispense.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.10' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 91-->


            <!--article id 92-->
            <style>
              #b8255_91 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_91">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.15 Xerographic Components</p>
              <img src="./IMG/images_pl_8255/PL 90.15 Xerographic Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.15' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 92-->


            <!--article id 93-->
            <style>
              #b8255_92 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_92">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.20 Xerographic Assembly (1 of 2)</p>
              <img src="./IMG/images_pl_8255/PL 90.20 Xerographic Assembly (1 of 2).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.20' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 93-->



            <!--article id 94-->
            <style>
              #b8255_93 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_93">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.25 Xerographic Assembly (2 of 2)</p>
              <img src="./IMG/images_pl_8255/PL 90.25 Xerographic Assembly (2 of 2).png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.25' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 94-->



            <!--article id 95-->
            <style>
              #b8255_94 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_94">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.30 IBT Belt Unit Components</p>
              <img src="./IMG/images_pl_8255/PL 90.30 IBT Belt Unit Components.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.30' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 95-->



            <!--article id 96-->
            <style>
              #b8255_95 {
                display: none;
              }
            </style>

            <article class="item-article" id="b8255_95">
              <h6>PL 90 - Xerographics</h6>
              <p>PL 90.35 IBT Belt Unit Assembly</p>
              <img src="./IMG/images_pl_8255/PL 90.35 IBT Belt Unit Assembly.png" alt="">

              <table class="table table table-hover">

                <thead class="table">
                  <tr>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Item</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Part</th>
                    <th style="color:  rgb(95, 95, 95);" scope="col">Description</th>
                  </tr>
                </thead>


                <?php include("./CONTROLLER/conexion.php");
                //SELECT TABLE 
                $sql_part = $conexion->query(" SELECT *FROM part_list_b8255 WHERE codPL='PL90.35' ");
                while ($datos = $sql_part->fetch_object()) { ?>


                  <tbody>
                    <tr>
                      <td><?= $datos->item ?></td>
                      <td><?= $datos->part ?></td>
                      <td><?= $datos->descr ?></td>
                    </tr>
                  </tbody>

                  <?php
                }
                ?>

              </table>

            </article>
            <!--article id 96-->

          </div>
          <!--container-b8255-->


        </div>

      </div>
      <!--show content parts-->
      <!--Sesion para modelo B8155-->


    </div>



    <footer>
      <p class="m-0">Service Library
        2010-2024 &copy; Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small></p>
    </footer>

  </main>


  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <script src="./JS/search.js"></script>
  <script src="./JS/btn-show-part.js"></script>
  <script src="./JS/btn-show-devices.js"></script>
  <script src="./JS/btn-show-b8255.js"></script>
  <!--SCRIPT-->