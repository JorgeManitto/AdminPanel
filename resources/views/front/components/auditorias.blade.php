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
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left  bg-image "  data-bg="img/bg/14audi.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
						<h1 class="page-title">Auditorías <br>internas</h1>
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

                        <p class="pformacion">ELEVAR ofrece auditorías internas para sistemas de calidad basados en ISO/IEC 17025 o sistemas de calidad combinados de ISO/IEC 17025 e ISO 9001. Nuestros auditores se encuentran formados en base a la norma ISO 19011, y generan cada plan de auditoría en función a sus directrices.</p>

						<p class="pformacion">El equipo de auditores se conforma particularmente para cada caso, brindando una dinámica capaz de generar un espacio, no sólo de cumplimiento normativo, sino también de mejora continua. </p>

						<p class="pformacion">Contamos con expertos técnicos en áreas específicas, cubriendo alcances relacionados con ensayos microbiológicos y físico químicos en matrices varias, como también en calibraciones de diferentes magnitudes.</p>

						<p class="pformacion">Nuestro servicio de auditoría cubre:</p>

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
					    <p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Auditorías de diagnóstico para conocer el estado puntual de un proceso o actividad, de modo que una futura implementación normativa, asistencia técnica o acompañamiento de acreditación sea real y efectivo.</p>

						<p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Auditorías internas como apoyo en el crecimiento y mejora del laboratorio.</p>


						<p class="lisasis"><i class="fa fa-square facuadradito" aria-hidden="true" ></i>Acompañamiento en auditorías de tercera parte (entes de acreditación) y de segunda parte (clientes y otras partes interesadas).</p>

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

