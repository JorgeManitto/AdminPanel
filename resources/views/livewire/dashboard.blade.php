
        <!-- Layout container -->
        <div class="layout-page">
            @include('admin.components.nav-bar')

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                      @include('admin.components.chart-widget-cursos')

                    </div>
                  </div>

                  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                    </div>
                  </div>
                </div>
                <div class="row">

                  @include('admin.components.estadisticas-cursos')


                  @include('admin.components.transacciones-cursos')
                </div>
              </div>
              <!-- / Content -->

              <!-- Footer -->
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                  </div>
                  <div>
                    <a
                      href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link me-4"
                      >Support</a
                    >
                  </div>
                </div>
              </footer>
              <!-- / Footer -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->

