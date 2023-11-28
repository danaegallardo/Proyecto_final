<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: ../src/login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[AISLAHOME]</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    h1 {
        color: #6CB759;
    }

    .map-container {
        text-align: center;
    }
</style>

<body>
    <h1 class="mi-h1">[AISLAHOME]</h1>

    <div class="container">
        <!--Mostrar Nombre del usuario-->
        <div class="rounded-2 d-inline p-1 mb-2 bg-success text-white">
            <i class="fa-solid fa-circle-user"></i>
            <?php
            echo $_SESSION["nombre"] . " " . $_SESSION["apellido"];
            ?>
        </div>
        <!--Consultas-->
        <div class="d-inline">
            <a class="rounded-2 p-1 mb-2 bg-warning text-white" href="consultas_test.php"><i
                    class="fa-solid fa-pen-to-square"> </i>Consultas</a>
        </div>

        <!--Presupuesto-->
        <div class="d-inline">
            <a class="rounded-2 p-1 mb-2 bg-info text-white" href="presupuesto_test.php"><i
                    class="fa-solid fa-money-bill-wave"> </i>Presupuesto</a>
        </div>

        <!--Cerrar sesion-->
        <div class="d-inline">
            <a class="rounded-2 p-1 mb-2 bg-danger text-white"
                href="../controlador/controlador_cerrar_sesion.php"><i class="fa-solid fa-power-off "></i></a>
        </div>

        <!--navbar barra de navegacion-->
        <div></div>
        <br>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index_sesion.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productos_sesion.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos_sesion.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienesSomos_sesion.php">Quienes Somos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--banner-->
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/BANNER1.png" class="d-block w-100" alt="ferrari">
                </div>
                <div class="carousel-item">
                    <img src="../img/BANNER2.png" class="d-block w-100" alt="mclaren">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--parrafo-->
        <div class="row">
            <!--mapa-->
            <div class="map-container" class="col-md-6 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1598.397249804155!2d-73.09366826118864!3d-36.75150344397575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96683556a4fbfac9%3A0xc5c457df676d14e9!2sAutop.%20Concepci%C3%B3n%20-%20Talcahuano%204077%2C%20Talcahuano%2C%20B%C3%ADo%20B%C3%ADo!5e0!3m2!1ses-419!2scl!4v1697551669266!5m2!1ses-419!2scl"
                    width="1000" height="300" style="border:5;" text-center allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div>
        <footer>
            <p>4077 Autop. Concepción - Talcahuano, Region del BioBio</p>
            <p>© AislaHome 2023</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/30cecd7e3a.js" crossorigin="anonymous"></script>
</body>

</html>
