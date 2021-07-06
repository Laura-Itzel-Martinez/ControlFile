<!-- Modal -->
<div class="modal fade" id="modalAgregarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarArchivo" enctype="multipart/form-data" method="post" 
        onsubmit="return agregarNuevoArchivo()" >
        
        <div id="categoriasId"></div>
        
        <label for="subir">Selecciona un archivo de tu equipo: </label>
        <input type="file" class="form-control-file" id="archivo[]" name="archivo[]" class="form-control" multiple>
                 
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarArchivo">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#categoriasId').load("vistas/archivos/selectCategorias.php");
  });
</script>