
<?php include('email_solicita_demo.php'); ?>
<?php
$archivo_previo = __FILE__;
include 'lang/idioma.php';
include 'header.php' ?>


<section class="bg_gray text-center py-5">
    <div class="container py-5">
        <h1 class="blue_color"><?php lang('cont_text01')?></h1>
    </div>
</section>


<div class="info_contat post bg_gray">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-6 col-md-3 pt-3">
                <i aria-hidden="true" class="icon fa fa-map-marker"></i>
                <div style="display: table-cell;">
                    <h3 class="mb-3"><?php lang('cont_text02')?></h3>
                    Calzada del Valle 400<br/>
                    Suite 127<br/>
                    San Pedro Garza García, Nuevo León, México.
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3">
                <i aria-hidden="true" class="icon fa fa-phone"></i>
                <h3 class="mb-3"><?php lang('cont_text03')?></h3>
                +52 181 8625 4967
            </div>
            <div class="col-sm-6 col-md-3 pt-3">
                <i aria-hidden="true" class="icon fa fa-envelope-o"></i>
                <h3 class="mb-3">Email</h3>
                <a href="mailto:info@potentor.com.mx">info@potentor.com.mx</a>
            </div>
             <div class="col-sm-6 col-md-3 pt-3">
                <a href="https://www.linkedin.com/company/potentor/" aria-hidden="true" class="share fa fa-linkedin" target="_blank"></a>
                <a href="https://twitter.com/potentormx" aria-hidden="true" class="share fa fa-twitter" target="_blank"></a>
                <a href="https://www.facebook.com/potentor/" aria-hidden="true" class="share fa fa-facebook" target="_blank"></a>
            </div>
        </div>
    </div>
</div>
<?php include 'generic_footer.php' ?>
