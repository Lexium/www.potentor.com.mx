<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<section class="generic_page">
    <div class="container mt-3 py-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="aqua_color"><?=lang('9box');?></h5>
                <h2><?=lang('9BOX_text01');?></h2>
                <p class="mb-4"><?=lang('9BOX_text02');?></p>
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6 characteristics">
                <ul>
                    <li class="first">
                        <h5><?=lang('9BOX_text03');?></h5>
                        <p><?=lang('9BOX_text04');?></p>
                    </li>
                    <li class="second">
                        <h5><?=lang('9BOX_text05');?></h5>
                        <p><?=lang('9BOX_text06');?></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row d-flex align-items-center functionality">
            <div class="col-md-6">
                <h2>
                    <?=lang('9BOX_text07');?>
                    <span class="line">&nbsp;</span>
                </h2>
                <h4><?=lang('9BOX_text08');?></h4>
                <p><?=lang('9BOX_text09');?></p>
                <h4><?=lang('9BOX_text10');?></h4>
                <p><?=lang('9BOX_text11');?></p>
                <h4><?=lang('9BOX_text12');?></h4>
                <p><?=lang('9BOX_text13');?></p>
                <h4><?=lang('9BOX_text14');?></h4>
                <p><?=lang('9BOX_text15');?></p>
            </div>
            <div class="col-md-6 text-center">
                <img class="img-fluid" src="images/planeacion.png">
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