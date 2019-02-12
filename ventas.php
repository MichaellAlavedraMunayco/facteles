<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <?php include 'views/head.php'; ?>
</head>
<body>
  <?php include 'views/top.php'; ?>
  <div class="container">
    <form class="needs-validation" novalidate>
      <h3 class="text-center mb-3">Ventas</h3>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group row">
            <div class="card mx-3">
              <h6 class="card-header">Operación</h6>
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="inputTipOpe">Tipo <span id="codTipOpe" class="badge badge-info my-badge">Código: ?</span></label>
                    <select class="custom-select form-control js-example-placeholder-single" id="inputTipOpe">
                      <option></option>
                      <option value="01">Venta lnterna</option>
                      <option value="02">Exportacion de bienes</option>
                      <option value="03">No Domiciliados</option>
                      <option value="04">Venta Interna – Anticipos</option>
                      <option value="05">Venta Itinerante </option>
                      <option value="06">Factura Guia</option>
                      <option value="07">Venta Arroz Pilado</option>
                      <option value="08">Factura - Comprobante de Percepcion</option>
                      <option value="10">Factura - Guia remitente</option>
                      <option value="11">Factura - Guia transportista</option>
                      <option value="12">Boleta de venta – Comprobante de Percepcion</option>
                      <option value="13">Gasto Deducible Persona Natural</option>
                      <option value="14">Exportacion de Servicios - Prestacion de servicios de hospedaje No Dom</option>
                      <option value="15">Exportacion de Servicios - Transporte de navieras</option>
                      <option value="16">Exportacion de Servicios - Servicios  a naves y aeronaves de bandera extranjera</option>
                      <option value="17">Exportacion de Servicios - RES</option>
                      <option value="18">Exportacion de Servicios - Servicios que conformen un Paquete Turistico</option>
                      <option value="19">Exportacion de Servicios - Servicios complementarios al transporte de carga</option>
                      <option value="20">Exportacion de Servicios - Suministro de energia electrica a favor de sujetos domiciliados en ZED</option>
                      <option value="21">Exportacion de Servicios - Prestacion servicios realizados parcialmente en el extranjero</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="inputOpeDoc">Documento <span id="codOpeDoc" class="badge badge-info my-badge">Código: ?</span></label>
                    <select class="custom-select form-control js-example-placeholder-single" id="inputOpeDoc">
                      <option></option>
                      <option value="01">Factura</option>
                      <option value="03">Boleta de venta</option>
                      <option value="06">Carta de porte aereo</option>
                      <option value="07">Nota de credito</option>
                      <option value="08">Nota de debito</option>
                      <option value="09">Guia de remision remitente</option>
                      <option value="12">Ticket de maquina registradora</option>
                      <option value="13">Documento emitido por bancos, instituciones financieras, crediticias y de seguros que se encuentren bajo el control de la SBS</option>
                      <option value="14">Recibo servicios publicos</option>
                      <option value="15">Boletos emitidos por el servicio de transporte terrestre regular urbano de pasajeros y el ferroviario publico de pasajeros prestado en via ferrea local</option>
                      <option value="16">Boleto de viaje emitido por las empresas de transporte publico interprovincial de pasajeros</option>
                      <option value="18">Documentos emitidos por las AFP</option>
                      <option value="20">Comprobante de retencion</option>
                      <option value="21">Conocimiento de embarque por el servicio de transporte de carga maritima</option>
                      <option value="24">Certificado de pago de regalias emitidas por PERUPETRO S.A.</option>
                      <option value="31">Guia de remision transportista</option>
                      <option value="37">Documentos que emitan los concesionarios del servicio de revisiones tecnicas</option>
                      <option value="40">Comprobante de Percepcion</option>
                      <option value="41">Comprobante de Percepcion – Venta interna(físico - formato impreso)</option>
                      <option value="43">Boleto de compañias de aviacion transporte aereo no regular</option>
                      <option value="45">Documentos emitidos por centros educativos y culturales, universidades, asociaciones y fundaciones</option>
                      <option value="56">Comprobante de pago SEAE</option>
                      <option value="71">Guia de remision remitente complementaria</option>
                      <option value="72">Guia de remision transportista complementaria</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label for="inputSerie">Serie</label>
                    <input id="inputSerie" type="text" maxlength="4" placeholder="FSSS" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputCorr">N° Correlativo</label>
                    <input id="inputCorr" type="text" maxlength="8" placeholder="CCCCCCCC" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputMone">Moneda <span id="moneda" class="badge badge-info my-badge">Sol</span></label>
                    <select class="custom-select form-control js-example-placeholder-single" id="inputMone">
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <div class="card mx-3">
              <h6 class="card-header">Cliente</h6>
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="inputTipDocIden">Doc. de Identidad <span id="codTipDocIden" class="badge badge-info my-badge">Código: ?</span></label>
                    <select class="custom-select form-control js-example-placeholder-single" id="inputTipDocIden">
                      <option></option>
                      <option value="00">DOC.TRIB.NO.DOM.SIN.RUC</option>
                      <option value="01">DNI - Documento Nacional de Identidad</option>
                      <option value="04">Carnet de Extranjeria</option>
                      <option value="06">RUC - Registro Unico de Contribuyentes</option>
                      <option value="07">Pasaporte</option>
                      <option value="A">Cedula Diplomática de Identidad</option>
                      <option value="B">DOC.IDENT.PAIS.RESIDENCIA-NO.D</option>
                      <option value="C">Tax Identification Number - TIN – Doc Trib PP.NN</option>
                      <option value="D">Identification Number - IN – Doc Trib PP. JJ</option>
                      <option value="E">TAM - Tarjeta Andina de Migración</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label for="inputNumDoc">Número de Documento</label>
                    <div class="input-group">
                      <input id="inputNumDoc" class="form-control" type="text" placeholder="Número de Documento">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="inputNomCliente">Nombre del cliente</label>
                    <input id="inputNomCliente" class="form-control" type="text" placeholder="Nombre del cliente">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="inputDirCliente">Dirección del cliente</label>
                    <input id="inputDirCliente" class="form-control" type="text" placeholder="Dirección del cliente">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group row">
            <div class="card mx-3 w-100">
              <h6 class="card-header">Productos</h6>
              <div class="card-body">
                <div class="col-sm-12 mb-2">
                  <label for="inputBusProd">Producto <span id="codProd" class="badge badge-info my-badge">Código: ?</span></label>
                  <div class="input-group">
                    <select id="inputBusProd" class="custom-select form-control js-example-placeholder-single">
                    </select>
                    <div class="input-group-append">
                      <button type="button" class="btn btn-outline-secondary btn-block"><i class="fas fa-plus"></i> Agregar</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <table class="table table-sm table-hover table-striped table-responsiv-sm">
                    <thead class="my-thead">
                      <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">U. Medida</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">I.G.V</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Elim.</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-trash text-danger" style="cursor:pointer;"></i></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-trash text-danger" style="cursor:pointer;"></i></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-trash text-danger" style="cursor:pointer;"></i></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <?php include 'views/footer.php'; ?>
  <link href="assets/select2.css" rel="stylesheet" />
  <script src="assets/select2.js"></script>
  <script src="assets/db_codMonedas.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-placeholder-single').select2({
        placeholder: 'Seleccionar...',
        matcher:function(params, data){
          if ($.trim(params.term) === '') {
            return data;
          }
          if (typeof data.text === 'undefined') {
            return null;
          }
          if(/[a-zA-Z]/.test(params.term)){
            if (data.id.toLowerCase() == params.term.toLowerCase()) {
              var modifiedData = $.extend({}, data, true);
              modifiedData.text += ' (Encontrado)';
              return modifiedData;
            }
          }
          if(/[a-zA-Z]+/.test(params.term) && params.term.length > 2){
            if (data.text.search(new RegExp(params.term, 'i')) > -1) {
              var modifiedData = $.extend({}, data, true);
              modifiedData.text += ' (Encontrado)';
              return modifiedData;
            }
          }
          if(/\d+/.test(params.term)){
            if(params.term > -1 && params.term < 10) params.term = '0' + params.term.slice(-1);
            if (data.id == params.term) {
              var modifiedData = $.extend({}, data, true);
              modifiedData.text += ' (Encontrado)';
              return modifiedData;
            }
          }
          return null;
        }
      });
      $('#inputTipOpe').on('change', function(e){
        $('#codTipOpe').html('Código: ' + $(this).val());
      });
      $('#inputTipDocIden').on('change', function(e){
        $('#codTipDocIden').html('Código: ' + $(this).val());
      });
      $('#inputOpeDoc').on('change', function(e){
        $('#codOpeDoc').html('Código: ' + $(this).val());
      });
      $('#inputMone').on('change', function(e){
        $('#moneda').html($(this).val());
      });
      $("#inputMone").select2({
        data: codModenas,
        matcher:function(params, data){
          if ($.trim(params.term) === '') {
            return data;
          }
          if (typeof data.text === 'undefined') {
            return null;
          }
          if(/[a-zA-Z]+/.test(params.term) && params.term.length > 2){
            if (data.id.search(new RegExp(params.term, 'i')) > -1) {
              var modifiedData = $.extend({}, data, true);
              modifiedData.text += ' (Encontrado)';
              return modifiedData;
            }
          }
          return null;
        }
      })
    });
  </script>
</body>
</html>
