<footer>
    <div class="container py-5 ">
        <div class="row mb-5 legend">
            <div class="col-md-6">
                <h2>Descubre lo que Potentor puede hacer por ti.</h2>
            </div>
            <div class="col-md-6 text-right">
                <!--<form class="form-inline" method="post" action="enviar_email.php">
                  <input type="hidden" name="_val1">
                  <input type="hidden" name="_val2">
                    <div class="form-group mb-2">
                        <input type="email" placeholder="* <?=lang('sol_demo_text_mail')?>" class="form-control form-control-lg" name="email" required >
                    </div>
                    <button type="submit" class="btn btn-success btn-lg mb-2 ml-2"><?=lang('Solicitar Demo')?></button>
                </form>-->
                <div class="form-inline">
                    <a class="btn btn-success btn-lg" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
                </div>
            </div>
        </div>
        <div class="row links">
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Gestión de talento');?></H5>
                <a href="<?php echo 'GDT_estructura_expediente.php'?>"><?=lang('Estructura y expedientes');?></a>
            </div>
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Cultura');?></H5>
                <a href="<?php echo 'CU_portal_del_empleado.php'?>"><?=lang('Portal del empleado');?></a>
                <a href="<?php echo 'CU_clima_laboral.php'?>"><?=lang('Encuesta de clima org');?></a>
            </div>
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Psicometría');?></H5>
                <a href="<?php echo 'PSI_psicometria_por_competencias.php'?>"><?=lang('Psic x Comp_1');?></a>
                <a href="<?php echo 'PSI_mapeo_de_talento.php'?>"><?=lang('Mapeo de talento');?></a>
                <a href="<?php echo 'PSI_reclutamiento_y_permanencia.php'?>"><?=lang('RECYPERM');?></a>

            </div>
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Des Organiz');?></H5>
                <a href="<?php echo 'DO_evaluacion360.php'?>"><?=lang('Eval 360')?></a>
                <a href="<?php echo 'DO_evaluacion_del_desempeno.php'?>"><?=lang('Eval desemp')?></a>

            </div>
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Plan y ret tal')?></H5>
                <a href="<?php echo 'PYR_adecuacion_puesto_persona.php'?>"><?=lang('Adec puesto/persona')?></a>
                <a href="<?php echo 'PYR_9box.php'?>"> <?=lang('9box')?></a>
                <a href="<?php echo 'PYR_planes_de_carrera_sucesion.php'?>"><?=lang('Plan carr y suc')?></a>
            </div>
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Compania')?></H5>
                <a href="<?php echo 'sobre_potentor.php'?>"><?=lang('Sobre Potentor')?></a>
                <a href="<?php echo 'sobre_potentor.php'?>#team"><?=lang('Nuestro equipo')?></a>
                <a href="<?php echo 'clientes.php'?>"><?=lang('Clientes')?></a>
                <a href="<?php echo 'clientes.php'?>#History"><?=lang('Historias de éxito')?></a>

            </div>
            <div class="col-6 col-sm-4 col-md">
                <H5><?=lang('Recursos')?></H5>
                <a href="http://blog.potentor.com.mx/" target="_blank">Blog</a>
                <a href="<?php echo 'partners.php'?>"><?=lang('Partners')?></a>
                <!--<a href="/"><?=lang('Artículos')?></a>-->
                <a href="<?php echo 'faq.php'?>">FAQs</a>
            </div>

        </div>
    </div>
    <div class="col text-center pb-3">
        <span>Copyright <?=date('Y')?> Potentor</span> All Rights Reserved. || <i class="fa fa-map-marker" aria-hidden="true"></i><a href="https://goo.gl/maps/ga6zFEUwDUhvucfH8" target="_blank"> Calzada del Valle 400 Suite 127, Col. del Valle San Pedro Garza García</a> || <i class="fa fa-phone" aria-hidden="true"></i> +5218186254967
    </div>
</footer>


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

    </script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-83736793-1', 'auto');
		ga('send', 'pageview');

	</script>

    <style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
      font-size:30px;
        box-shadow: 2px 2px 3px #999;
      z-index:100;
    }

    .my-float{
        margin-top:16px;
    }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+5218186813672&text=<?=lang('Hola Whatsapp')?>" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

	<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2372580&conversionId=3086340&fmt=gif" />
  </body>
</html>
