<div>

    <!-- Modal -->
    <div class="modal fade" id="delete" wire:ignore.self>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <div class="modal-body">
              <h4>¿Estas seguro?</h4>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" wire:loading.remove wire:click="delete({{$usuario}})" class="btn btn-primary">Eliminar</button>
              <button type="button" class="btn btn-primary" wire:loading style="display:none;">Eliminando...</button>
              </div>

        </div>
      </div>
    </div>

    <script>
      window.addEventListener('delete', event => {
          $('#delete').modal('show');
      })
      window.addEventListener('close_delete', event => {
          $('#delete').modal('hide');
      })
      window.addEventListener('alertdelete', event => {
        document.getElementById('alert_delete').style.display = "block";
      })
    </script>
</div>

</div>
