<div class="layout-page">

    @include('admin.components.nav-responsive')
    @include('admin.components.nav-bar')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-3 float-right">
                <div class="col-lg-10">
                    {{-- <h3>Listado De Usuarios</h3> --}}
                </div>
                <div class="col-lg-2 col-12 mb-2">
                    <button style="float: right;width: 100%;" type="button" class="btn btn-success" wire:click="create()">
                        Crear Usuario
                    </button>
                </div>
            </div>
            <div class="row" >
                {{-- Delete --}}
                <div class="col-12" id="alert_create" style="display: none;">
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
                {{-- Update --}}
                <div class="col-12" id="alert_update" style="display: none;">
                    <div class="alert alert-{{$error ?'danger' :'warning'}} d-flex alert-dismissible" role="alert">
                        <span class="badge badge-center rounded-pill bg-{{$error ?'danger' :'warning'}} border-label-{{$error ?'danger' :'warning'}} p-3 me-2"><i class="bx bx-command fs-6"></i></span>
                        <div class="d-flex flex-column ps-1">
                          <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">{{$alertTitle}}</h6>
                          <span>{{$error ? 'Error' :"¡Ha sido Actualizado!"}}</span>
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
                        <input wire:model.defer="searchTitle" type="text" class="form-control w-75" placeholder="Buscar por Nombre y Apellido">
                        <button type="submit" class="btn btn-outline-primary d-none d-lg-block">Buscar</button>
                        <button type="submit" class="btn btn-primary mt-1 w-100 d-block d-lg-none">Buscar</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                          <td><strong>{{$usuario->name}}</strong></td>
                          <td>{{$usuario->email}}</td>
                          <td>
                            <div class="flex" style="text-align: right;">
                                <button class="btn btn-outline-warning" wire:click="edit({{$usuario->id}})">Editar</button>
                                <button class="btn btn-outline-danger" wire:click="delete_modal({{$usuario->id}})"
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
        {{$usuarios->links('pagination::default')}}
    </div>
    @include('livewire.components.delete-usuario')
    @include('livewire.components.edit-usuario')
    @include('livewire.components.create-usuario')
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
         window.addEventListener('alertcreate', event => {
          document.getElementById('alert_create').style.display = "block";
        })
        window.addEventListener('alertupdate', event => {
          document.getElementById('alert_update').style.display = "block";
        })

    </script>

</div>


