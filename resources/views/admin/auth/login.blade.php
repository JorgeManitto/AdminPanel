{{-- <!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="container">
        <form >

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input >
            </div>
            <div>
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html> --}}


<!DOCTYPE html>

<html lang="es" class="light-style customizer-hide">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login - Elevar</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

    <!-- Page -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css" />

  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <img src="/img/logo.png" alt="elevar">
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Bienvenido a Elevar! 👋</h4>
              <p class="mb-4">Por favor ingrese sus credenciales</p>
@php
    // dd($errors);
@endphp
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


              <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    class="form-control"
                    id="email"
                    placeholder="Ingrese su email "
                    autofocus
                    type="email" name="email" value="{{ old('email') }}" required
                  />

                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Contraseña</label>
                    {{-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a> --}}
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                        type="password" name="password"
                        id="password"
                        class="form-control"
                        aria-describedby="password"
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Recordar </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>



  </body>
</html>
