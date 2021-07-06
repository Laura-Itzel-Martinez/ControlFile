
<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar una categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarCategoria" method="post" onsubmit="return agregarNuevoGestor()">

          <label for="nombreCategoria">Nombre</label>
          <input type="text" id="nombreCategoria" name="nombreCategoria" class="form-control" required  pattern="[a-zA-Z]+"   >
          
          <label for="descripcion">Descripción</label>
          <textarea id="descripcion" name="descripcion" class="form-control" required pattern="[a-zA-Z]+"></textarea>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarCategoria">Guardar</button>
      </div>
    </div>
  </div>
</div>