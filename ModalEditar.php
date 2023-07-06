
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">dd</label>
                  <input type="text" name="dd" class="form-control" value="<?php echo $dataCliente['dd']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">mm</label>
                  <input type="text" name="mm" class="form-control" value="<?php echo $dataCliente['mm']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">zz</label>
                  <input type="text" name="zz" class="form-control" value="<?php echo $dataCliente['zz']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">pp</label>
                  <input type="text" name="pp" class="form-control" value="<?php echo $dataCliente['pp']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">c_divipol</label>
                  <input type="text" name="c_divipol" class="form-control" value="<?php echo $dataCliente['c_divipol']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">c_anexos</label>
                  <input type="text" name="c_anexos" class="form-control" value="<?php echo $dataCliente['c_anexos']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">acopio_padre</label>
                  <input type="text" name="acopio_padre" class="form-control" value="<?php echo $dataCliente['acopio_padre']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">tipo_acopio</label>
                  <input type="text" name="tipo_acopio" class="form-control" value="<?php echo $dataCliente['tipo_acopio']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">nombre_pd_cad</label>
                  <input type="text" name="nombre_pd_cad" class="form-control" value="<?php echo $dataCliente['nombre_pd_cad']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">departamento</label>
                  <input type="text" name="departamento" class="form-control" value="<?php echo $dataCliente['departamento']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">municipio</label>
                  <input type="text" name="municipio" class="form-control" value="<?php echo $dataCliente['municipio']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">puesto</label>
                  <input type="text" name="puesto" class="form-control" value="<?php echo $dataCliente['puesto']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">mujeres</label>
                  <input type="text" name="mujeres" class="form-control" value="<?php echo $dataCliente['mujeres']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">hombres</label>
                  <input type="text" name="hombres" class="form-control" value="<?php echo $dataCliente['hombres']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">total</label>
                  <input type="text" name="total" class="form-control" value="<?php echo $dataCliente['total']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">mesas</label>
                  <input type="text" name="mesas" class="form-control" value="<?php echo $dataCliente['mesas']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">comuna</label>
                  <input type="text" name="comuna" class="form-control" value="<?php echo $dataCliente['comuna']; ?>">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">direccion</label>
                  <input type="text" name="direccion" class="form-control" value="<?php echo $dataCliente['direccion']; ?>">
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
