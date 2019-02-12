<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
      <?php include 'views/head.php'; ?>
  </head>
  <body>
  <?php include 'views/top.php'; ?>
  <div class="container">
    <form class="needs-validation" novalidate>
      <h3 class="text-center mb-5">Mi empresa</h3>
      <div class="form-row">
        <div class="col-md-8 mb-3">
          <div class="form-group row">
            <label for="inputRuc" class="col-sm-2 col-form-label">R.U.C.</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" maxlength="11" class="form-control" id="inputRuc" placeholder="R.U.C." required>
                <div id="ind_ruc" class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <div id="msgi_inputRuc" class="invalid-feedback">Ingresa el R.U.C.</div>
                <div id="msgv_inputRuc" class="valid-feedback"></div>
              </div>
              <small class="form-text text-muted">Sujeto a validación</small>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputRznSocial" class="col-sm-2 col-form-label">Razón Social</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputRznSocial" placeholder="Razón Social" required>
                <div class="invalid-feedback">Este campo es requerido</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputNomComer" class="col-sm-2 col-form-label">Nombre Comercial</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNomComer" placeholder="Nombre Comercial" required>
              <div class="invalid-feedback">Este campo es requerido</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDniRepLegal" class="col-sm-2 col-form-label">Representante Legal</label>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="text" maxlength="8" class="form-control" id="inputDniRepLegal" placeholder="DNI">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                </div>
              </div>
              <small class="form-text text-muted">Sujeto a validación</small>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <input type="text" class="form-control" id="inputNomRepLegal" placeholder="Nombre">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card mx-auto" style="width: 18rem;">
            <div class="card-header">Logotipo de la empresa</div>
            <img id="imgLogo" class="card-img-top mx-auto mt-2 upload-img">
            <div class="card-body">
              <div id="uploadImg" class="btn btn-outline-secondary btn-block"
              onclick="document.getElementById('customFile').click()">Cargar logo</div>
              <small class="form-text text-muted">Formatos: JPG, PNG</small>
              <input type="file" accept="image/jpeg, image/png" style="display:none;" id="customFile"
              onchange="document.getElementById('imgLogo').src = window.URL.createObjectURL(this.files[0])">
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-8">
          <div class="form-group row">
            <div class="col-md-8 mb-3">
              <label for="inputDomFiscal">Domicilio Fiscal</label>
              <input type="text" class="form-control" id="inputDomFiscal" placeholder="Domicilio Fiscal" required>
              <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="inputDep">Departamento</label>
              <input type="text" class="form-control" id="inputDep" placeholder="Departamento">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4 mb-3">
              <label for="inputProv">Provincia</label>
              <input type="text" class="form-control" id="inputProv" placeholder="Provincia">
            </div>
            <div class="col-md-4 mb-3">
              <label for="inputDis">Distrito</label>
              <input type="text" class="form-control" id="inputDis" placeholder="Distrito">
            </div>
            <div class="col-md-4 mb-3">
              <label for="inputCodPos">Cod. Postal - Ubigeo</label>
              <input type="text" class="form-control" id="inputCodPos" placeholder="Cod. Postal">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-md-12 mb-3 mx-3">
              <label for="inputEmail">E-mail</label>
              <div class="input-group">
                <input type="text" class="form-control" id="inputEmail" placeholder="E-mail">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
              </div>
              <small class="form-text text-muted">Sujeto a validación</small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12 mb-3 mx-3">
              <label for="inputTel">Teléfono</label>
              <div class="input-group">
                <input type="text" class="form-control" id="inputTel" placeholder="Teléfono">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary my-btn px-5 mx-auto" style="display:block;" type="submit">Guardar</button>
    </form>
  </div>
    <?php include 'views/footer.php'; ?>
    <script type="text/javascript" src="assets/db_ubigeo.js"></script>
    <script type="text/javascript" src="assets/configuracion.js"></script>
  </body>
</html>
