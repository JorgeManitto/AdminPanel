<div>
      <div class="modal fade" id="create_envio" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Curso Online En vivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save"  enctype="multipart/form-data" >
                    <div class="mb-3">
                        <label for="categoria">Seleccione Curso:</label>
                        <input type="hidden" wire:model = "categoria" value="1">
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input required type="text" wire:model.defer="titulo" class="form-control" id="titulo"  />

                    </div>
                    <div class="mb-3">
                        <label for="disertante" class="form-label">Disertante</label>
                        <input required class="form-control" type="text" wire:model.defer="disertante"/>
                    </div>


                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duración</label>
                        <input class="form-control" type="text" wire:model.defer="duracion"/>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input class="form-control" type="text" wire:model.defer="fecha"/>
                    </div>

                    <div class="mb-3">
                        <label for="url_info" class="form-label">PDF</label>
                        <input class="form-control" type="file"  wire:model.defer="url_info"/>
                        {{-- @error('url_info') <span class="error">{{ $message }}</span> @enderror --}}
                    </div>

                    <div class="mb-3">
                        <label for="valor_usd" class="form-label">Valor Usd</label>
                        <input class="form-control" type="text" wire:model.defer="valor_usd"/>
                    </div>

                    <div class="mb-3">
                        <label for="valor_ars" class="form-label">Valor Ars</label>
                        <input class="form-control" type="text" wire:model.defer="valor_ars"/>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select wire:model.defer="estado" class="form-control">
                            <option value="1">Pendiente</option>
                            <option value="2">Publicado</option>
                        </select>
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
        window.addEventListener('close_envivo', event => {
            $('#create_envio').modal('hide');
        })
        window.addEventListener('create_envivo', event => {
            $('#create_envio').modal('show');
        })
        window.addEventListener('alertcreate', event => {
          document.getElementById('alert_create').style.display = "block";
        })
        </script>
</div>
