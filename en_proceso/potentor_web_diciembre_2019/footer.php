<footer>
    <div class="container py-5 post hidden visible animated fadeInDown">
        <div class="row">
            <div class="col-12 col-lg-3">
                <img src="images/logo_bco_potentor.png" width="200px"><br><br>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-6 col-md">
                        <h5>Soluciones</h5>
                        <h6>Gestión</h6>
                        <ul class="list-unstyled text-small list-P">
                            <li><a href="" target="_blank">Portal</a></li>
                            <li><a href="">Estructura</a></li>
                        </ul>
                        <h6>Evaluación</h6>
                        <ul class="list-unstyled text-small list-P">
                            <li>
                                <a href="">Psicometría</a>
                            </li>
                            <li>
                                <a href="evaluacion_360.php">Evaluación 360°</a>
                            </li>
                            <li>
                                <a href="evaluacion_desempeno.php">Evaluación del desempeño</a>
                            </li>
                            <li>
                                <a href="encuesta_clima.php">Encuesta de clima org.</a>
                            </li>
                            <li>
                                <a href="seleccion_permanencia.php">Reclutamiento y permanencia</a>
                            </li>
                        </ul>
                        <h6>Planeación y desarrollo</h6>

                        <ul class="list-unstyled text-small list-P">
                            <li><a href="mapa_de_talento.php">Mapeo de talento</a></li>
                            <li><a href="#!">Adecuación puesto persona</a></li>
                            <li><a href="#!">9box</a></li>
                            <li><a href="#!">Planes de carrera y sucesión</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Acerca de</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="clientes.php">Nuestros clientes</a></li>
                            <li><a href="alianzas.php">Alianzas</a></li>
                            <li><a href="alianzas.php">Red de consultores</a></li>
                            <li><a href="http://blog.potentor.com.mx/" target="_blank">Blog</a></li>
                        </ul>
                        <div class="displayB">
                            <h5>Empresa</h5>
                            <ul class="list-unstyled text-small">
                                <li><a href="contacto.php">Agenda demo en vivo</a></li>
                                <li><a href="contacto.php">Solicitud de propuesta</a></li>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="politicas.php">Política de privacidad</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md displayN">
                        <h5>Empresa</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="contacto.php">Agenda demo en vivo</a></li>
                            <li><a href="contacto.php">Solicitud de propuesta</a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="politicas.php">Política de privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col copy">
        <span>Copyright 2019 Potentor</span> All Rights Reserved.
    </div>
</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <!--<script>window.jQuery || document.write('<script src="./js/vendor/jquery-slim.min.js"><\/script>')</script>-->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.js"></script>
	<script type="text/javascript" src="bower_components/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            margin: 20,
            nav: true,
            dots: false,
            navText: ['<img src="images/left.png">', '<img src="images/right.png">'],
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            loop: true,


            responsive: {
              0: {
                items: 3
              },
              600: {
                items: 5
              },
              1000: {
                items: 7
              }
            }
          })
        })
    </script>
     <script>
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};

		if($("#g-recaptcha-1").length > 0){
			var recaptcha1;
			var myCallBack = function() {

			  recaptcha1 = grecaptcha.render('g-recaptcha-1', {
				'sitekey' : '6LdTJDIUAAAAANMULGs2qCBk2g-uLhJRwvd7ztfe',
				'theme' : 'light'
			  });
			};
		}
    </script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-83736793-1', 'auto');
		ga('send', 'pageview');

	</script>

  </body>
</html>
