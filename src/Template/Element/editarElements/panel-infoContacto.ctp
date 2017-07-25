<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Informacion de contacto
                  <button class="btn btn-primary pull" style="float: right;" data-toggle="modal" href="#addWidgetModal">
                    <i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Editar
                  </button>
                </h4>
              </div>
            </div>
            <div class="panel-body" style="padding: 0;">  
                  
              <table class="table table-striped table-hover" style="margin-bottom: 0;">
                <tbody>
                            <tr>
                                <th>Nombre:</th>
                                <th><?= $negocio->nombre ?></th>
                            </tr>
                            <tr>
                                <th>Direccion:</th>
                                <th><?= $negocio->direccion ?></th>
                            </tr>
                            <tr>
                                <th>Descripcion:</th>
                                <th><?= $negocio->descripcion ?></th>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <th><?= $negocio->email ?></th>
                            </tr>
                            <tr>
                                <th>Telefono:</th>
                                <th><?= $negocio->telefono ?></th>
                            </tr>
                            <tr>
                                <th>Tags:</th>
                                <th><?= $tagsnegocio ?></th>
                            </tr>
                </tbody>
              </table>
            </div>
          </div><!--/panel-->


<!-- modal -->
<div class="modal" id="addWidgetModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Datos de contacto</h4>
            </div>
            <form enctype="multipart/form-data" action="/negocios/editardatos" method="post">
            <div class="modal-body" style="padding: 0;">
            <table class="table table-striped table-hover" style="margin: 0;">
                              <tbody>
                                  <input type="hidden" name="id" value="<?= $negocio->id ?>">
                                  <tr>
                                      <th>Nombre:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="nombre" value="<?= $negocio->nombre ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Direccion:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="direccion" value="<?= $negocio->direccion ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Descripcion:</th>
                                      <th><input type="text" class="form-control" style="height: 68px;" id="foto1" name="descripcion" value="<?= $negocio->descripcion ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Email:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="email" value="<?= $negocio->email ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Telefono:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="telefono" value="<?= $negocio->telefono ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Tags:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="tags" value="<?= $tagsnegocio ?>"></th>
                                  </tr>
                              </tbody>
                          </table>
                     
            </div>
            <div class="modal-footer">
              <a href="#" class="btn">Close</a>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->