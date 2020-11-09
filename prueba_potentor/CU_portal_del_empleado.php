<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<section class="generic_page">
    <div class="container mt-3 pt-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="aqua_color"><?=lang('Portal del empleado');?></h5>
                <h2><?=lang('PDE_text01');?></h2>
                <p class="mb-4"><?=lang('PDE_text02');?></p>
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6 characteristics">
                <ul>
                    <li class="first">
                        <h5><?=lang('PDE_text03');?></h5>
                        <p><?=lang('PDE_text04');?></p>
                    </li>
                    <li class="second">
                        <h5><?=lang('PDE_text05');?></h5>
                        <p><?=lang('PDE_text06');?></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row d-flex align-items-center functionality">
            <div class="col-md-6 mb-5">
                <h2>
                    <?=lang('PDE_text07');?>
                    <span class="line">&nbsp;</span>
                </h2>
                <h4><?=lang('PDE_text08');?></h4>
                <p><?=lang('PDE_text09');?></p>
                <h4><?=lang('PDE_text10');?></h4>
                <p><?=lang('PDE_text11');?></p>
                <h4><?=lang('PDE_text12');?></h4>
                <p><?=lang('PDE_text13');?></p>
                <h4><?=lang('PDE_text14');?></h4>
                <p><?=lang('PDE_text15');?></p>
            </div>
            <div class="col-md-6 text-center mb-5">
                <img class="img-fluid" src="images/portal-empleado.png">
            </div>
            <div class="col-md-6 text-center mb-5">
                <img class="img-fluid" src="images/circulos_portal_empleado.jpg">
            </div>
            <div class="col-md-6 mb-5">
                <h4><?=lang('PDE_text16');?></h4>
                <p><?=lang('PDE_text17');?></p>
                <h4><?=lang('PDE_text18');?></h4>
                <p><?=lang('PDE_text19');?></p>
                <h4><?=lang('PDE_text20');?></h4>
                <p><?=lang('PDE_text21');?></p>
                <h4><?=lang('PDE_text22');?></h4>
                <p><?=lang('PDE_text23');?></p>
            </div>
        </div>
    </div>
    <div class="testimonials text-center py-5 bg_gray">
        <div class="container">
            <div class="princiapal_container">
                <div class="text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i><br/>
                    <?=lang('TES_AXT_DES');?>
                </div>
            </div>
            <div class="guest">
                <img src="images/mariana_morales_axtel.png"  width="140px"  class="mb-3" />
                <?=lang('TES_AXT_NAME');?>
            </div>
        </div>
    </div>
</section>
<?php include 'generic_footer.php';?>