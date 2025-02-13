<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMG/x.png">
    <title>Partner</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLE ICON-->


</head>

<body>

    <header>

    </header>


    <main>
        <div class="container-log">
            <div class="logo">
                <img src="./IMG/xdv.png" alt="">
            </div>

            <div class="title">
                <p>Bienvenido al Portal de Entrenamiento</p>
            </div>

            <!--START FORM-->
            <form action="" method="POST">
                <?php include './CONTROLLER/validation_log.php'; ?>

                <div class="formulario-log">
                    <label for="">Usuario</label>
                    <br>
                    <input type="email" name="user" id="user" placeholder="Ingrese su Usuario">
                    <br>

                    <label for="">Contraseña</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
                </div>

                <div class="btn">   
                    <button style="background: #72717189;" type="button" class="btn btn" data-bs-dismiss="modal"><a style="text-decoration: none; color: #fff; " href="./index.html">Volver</a></button>
                    <button type="submit" name="btn" value="submit">Ingresar</button>
                </div>

            </form>
            <!--END FORM-->

        </div>
    </main>

</body>

</html>