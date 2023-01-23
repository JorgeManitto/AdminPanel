<div class="layout-page">

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-3 float-right">
                <div class="col-lg-10">
                    <h3>Listado De Cursos</h3>
                </div>
                <div class="col-lg-2" >
                    {{-- @livewire('curso-modal') --}}
                    <button style="float: right;" type="button" class="btn btn-primary" wire:click="create()">
                        Crear Curso
                      </button>
                </div>
            </div>

            <div class="row" >
                {{-- Delete --}}
                <div class="col-12" id="alert_delete" style="display: none;">
                    <div class="alert alert-danger d-flex alert-dismissible" role="alert">
                        <span class="badge badge-center rounded-pill bg-danger border-label-danger p-3 me-2"><i class="bx bx-command fs-6"></i></span>
                        <div class="d-flex flex-column ps-1">
                          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">{{$alertTitle}}</h6>
                          <span>¡Ha sido eliminado!</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                </div>
                {{-- Create --}}

                <div class="col-12" id="alert_create" style="display: none;"'>
                    <div class="alert alert-success d-flex alert-dismissible" role="alert">
                        <span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2"><i class="bx bx-command fs-6"></i></span>
                        <div class="d-flex flex-column ps-1">
                          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">{{$alertTitle}}</h6>
                          <span>¡Ha sido creado!</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                </div>
                {{-- Edit --}}
                <div class="col-12" id="alert_update" style="display: none;">
                    <div class="alert alert-warning d-flex alert-dismissible" role="alert">
                        <span class="badge badge-center rounded-pill bg-warning border-label-warning p-3 me-2"><i class="bx bx-command fs-6"></i></span>
                        <div class="d-flex flex-column ps-1">
                          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">{{$alertTitle}}</h6>
                          <span>¡Ha sido actualizado!</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                </div>
            </div>

          <div class="row">
            <div class="col-lg-12 col-md-10 order-1">
                <form wire:submit.prevent="render">
                    <div class="input-group mb-3">
                        <input wire:model.defer="searchTitle" type="text" class="form-control w-75" placeholder="Buscar curso">
                        <select class="form-control" wire:model.defer="searchStatus">
                            <option value="">Todos los Estados</option>
                            <option value="1">Pendiente</option>
                            <option value="2">Publicado</option>
                        </select>
                        <button type="submit" class="btn btn-outline-primary">Buscar</button>

                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Curso</th>
                          <th>Disnoseque</th>
                          <th>Estado</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cursos as $curso)
                        <tr>
                          <td class="w-50"><strong>{{$curso->titulo}}</strong></td>
                          <td>{{$curso->disertante}}</td>
                          <td><span class="badge bg-label-{{$curso->estado == '2' ?'primary' :'danger'}} me-1">{{$curso->estado == '2' ?'Publicado' :'Pendiente'}}</span></td>
                          <td>
                            <div class="flex" style="text-align: right;">
                                {{-- @livewire('edit-curso-modal', ['curso' => $curso], key($curso->id)) --}}
                                <button class="btn btn-outline-warning" wire:click="edit({{$curso->id}})">Editar</button>
                                <button class="btn btn-outline-danger" wire:click="delete_modal({{$curso->id}})"
                                type="button" >Eliminar</button>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
           </div>
        </div>
    </div>
    <div class="mb-3">
        {{$cursos->links('pagination::default')}}
    </div>

    <style>
        .pagination li  a, .pagination li span{
            margin-left: 1rem;
            padding: 1.02em 1.093em;
            font-size:1em;
            font-weight: 500;
            line-height: 1;
            vertical-align: baseline;
            background-color: #e7e7ff !important;
            border-radius: 0.25rem;
        }
    </style>
    <script>
        window.addEventListener('alertdelete', event => {
          document.getElementById('alert_delete').style.display = "block";
        })

        window.addEventListener('alertupdate', event => {
          document.getElementById('alert_update').style.display = "block";
        })

        window.addEventListener('alertcreate', event => {
          document.getElementById('alert_create').style.display = "block";
        })
        </script>
    @include('livewire.edit-curso-modal')
    @include('livewire.curso-modal')
    @include('livewire.delete-curso-modal')
</div>
