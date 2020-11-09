<?php $has_error=array(); ?>
<?php include('email_distribuidor.php'); ?>
<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>

<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>

<script>
  var recaptcha;
  var myCallBack = function() {

    recaptcha = grecaptcha.render('recaptcha', {
      'sitekey' : '6LdTJDIUAAAAANMULGs2qCBk2g-uLhJRwvd7ztfe', //Reemplazar esto por la Key de tu sitio
      'theme' : 'light'
    });

  };
</script>
<div class="bg_gray py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <h2 class="mb-2"><?php lang('part_text01')?></h2>
                <p style="font-size:1.5rem;"><?php lang('part_text02')?></p>
                <!--<form class="form-inline mb-3">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control form-control-lg" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg mb-2 ml-2"><?=lang('part_text03')?></button>
                </form>-->
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6" >
                <img src="images/circulos_partners.png" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div id="partners">
        <h2 class="mb-4 text-center"><?php lang('part_text04')?></h2>
        <div class="row">
            <div class="col-6 col-sm-6 col-md col-lg  mb-2">
                <img src="images/partners/lexium.png" class="img-fluid" title="" alt="">
            </div>
            <div class="col-6 col-sm-6 col-md col-lg  mb-2">
                <img src="images/partners/direcciona.jpg" class="img-fluid" title="" alt="">
            </div>

            <div class="col-6 col-sm-6 col-md col-lg  mb-2">
                <img src="images/partners/be-consulting.jpg" class="img-fluid" title="" alt="">
            </div>

            <div class="col-6 col-sm-6 col-md col-lg  mb-2">
                <img src="images/partners/hr-center.jpg" class="img-fluid" title="" alt="">
            </div>
            <div class="col-6 col-sm-6 col-md col-lg  mb-2">
                <img src="images/partners/opentec.jpg" class="img-fluid" title="" alt="">
            </div>
        </div>
    </div>
</div>
<div class="bg_gray py-5">
    <div class="container text-center">
        <h2 class="mb-4"><?php lang('part_text05')?></h2>
        <div class="row">
            <div class="col-6 col-sm-6 col-md col-lg mb-2">
                <img src="images/ban_mex.png" class="img-fluid" title="" alt="">
            </div>
            <div class="col-6 col-sm-6 col-md col-lg mb-2">
                <img src="images/ban_guatemala.png" class="img-fluid" title="" alt="">
            </div>

            <div class="col-6 col-sm-6 col-md col-lg mb-2">
                <img src="images/ban_panama.png" class="img-fluid" title="" alt="">
            </div>
            <div class="col-6 col-sm-6 col-md col-lg mb-2">
                <img src="images/ban_ecuador.png" class="img-fluid" title="" alt="">
            </div>
            <div class="col-6 col-sm-6 col-md col-lg mb-2">
                <img src="images/ban_esp.png" class="img-fluid" title="" alt="">
            </div>
            <div class="col-6 col-sm-6 col-md col-lg mb-2">
                <img src="images/ban_usa.png" class="img-fluid" title="" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <form action="partners.php" method="POST" class="px-3">
                <h3 class="mb-2 text-center"><?php lang('part_text06')?></h3>
                <p class="mb-5 text-center"><?php lang('part_text21')?></p>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="name" class="active"><?php lang('part_text11')?> <b>*</b></label>
                        <input type="text" name="name" class="form-control" placeholder="" value="<?php echo (isset($_POST ['name']) ? $_POST['name'] : ''); ?>">
                        <?php if (array_key_exists('name', $has_error)): ?>
                        <span class="text-danger has-error">
                            <i><?php echo $has_error['name'] ?></i>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="country" class="active"><?php lang('part_text12')?> <b>*</b></label>
                        <input type="text" name="country" class="form-control" placeholder="" value="<?php echo (isset($_POST ['country']) ? $_POST['country'] : ''); ?>">
                        <?php if (array_key_exists('country', $has_error)): ?>
                          <span class="text-danger has-error">
                              <i><?php echo $has_error['country'] ?></i>
                          </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="company" class="active"><?php lang('part_text13')?> <b>*</b></label>
                        <input type="text" name="company" class="form-control" placeholder="" value="<?php echo (isset($_POST ['company']) ? $_POST['company'] : ''); ?>">
                        <?php if (array_key_exists('company', $has_error)): ?>
                          <span class="text-danger has-error">
                              <i><?php echo $has_error['company'] ?></i>
                          </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email" class="active"><?php lang('part_text14')?> <b>*</b></label>
                        <input type="email" name="email" class="form-control" placeholder="" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>">
                        <?php if (array_key_exists('email', $has_error)): ?>
                            <span class="text-danger has-error">
                                <i><?php echo $has_error['email'] ?></i>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="name" class="active"><?php lang('part_text15')?> <b>*</b></label>
                        <input type="text" name="phone" class="form-control" placeholder="" value="<?php echo (isset($_POST ['phone']) ? $_POST['phone'] : ''); ?>">
                        <?php if (array_key_exists('phone', $has_error)): ?>
                          <span class="text-danger has-error">
                              <i><?php echo $has_error['phone'] ?></i>
                          </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group message">
                    <label for="message" class="active"><?php lang('part_text16')?> <b>*</b></label>
                    <textarea class="form-control" name="message" rows="5" placeholder=""><?php echo (isset($_POST ['message']) ? $_POST['message'] : ''); ?></textarea>
                    <?php if (array_key_exists('message', $has_error)): ?>
                        <span class="text-danger has-error">
                            <i><?php echo $has_error['message'] ?></i>
                        </span>
                    <?php endif; ?>
                </div>
                <div id="recaptcha"></div>
                    <?php if (array_key_exists('g-recaptcha-response', $has_error)): ?>
                        <span class="text-danger has-error">
                            <i><?php echo $has_error['g-recaptcha-response'] ?></i>
                        </span>
                    <?php endif; ?>
                <button type="submit" class="btn btn-lg btn-success">Enviar</button>
                <input type="hidden" name="completo" value="1">
            </form>
        </div>

    </div>
</div>

<script type="text/javascript" src="bower_components/toastr/toastr.min.js"></script>
<script type="text/javascript">
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
    $(document).ready(function() {
        <?php if(isset($success) and $success):?>
                toastr["success"]("<?php lang('part_text17')?>", "<?php lang('part_text18')?>");
        <?php elseif(isset($success) and !$success):?>
                toastr["error"]("<?php lang('part_text19')?>", "<?php lang('part_text20')?>");
        <?php endif;?>
    });
    <?php if(count($_POST) > 0){?>
        $('#mapa').hide();
        $('#partners').hide();
        $('#linea1').hide();
        $('#linea2').hide();

    <?php }?>

</script>

<?php include 'generic_footer.php' ?>
