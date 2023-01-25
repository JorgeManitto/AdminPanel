<div>
    <div class="modal fade" id="createmodal" tabindex="-1" wire:ignore.self>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <div class="modal-body">

              <form wire:submit.prevent="save" enctype="multipart/form-data">

                  <div class="mb-3">
                      <label for="name" class="form-label">Nombre</label>
                      <input required type="text" wire:model.defer="name" class="form-control" id="name"/>

                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input required class="form-control" type="email" wire:model.defer="email"/>
                  </div>

                  <div class="mb-3">
                      <label for="password" class="form-label">Contraseña</label>
                      <input required class="form-control" type="password" wire:model.defer="password"/>
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
      window.addEventListener('create', event => {
          $('#createmodal').modal('show');
      })
      window.addEventListener('close_create', event => {
          $('#createmodal').modal('hide');
      })
      window.addEventListener('alertcreate', event => {
          document.getElementById('alert_create').style.display = "block";
        })
      </script>

</div>
