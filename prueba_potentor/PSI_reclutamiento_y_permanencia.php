<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<section class="generic_page">
    <div class="container mt-3 py-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="aqua_color"><?=lang('RECYPERM');?></h5>
                <h2><?=lang('RYP_text01');?></h2>
                <p class="mb-4"><?=lang('RYP_text02');?></p>
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6 characteristics">
                <ul>
                    <li class="first">
                        <h5><?=lang('RYP_text03');?></h5>
                        <p><?=lang('RYP_text04');?></p>
                    </li>
                    <li class="second">
                        <h5><?=lang('RYP_text05');?></h5>
                        <p><?=lang('RYP_text06');?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg_gray py-5 online_sales">
        <div class="container text-center">
            <h3><?=lang('CPP_text01');?></h3>
            <h3><?=lang('CPP_text02');?></h3>
            <div class="row mb-3">
                <div class="col-6 col-sm-3 col-md-3 d-flex align-items-center"><img class="img-fluid" src="images/clientes/logo_soriana.png"></div>
                <div class="col-6 col-sm-3 col-md-3 d-flex align-items-center"><img class="img-fluid" src="images/clientes/logo_axtel.png"></div>
                <div class="col-6 col-sm-3 col-md-3 d-flex align-items-center"><img class="img-fluid" src="images/clientes/logo_banorte.png"></div>
                <div class="col-6 col-sm-3 col-md-3 d-flex align-items-center"><img class="img-fluid" src="images/clientes/logo_gis.png"></div>
            </div>
            <p class="mb-4"><?=lang('CPP_text04');?></p>
            <a class="btn btn-purple" href="https://potentorlite.zohocommerce.com/" target="_blank"><?=lang('CPP_text03');?></a>
        </div>
    </div>
    <div class="container mt-3 py-5">
        <div class="row d-flex align-items-center functionality">
            <div class="col-md-6">
                <h2>
                    <?=lang('RYP_text07');?>
                    <span class="line">&nbsp;</span>
                </h2>
                <h4><?=lang('RYP_text08');?></h4>
                <p><?=lang('RYP_text09');?></p>
                <h4><?=lang('RYP_text10');?></h4>
                <p><?=lang('RYP_text11');?></p>
                <h4><?=lang('RYP_text12');?></h4>
                <p><?=lang('RYP_text13');?></p>
            </div>
            <div class="col-md-6 text-center">
                <img class="img-fluid" src="images/estrellas.png">
            </div>
        </div>
    </div>
    <div class="testimonials text-center py-5 bg_gray">
        <div class="container">
            <div class="princiapal_container">
                <div class="text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i><br/>
                    <?=lang('TES_SOR_DES');?>
                </div>
            </div>
            <div class="guest">
                <img src="images/karen_garcia_soriana.png"  width="140px"  class="mb-3" />
                <?=lang('TES_SOR_NAME');?>
            </div>
        </div>

    </div>
</section>
<?php include 'generic_footer.php';?>