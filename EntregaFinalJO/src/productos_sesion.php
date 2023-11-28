<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: ../src/login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[AISLAHOME]</title>
    <link rel="stylesheet" href="../css/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/30cecd7e3a.js" crossorigin="anonymous"></script>    
</head>

<style>
    h1{
    color: #6CB759;
    text-align: center;
    }

</style>

<body>
    <h1>[AISLA HOME]</h1>
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
        <div></div>
        <br>
        <!--navbar barra de navegacion-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>

                <!-- Agrega una imagen como logo en lugar de texto -->

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
                            <a class="nav-link" href="../src/productos_sesion.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/proyectos_sesion.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/quienesSomos_sesion.php">Quienes Somos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--navbar barra de navegacion-->
        <br>   
        <br>
        <br>
        

        <div class="background-square">
            <div class="row">
                <div class="col">
                    <!-- Imagen 1 -->
                    <img src="../img/ventanas.jpg" alt="Imagen 1" class="image">
                    <!-- Texto debajo de la imagen 1 -->
                    <p>VENTANAS DE PVC</p>
                </div>
                <div class="col">
                    <!-- Imagen 2 -->
                    <img src="../img/puerta.jpg" alt="Imagen 2" class="image">
                    <!-- Texto debajo de la imagen 2 -->
                    <p>PUERTAS DE PVC</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!--parrafo valores-->
        <div class="container">
            <br>
            <br>
            <br>
            
            <div class="row">
                <div class="col">
                    <div class="custom-title">Composición</div>
                    <p class="rectangle">El PVC es esencialmente la unión química del etileno (47%) y cloro (53%). El material de procedencia para fabricar el PVC es la sal común (cloruro sódico) y el petróleo crudo o el gas natural.</p>
                </div>
                <div class="col">
                    <div class="custom-title">Objetivos</div>
                    <p class="rectangle">Los perfiles de PVC son excelentes aislantes térmicos y acústicos, con un coeficiente de conductividad térmica mil veces menor que el del aluminio y cámaras de aire independientes que mejoran el aislamiento de la ventana.</p>
                </div>
                <div class="col">
                    <div class="custom-title">Beneficios</div>
                    <p class="rectangle">
                        * Aislante térmico y acústico.
                        * Seguridad.
                        * Posee una larga vida útil.
                        * No necesita mantenimiento.
                        * Calidad en cerrajes.
                        * Buen comportamiento ecológico.
                    </p>
                </div>
             </div>            
        </div>
    </div>
    <br>
    <br>
    <br>        

    <!--pie de pagina-->
<div>
    <footer>
        <p>4077 Autop. Concepción - Talcahuano, Region del BioBio</p>
        <p>© AislaHome 2023</p>
    </footer>
</div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                    crossorigin="anonymous"></script>
</body>

</html>