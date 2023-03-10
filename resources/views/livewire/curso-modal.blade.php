<div>
      <div class="modal fade" id="create" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Curso</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save"  enctype="multipart/form-data" >
                    <div class="mb-3">
                        <label for="categoria">Seleccione Curso:</label>
                        <select wire:model = "categoria" class="form-control" id="categoria">
                            <option value="1" selected>Cursos online en vivo</option>
                            <option value="2">Cursos asincrónicos</option>
                            <option value="3">Webinars gratuitos</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" wire:model.defer="titulo" class="form-control" id="titulo"  />

                    </div>
                    <div class="mb-3">
                        <label for="disertante" class="form-label">Disertante</label>
                        <input class="form-control" type="text" wire:model.defer="disertante"/>
                    </div>


                    {{-- CURSOS ENVIVO ONLINE --}}


                    <div class="mb-3">
                        <label for="envivo_duracion" class="form-label">Duración</label>
                        <input class="form-control" type="text" wire:model.defer="envivo_duracion"/>
                    </div>

                    <div class="mb-3">
                        <label for="envivo_fecha" class="form-label">Fecha</label>
                        <input class="form-control" type="text" wire:model.defer="envivo_fecha"/>
                    </div>

                    <div class="mb-3">
                        <label for="envivo_url_info" class="form-label">PDF</label>
                        <input class="form-control" type="file"  wire:model.defer="envivo_url_info"/>
                        {{-- @error('url_info') <span class="error">{{ $message }}</span> @enderror --}}
                    </div>

                    <div class="mb-3">
                        <label for="envivo_valor_usd" class="form-label">Valor Usd</label>
                        <input class="form-control" type="text" wire:model="envivo_valor_usd"/>
                    </div>

                    <div class="mb-3">
                        <label for="envivo_valor_ars" class="form-label">Valor Ars</label>
                        <input class="form-control" type="text" wire:model="envivo_valor_ars"/>
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
        window.addEventListener('close_create', event => {
            $('#create').modal('hide');
        })
        window.addEventListener('create', event => {
            $('#create').modal('show');
        })
        window.addEventListener('alertcreate', event => {
          document.getElementById('alert_create').style.display = "block";
        })
        </script>
</div>
