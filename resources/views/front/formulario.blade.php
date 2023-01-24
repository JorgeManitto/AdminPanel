<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ELEVAR</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href= "{{ asset('/img/favicon.ico') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    @include('front.components.menu')
    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left  bg-image "  data-bg="img/bg/14ireg.jpg" style="background-image:url({{ asset('img/bg/14ireg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
						<h1 class="page-title">Formulario de<br>registro</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->




	  <!-- CONTACT MESSAGE AREA START -->
   <div class="ltn__call-to-action-area ltn__call-to-action-4 mt-50 pb-50 " >
        <div class="container">
            <div class="row">
                @if (session('status'))
                <div class="col-lg-12 col-12 ">
                    <div class="alert bg-success alert-success">
                        <div class="alert-body text-white">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">{{!empty($curso->titulo) ? $curso->titulo :'Cursos privados'}}</h4>
                        <form id="contact-form" action="{{ route('post_formulario') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" value="{{!empty($curso->titulo) ? $curso->titulo :'Cursos privados'}}" name="titulo">
                                    <input type="hidden" value="{{!empty($curso->categoria) ? $curso->categoria :'4'}}" name="categoria">
                                    <input type="hidden" value="{{!empty($curso->url_info) ? $curso->url_info :''}}" name="url_info">
                                    <div class="input-item input-item-name">
										<label>Nombre</label>
                                        <input required type="text" name="name">
                                    </div>
                                </div>
								 <div class="col-md-6">
                                    <div class="input-item input-item-name">
										<label>Apellido</label>
                                        <input required type="text" name="apellido">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="input-item input-item-name">
										<label>País</label>
                                        <input required type="text" name="pais">
                                    </div>
                                </div>
								 <div class="col-md-6">
                                    <div class="input-item input-item-name">
										<label>Empresa</label>
                                        <input required type="text" name="empresa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ">
										<label>Email</label>
                                        <input required type="email" name="email" placeholder="Su email">
                                    </div>
                                </div>
								 <div class="col-md-6">
                                    <div class="input-item input-item-phone ">
										<label>Teléfono</label>
                                        <input required type="text" name="phone" placeholder="Escriba su número de teléfono">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ">
								<label>{{!empty($curso->titulo) ? '¿En que otros temas te gustraia formarte?' :' Dejanos tu consulta'}}</label>
                                <textarea maxlength="250" name="message" ></textarea>
                            </div>

                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase bckn" type="submit">{{!empty($curso->titulo) ? 'Registrarse' :'Enviar Solicitud'}}</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    @include('front.components.footer')

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>
</html>

