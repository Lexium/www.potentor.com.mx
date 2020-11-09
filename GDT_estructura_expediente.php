 <?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>

<section class="generic_page">
    <div class="container mt-3 py-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="aqua_color"><?=lang('Estructura y expedientes');?></h5>
                <h2><?=lang('EYE_text01');?></h2>
                <p class="mb-4"><?=lang('EYE_text02');?></p>
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6 characteristics">
                <ul>
                    <li class="first">
                        <h5><?=lang('EYE_text03');?></h5>
                        <p><?=lang('EYE_text04');?></p>
                    </li>
                    <li class="second">
                        <h5><?=lang('EYE_text05');?></h5>
                        <p><?=lang('EYE_text06');?></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row d-flex align-items-center functionality">
            <div class="col-md-6">
                <h2>
                    <?=lang('EYE_text07');?>
                    <span class="line">&nbsp;</span>
                </h2>
                <h4><?=lang('EYE_text08');?></h4>
                <p><?=lang('EYE_text09');?></p>
                <h4><?=lang('EYE_text10');?></h4>
                <p><?=lang('EYE_text11');?></p>
                <h4><?=lang('EYE_text12');?></h4>
                <p><?=lang('EYE_text13');?></p>
                <h4><?=lang('EYE_text14');?></h4>
                <p><?=lang('EYE_text15');?></p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="images/gestion.png">
            </div>
        </div>
    </div>
    <div class="testimonials text-center py-5 bg_gray">
        <div class="container">
            <div class="princiapal_container">
                <div class="text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i><br/>
                    <?=lang('TES_TALI_DES');?>
                </div>
            </div>
            <div class="guest">
                <img src="images/luis_ordaz_talisis.png"  width="140px"  class="mb-3" />
                <?=lang('TES_TALI_NAME');?>
            </div>
        </div>

    </div>
</section>
<?php include 'generic_footer.php' ?>