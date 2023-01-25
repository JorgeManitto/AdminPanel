<!-- Transactions -->
<div class="col-md-6 col-lg-6 order-2 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Ultimos Cursos Registrados</h5>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">

        @foreach ($ultimos_cursos as $item)

          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              {{-- <img src="/favicon.ico" alt="User" class="rounded" /> --}}
              <i class="menu-icon tf-icons bx bx-bookmark-plus "></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">{{$item->titulo}}</small>
                <h6 class="mb-0">{{$item->disertante}}</h6>
              </div>

            </div>
          </li>

        @endforeach

        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
