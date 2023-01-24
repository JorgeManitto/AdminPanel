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
    <link rel="shortcut icon" href= "img/favicon.ico" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
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
    <div class="ltn__breadcrumb-area text-left  bg-image "  data-bg="img/bg/14i.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
						<h1 class="page-title">Implementación <br>normativa<br> ISO/IEC 17025</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120 ">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 align-self-center">
                    <div class="about-us-info-wrap">

                        <p class="pformacion">Cuando trabajamos en un laboratorio, necesitamos tener una guía o respaldo documental que permita organizar las actividades y cumplir con parámetros que aseguren los resultados ofrecidos. Para ello, una de las mejores formas es implementar un sistema de gestión de calidad a partir de una normativa de referencia.</p>

						<p class="pformacion">Desde ELEVAR acompañamos para implementar y mejorar los sistemas de gestión de los laboratorios basados en la norma internacionalmente reconocida ISO/IEC 17025 en su versión vigente.</p>

                       <p class="pformacion">Nuestras implementaciones tienen las siguientes ventajas:</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

	 <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4   pb-50 " >
        <div class="container">
			  <div class="row  pb-40">
                <div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
					    <p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Visitas y reuniones presenciales a los laboratorios para conocer e identificar situaciones reales, y a partir de ellas, plantear la mejor alternativa de implementación normativa.</p>

						<p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Uso de TICS (tecnologia de la información y comunicación) para reuniones y trabajo con empresas del exterior del pais, empresas lejos de nuestra sede, o simplemente empresas que no disponen tiempo para reuniones presenciales.</p>


						<p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Implementaciones dinámicas adaptadas a las actividades y horarios de los laboratorios.</p>


						<p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Confidencialidad de la información compartida, mediante compromisos firmados con anterioridad al comienzo de la implementación.</p>


						<p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Reuniones globales donde se involucra a todo el personal necesario del laboratorio, generando compromiso interno para cada actividad planteada en la implementación.</p>

						</div>
					</div>
                </div>
            </div><div id="con"></div>
    </div>
 </div>
    <!-- CALL TO ACTION END -->

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

		<script>
		  $(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
			  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
				  $('html, body').animate({
					scrollTop: target.offset().top
				  }, 1000);
				  return false;
				}
			  }
			});
		  });
  </script>

  <script>
        $('.collapse a').click(function(){
            $(".collapse").collapse('hide');
        });
  </script>

</body>
</html>

