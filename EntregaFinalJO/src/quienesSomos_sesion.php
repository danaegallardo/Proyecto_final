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
    <link rel="stylesheet" href="../css/quienesomos.css">
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
        <br>
        <!--parrafo mision-->
        <div class="row">
            <div class="col-12">
                <div class="custom-title">MISIÓN</div>
                <p>AislaHome, entrega asesorías y soluciones atreves de productos sustentable.
                    Participando en la ejecución de proyectos habitacionales a nivel regional.
                    Con profesionales de área que pueden identificar a través de un análisis profundo de las
                    necesidades de los clientes. Para disminuir la contaminación, economía y sustentabilidad
                    energética.</p>
            </div>
            <!--parrafo vision-->
            <div class="row"></div>
            <div class="col-12">
                <div class="custom-title">VISIÓN</div>
                <p>"Ser reconocida como el mayor referente de soluciones en el rubro de la construcción sustentable,
                    entregando asesoría profesional y proveedora de soluciones en proyectos habitacionales de
                    eficiencia energética."</p>
            </div>

            <!--parrafo valores-->
            <div class="container">
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-title">VALORES</div>
                        <p class="rectangle">¿En que creemos? Colaboración: Suma de esfuerzos en la misma
                            dirección, siendo capaces de aportar distintos puntos de vista para las diferentes
                            situaciones.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="rectangle">¿Cuál es nuestro ADN? Orientación al cliente: Actitud permanente
                            por detectar y satisfacer las necesidades y prioridades de los clientes.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="rectangle">¿En qué basamos nuestro accionar? Cuidado al medio ambiente:
                            La organización debe favorecer el desarrollo y la difusión de las tecnologías
                            respetuosas con el medioambiente.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="rectangle">¿Qué nos caracteriza? Bien común: Ser una empresa con la capacidad
                            de contribuir a la mejora de la situación económica, social y medioambiental
                            aportando por el concepto de bien común. Por tanto, el éxito está en que ambos
                            conceptos convivan en la empresa y se retroalimenten mutuamente.</p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
            
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