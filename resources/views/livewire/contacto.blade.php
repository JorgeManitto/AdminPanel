<div class="layout-page">

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-3 float-right">
                <div class="col-lg-10">
                    <h3>Listado De Contactos</h3>
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
            </div>

          <div class="row">
            <div class="col-lg-12 col-md-10 order-1">
                <form wire:submit.prevent="render">
                    <div class="input-group mb-3">
                        <input wire:model.defer="searchTitle" type="text" class="form-control w-75" placeholder="Buscar por Nombre y Apellido">
                        <button type="submit" class="btn btn-outline-primary">Buscar</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nombre y Apellido</th>
                          <th>Email</th>
                          <th>Empresa</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($contactos as $contacto)
                        <tr>
                          <td><strong>{{$contacto->nombre_apellido}}</strong></td>
                          <td>{{$contacto->email}}</td>
                          <td>{{$contacto->empresa}}</td>
                          <td>
                            <div class="flex" style="text-align: right;">
                                <button class="btn btn-outline-success" wire:click="show({{$contacto->id}})">Ver</button>
                                <button class="btn btn-outline-danger" wire:click="delete_modal({{$contacto->id}})"
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
        {{$contactos->links('pagination::default')}}
    </div>
    @include('livewire.components.delete-contacto')
    @include('livewire.components.show-contacto')
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

</div>

