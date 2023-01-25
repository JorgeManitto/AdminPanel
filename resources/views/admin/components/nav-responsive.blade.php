@php
    $route = request()->path();
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none d-block" style="position: sticky;top:0;z-index:9999;">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('dashboard')}}">
        <img src="/img/logo.png" alt="elevar" />
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">



        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="menu-item {{$route == 'admin' ? 'active' : ''}}">
                <a href="/admin" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Administración</div>
                </a>
              </li>

              <li class="menu-item {{$route == 'admin/cursos' ? 'active' : ''}}">
                  <a href="/admin/cursos" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-bookmark-plus "></i>
                    <div data-i18n="Analytics">Cursos</div>
                  </a>
              </li>

              <li class="menu-item {{$route == 'admin/registro' ? 'active' : ''}}">
                  <a href="/admin/registro" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-registered "></i>
                    <div data-i18n="Analytics">Registros</div>
                  </a>
              </li>

              <li class="menu-item {{$route == 'admin/contacto' ? 'active' : ''}}">
                  <a href="/admin/contacto" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-contact "></i>
                    <div data-i18n="Analytics">Contactos</div>
                  </a>
              </li>

              <li class="menu-item {{$route == 'admin/usuario' ? 'active' : ''}}">
                  <a href="/admin/usuario" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user "></i>
                    <div data-i18n="Analytics">Usuarios</div>
                  </a>
              </li>
      </div>
    </div>
  </nav>
