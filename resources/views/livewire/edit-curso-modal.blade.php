<div>
      <div class="modal fade" id="editmodal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update" enctype="multipart/form-data">
                    {{-- <input type="text" class="d-none" wire:model.defer="id"> --}}
                    <div class="mb-3">
                        <label for="categoria">Curso:</label>
                        <select wire:model.defer="categoria" disabled class="form-control">
                            <option value="1">Cursos online en vivo</option>
                            <option value="2">Cursos asincrónicos</option>
                            <option value="3">Webinars gratuitos</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input maxlength="250" type="text" required wire:model.defer="titulo" class="form-control" id="titulo"/>

                    </div>
                    <div class="mb-3">
                        <label for="disertante" class="form-label">Disertante</label>
                        <input maxlength="250" class="form-control" required type="text" wire:model.defer="disertante"/>
                    </div>

                    <div class="mb-3">
                        <label for="duracion" class="form-label">
                            @php
                                switch ($categoria) {
                                    case '1':
                                        echo 'Duración';
                                        break;
                                    case '2':
                                        echo 'Horas Certificadas';
                                        break;
                                    case '3':
                                        echo 'Horarios';
                                        break;
                                }
                            @endphp</label>
                        <input maxlength="250" class="form-control" type="text" wire:model.defer="duracion"/>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">{{$categoria == '2' ? 'Disponibilidad' : 'Fecha'}}</label>
                        <input maxlength="250" class="form-control" type="text" wire:model.defer="fecha"/>
                    </div>

                    <div class="mb-3 {{$categoria == '3' ?'d-none' : ''}}">
                        <label for="url_info" class="form-label">PDF {{'('.$url_info.')'}}</label>
                        <input class="form-control" type="file" wire:model.defer="url_info"/>
                    </div>

                    <div class="mb-3 {{$categoria == '3' ?'d-none' : ''}}">
                        <label for="valor_usd" class="form-label ">Valor Usd</label>
                        <input maxlength="250" class="form-control" type="text" wire:model.defer="valor_usd"/>
                    </div>

                    <div class="mb-3 {{$categoria == '3' ?'d-none' : ''}}">
                        <label for="valor_ars" class="form-label ">Valor Ars</label>
                        <input maxlength="250" class="form-control" type="text" wire:model.defer="valor_ars"/>
                    </div>

                    <div class="mb-3 {{$categoria == '3' ? 'd-block' : 'd-none'}}">
                        <label for="url_meet" class="form-label">Link del meet</label>
                        <input maxlength="250" type="text" wire:model.defer="url_meet" class="form-control">
                    </div>

                    <div class="mb-3 {{$categoria == '3' ? 'd-block' : 'd-none'}}">
                        <label for="temario" class="form-label">Temario</label>
                        <textarea class="form-control" name="temario" wire:model.defer="temario" cols="30" rows="10"></textarea>
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
        window.addEventListener('edit', event => {
            $('#editmodal').modal('show');
        })
        window.addEventListener('close_edit', event => {
            $('#editmodal').modal('hide');
        })
        </script>

</div>
