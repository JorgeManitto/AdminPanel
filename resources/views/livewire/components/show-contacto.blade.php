<div>

    <!-- Modal -->
    <div class="modal fade" id="show" wire:ignore.self>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ver Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="nombre_apellido" class="form-label">Nombre y apellido</label>
                <input type="text" readonly wire:model.defer="nombre_apellido" class="form-control"   />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" readonly wire:model.defer="email" class="form-control"   />
            </div>

            <div class="mb-3">
                <label for="empresa" class="form-label">Empresa</label>
                <input type="text" readonly wire:model.defer="empresa" class="form-control"   />
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" readonly wire:model.defer="telefono" class="form-control"   />
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" readonly wire:model.defer="asunto" class="form-control"   />
            </div>

            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" readonly wire:model.defer="mensaje" cols="30" rows="10"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <div class="modal-footer"></div>
        </div>
      </div>
    </div>

    <script>
      window.addEventListener('show', event => {
          $('#show').modal('show');
      })
      window.addEventListener('close_show', event => {
          $('#showe').modal('hide');
      })
      window.addEventListener('alertshow', event => {
        document.getElementById('alert_show').style.display = "block";
      })
    </script>
</div>

</div>
