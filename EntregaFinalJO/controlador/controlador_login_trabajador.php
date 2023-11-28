<?php

session_start();


if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["correo"]) and !empty($_POST["contrasena"])){
        $correo=$_POST["correo"];
        $contrasena=$_POST["contrasena"];
        $sql=$conexion->query(" select * from trabajadores where correo='$correo' and contrasena='$contrasena' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellido"]=$datos->apellido;
            header("location: ../src/panel_admin.php");
        } else {
            echo "<div class='alert alert-danger'>Credenciales Invalidas</div>";
        }
        
    }else{
        echo "Campos vacios";
    }
    
}

?>