<section class="container generic_footer py-5 text-center">
    <h3 class="mb-5"><?=lang('GEN_FOO_TEXT_01')?></h2>
    <div class="owl-carousel owl-theme clients">
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_estructura.png"  class="mb-3" />
                    <h4><?=lang('GEN_FOO_TEXT_02')?></h4>
                    <p><?=lang('GEN_FOO_TEXT_03')?></p>
                    <a href="GDT_estructura_expediente.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_psicometria.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_04')?></h4>
                    <p><?=lang('GEN_FOO_TEXT_05')?></p>
                    <a href="PSI_psicometria_por_competencias.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_reclutamiento.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_06')?></h4>
                    <p><?=lang('GEN_FOO_TEXT_07')?></p>
                    <a href="PSI_reclutamiento_y_permanencia.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_mapeo.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_08')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_09')?></p>
                    <a href="PSI_mapeo_de_talento.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_evaluacion_desempeno.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_10')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_11')?></p>
                    <a href="DO_evaluacion_del_desempeno.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_evaluacion360.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_12')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_13')?></p>
                    <a href="DO_evaluacion360.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_adecuacion.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_14')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_15')?></p>
                    <a href="PYR_adecuacion_puesto_persona.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_9box.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_16')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_17')?></p>
                    <a href="PYR_9box.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_planes_de_carrera.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_18')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_19')?></p>
                    <a href="PYR_planes_de_carrera_sucesion.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="card-body">
                    <img src="images/b2_encuestaClima.png" class="mb-3"/>
                    <h4><?=lang('GEN_FOO_TEXT_20')?></h4>
                     <p><?=lang('GEN_FOO_TEXT_21')?></p>
                    <a href="CU_clima_laboral.php"><?=lang('ver mas')?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            margin: 30,
            nav: true,
            dots: false,
            navText: ['<img src="images/left.png">', '<img src="images/right.png">'],
            autoplay: true,
            slideSpeed: 800,
            paginationSpeed: 800,
            loop: true,


            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              1000: {
                items: 4
              }
            }
          })
        })
    </script>
<?php include 'footer.php' ?>