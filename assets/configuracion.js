$(function() {
  $('#inputRuc').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length == 11) {
      $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-spinner text-warning loading"></i></span>');
      $.ajax({
        type: 'POST',
        url: 'consulta_ruc.php',
        data: 'ruc=' + $(this).val(),
        success: function(ext_datos) {
          var datos;
          try {
            datos = eval(ext_datos);
          } catch (e) {}
          if (!datos || datos[0] == null) {
            $('#inputRuc').removeClass('is-valid').addClass('is-invalid');
            $('#msgi_inputRuc').html("No existen datos asociados al R.U.C.");
            $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-times text-danger"></i></span>');
          } else {
            $('#inputRuc').removeClass('is-invalid').addClass('is-valid');
            $('#msgv_inputRuc').html("Datos extraídos de la base de datos de SUNAT");
            $('#inputRznSocial, #inputNomComer, #inputDniRepLegal, #inputNomRepLegal, #inputDomFiscal, #inputDep, #inputProv, #inputDis, #inputCodPos').each(function() {
              $(this).val('');
            });
            $('#inputRznSocial').val(datos[0]);
            $('#inputNomComer').val(datos[1]);
            if (Object.keys(datos[2]).length > 0) {
              $('#inputDniRepLegal').val(Object.keys(datos[2])[0].split(' ')[1]);
              $('#inputNomRepLegal').val(datos[2]['' + Object.keys(datos[2])[0]].nombre);
            }
            if (datos[3] != '-') {
              var str = datos[3],
                str1 = str.split(' - '),
                str2 = str1[0].split(' '),
                dirFiscal = str2.slice(0, -1).join(' '),
                departamento = str2.slice(-1)[0],
                provincia = str1.slice(-2)[0],
                distrito = str1.slice(-1)[0];
              $('#inputDomFiscal').val(dirFiscal);
              $('#inputDep').val(departamento);
              $('#inputProv').val(provincia);
              $('#inputDis').val(distrito);
              var codUbigeo = "";
              if (ubigeodb[departamento.toLowerCase()]) {
                var deps = ubigeodb[departamento.toLowerCase()];
                for (var i = 1; i < deps.length; i++) {
                  if (deps[i].prov.includes(provincia.toLowerCase()) && deps[i].dis.includes(distrito.toLowerCase())) {
                    codUbigeo = deps[0].id + deps[i].prov.split(' ')[0] + deps[i].dis.split(' ')[0];
                  }
                }
              }
              $('#inputCodPos').val(codUbigeo);
            }
            $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-check text-success"></i></span>');
          }
        }
      });
    }
    if (this.value.length < 11) {
      $('#inputRznSocial, #inputNomComer, #inputDniRepLegal, #inputNomRepLegal, #inputDomFiscal, #inputDep, #inputProv, #inputDis, #inputCodPos').each(function() {
        $(this).val('');
      });
      if (this.value.length == 0) {
        $('#inputRuc').removeClass('is-valid').addClass('is-invalid');
        $('#msgi_inputRuc').html("Ingresa el R.U.C.");
        $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-times text-danger"></i></span>');
      } else {
        $('#inputRuc').removeClass('is-valid').addClass('is-invalid');
        $('#msgi_inputRuc').html("Verifica que el R.U.C. sea el correcto");
        $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-times text-danger"></i></span>');
      }
    }
  });
  $('#inputRuc').on('blur', function() {
    if (this.value.length < 11) {
      $('#inputRuc').removeClass('is-valid').addClass('is-invalid');
      $('#msgi_inputRuc').html("Verifica que el R.U.C. sea el correcto");
      $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-times text-danger"></i></span>');
    }
    if (this.value.length == 0) {
      $('#inputRuc').removeClass('is-valid').addClass('is-invalid');
      $('#msgi_inputRuc').html("Ingresa el R.U.C.");
      $('#ind_ruc').html('<span class="input-group-text"><i class="fas fa-times text-danger"></i></span>');
    }
  });
  $('#inputDniRepLegal').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    var dni = $(this).val();
    if (dni.length == 8) {
      $.ajax({
        type: 'post',
        url: 'consulta_dni.php',
        data: 'dni=' + dni,
        success: function(datos_dni) {
          var datos = eval(datos_dni);
          if (!datos[0]) {} else {
            $('#inputNomRepLegal').val(datos.join(' '));
          }
        }
      });
    }
    if (dni.length <= 8) {
      $('#inputNomRepLegal').val('');
    }
  });
});
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();