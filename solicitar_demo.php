<?php //include('email_solicita_demo.php'); ?>
<?php
$archivo_previo = __FILE__;
include 'lang/idioma.php';
include 'header.php' ?>


<link rel="stylesheet" href="css/jquery.datetimepicker.css">
<script src="js/jquery.datetimepicker.full.js"></script>

<section class="bg_gray text-center py-5">
    <div class="container">
        <h1 class="blue_color"><?php lang('sold_text01')?></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <iframe style="width:810px;height:630px;" frameborder="0" src='https://crm.zoho.com/crm/WebFormServeServlet?rid=2e28a802a88a5c5c4396ad4991f3c305e49b5a76738eb523006490de19e55c1agid28962769f437d5b49ea22433900fa37ca3b8bf5f8b918fc1fe978d31087f847e'></iframe>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
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
<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>

<div class="info_contat post bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 pt-3">
                <i aria-hidden="true" class="icon fa fa-map-marker"></i>
                <div style="display: table-cell;">
                    <h3 class="mb-3"><?php lang('sold_text02');?></h3>
                    Calzada del Valle 400<br/>
                    Suite 127<br/>
                    San Pedro Garza García, Nuevo León, México.
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3">
                <i aria-hidden="true" class="icon fa fa-phone"></i>
                <h3 class="mb-3"><?php lang('sold_text03');?></h3>
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
