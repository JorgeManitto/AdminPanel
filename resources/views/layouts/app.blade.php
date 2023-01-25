<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
@php
    $route = request()->path();
@endphp
    <title>Administrador - Elevar</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    @livewireStyles
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />


    <!-- Page CSS -->

    <!-- Helpers -->
    {{-- <script src="../assets/vendor/js/helpers.js"></script> --}}

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">

            <a href="/" class="app-brand-link">
                <img src="/img/logo.png" alt="logo">
              {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Elevar</span> --}}
            </a>

          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
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

          </ul>
        </aside>
        <!-- / Menu -->

        {{$slot}}

      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    {{-- <script src="/assets/vendor/js/menu.js"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    {{-- <script src="/assets/js/main.js"></script> --}}

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>
    @livewireScripts
  </body>
</html>
