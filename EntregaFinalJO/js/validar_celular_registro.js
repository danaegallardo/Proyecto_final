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