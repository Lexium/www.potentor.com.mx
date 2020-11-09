<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<section class="generic_page">
    <div class="container mt-3 py-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="aqua_color"><?=lang('Eval 360');?></h5>
                <h2><?=lang('360_text01');?></h2>
                <p class="mb-4"><?=lang('360_text02');?></p>
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6 characteristics">
                <ul>
                    <li class="first">
                        <h5><?=lang('360_text03');?></h5>
                        <p><?=lang('360_text04');?></p>
                    </li>
                    <li class="second">
                        <h5><?=lang('360_text05');?></h5>
                        <p><?=lang('360_text06');?></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row d-flex align-items-center functionality">
            <div class="col-md-6">
                <h2>
                    <?=lang('360_text07');?>
                    <span class="line">&nbsp;</span>
                </h2>
                <h4><?=lang('360_text08');?></h4>
                <p><?=lang('360_text09');?></p>
                <h4><?=lang('360_text10');?></h4>
                <p><?=lang('360_text11');?></p>
                <h4><?=lang('360_text12');?></h4>
                <p><?=lang('360_text13');?></p>
            </div>
            <div class="col-md-6 text-center">
                <img class="img-fluid" src="images/eva_360.png">
            </div>
        </div>
    </div>
    <div class="testimonials text-center py-5 bg_gray">
        <div class="container">
            <div class="princiapal_container">
                <div class="text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i><br/>
                    <?=lang('TES_WIN_DES');?>
                </div>
            </div>
            <div class="guest">
                <img src="images/diana_arreola_WIN.png"  width="140px"  class="mb-3" />
                <?=lang('TES_WIN_NAME');?>
            </div>
        </div>

    </div>
</section>
<?php include 'generic_footer.php';?>