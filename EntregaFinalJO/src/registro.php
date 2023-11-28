<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crear cuenta</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/registro.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <script>
    function validarCelular() {
      var telefonoInput = document.getElementById('celular');
      var telefono = telefonoInput.value;

      // Verificar si el número de teléfono tiene exactamente 9 dígitos y es un número
      if (!/^\d{9}$/.test(telefono)) {
        alert('Ingrese un número de teléfono válido con 9 dígitos.');
        telefonoInput.focus();
        return false;
      }

      return true;
    }

    // Función para permitir solo números en el input de teléfono
    function soloNumeros(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        alert('Solo se permiten números en el campo de teléfono.');
        return false;
      }
      return true;
    }
  </script>
</head>

<body>
  <h1>AISLAHOME</h1>
  <?php
  include "../controlador/controlador_registro.php";
  ?>

  <div class="login-container">
    <div class="custom-title">Registrarse</div>
    <form action="registro.php" method="post" onsubmit="return validarCelular();">

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required>

      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="correo" required>

      <label for="celular">Celular:</label>
      <input type="tel" id="celular" name="telefono" onkeypress="return soloNumeros(event)" required>

      <label for="direccion">Direccion:</label>
      <input type="text" id="direccion" name="direccion" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="contrasena" required>

      <input type="submit" value="Registrar" name="btnregistro">

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>