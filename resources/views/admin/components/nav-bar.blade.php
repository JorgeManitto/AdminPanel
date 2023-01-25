<!-- Navbar -->

<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar"
>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  <!-- Search -->
  <div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
        @php
            $route = request()->path();
            $url = '';
            switch ($route) {
                case 'admin/cursos':
                    $url = 'Listado De Cursos';
                    break;
                case 'admin/registro':
                    $url = 'Listado De Registros';
                    break;
                case 'admin/contacto':
                    $url = 'Listado De Contactos';
                    break;
                case 'admin/usuario':
                    $url = 'Listado De Usuarios';
                    break;
                default:
                    $url = 'Administración';
                    break;
            }
        @endphp
        <h3 style="margin-top: 0;margin-bottom: 0;" class="navbar-nav-right d-flex align-items-center">{{$url}}</h3>
    </div>
  </div>
  <!-- /Search -->


  <ul class="navbar-nav flex-row align-items-center ms-auto">
    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
          <img src="/user.jpg" alt class="w-px-40 h-auto rounded-circle" />
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <div class="avatar avatar-online">
                  <img src="/user.jpg" alt class="w-px-40 h-auto rounded-circle" />
                </div>
              </div>
              <div class="flex-grow-1">
                <span class="fw-semibold d-block">
                    {{Auth::user()->name}}
                </span>
                <small class="text-muted">Admin</small>
              </div>
            </div>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>

        <li>
          <a class="dropdown-item">
            <i class="bx bx-power-off me-2"></i>
            <form action="/logout" method="post" style="display: inline-block;width: 100%;">
                @csrf
                <span class="align-middle">
                    <button type="submit" style="display: inline-block;background: none;border: none;padding: 0;width: 100%;text-align: initial;">Salir</button>
                </span>
            </form>

          </a>
        </li>
      </ul>
    </li>
    <!--/ User -->
  </ul>
</div>
</nav>

<!-- / Navbar -->
