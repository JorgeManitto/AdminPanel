<div>
    <div class="modal fade" id="editmodal" tabindex="-1" wire:ignore.self>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <div class="modal-body">

              <form wire:submit.prevent="update" enctype="multipart/form-data">

                  <div class="mb-3">
                      <label for="name" class="form-label">Nombre</label>
                      <input type="text" wire:model.defer="name" class="form-control" id="name"/>

                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input class="form-control" type="email" wire:model.defer="email"/>
                  </div>

                  <div class="mb-3">
                      <label for="password" class="form-label">Contraseña</label>
                      <input class="form-control" type="password" wire:model.defer="password"/>
                  </div>

              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" wire:loading.remove class="btn btn-primary">Guardar</button>
              <button type="button" class="btn btn-primary" wire:loading style="display:none;">Guardando...</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      window.addEventListener('edit', event => {
          $('#editmodal').modal('show');
      })
      window.addEventListener('close_edit', event => {
          $('#editmodal').modal('hide');
      })
      </script>

</div>
