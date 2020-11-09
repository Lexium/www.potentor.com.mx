<!doctype html>

<html lang="en">

  <head>

<!-- Global site tag (gtag.js) - Google Ads: 874491491 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-874491491"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-874491491');
</script>

<?php
if(isset($poner_seguimiento ) && $poner_seguimiento)
{
?>
<!-- Event snippet for Seguimiento de Conversiones conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-874491491/jcFeCOu2hrQBEOPc_qAD'});
</script>
<?php
}
?>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="../favicon.ico">



    <title><?=lang('TITULO_SITIO')?></title>



    <!-- Bootstrap core CSS -->
  <link href="./css/owl.carousel.css" rel="stylesheet">

  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <link href="./css/style.css" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="bower_components/toastr/toastr.min.css"/>

  <link href="./css/owl.carousel.css" rel="stylesheet">
  <link href="./font-awesome/css/font-awesome.css" rel="stylesheet">


	<!--recaptcha-->

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <!--<script>window.jQuery || document.write('<script src="./js/vendor/jquery-slim.min.js"><\/script>')</script>-->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.js"></script>
    <script type="text/javascript" src="bower_components/toastr/toastr.min.js"></script>

  </head>



  <body>

    <nav class="navbar navbar-dark navbar-expand-lg fixed-top navbar-blue">

      <a class="navbar-brand" href="<?php echo 'index.php' ?>"><h1>potentor</h1><!--<img src="images/logo_potentor.png">--></a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="navbar-collapse collapse" id="navbarCollapse" style="">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">

              <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=lang('Soluciones');?></a>

              <div class="dropdown-menu big_menu" aria-labelledby="dropdown05">
                <div class="row">
                  <div class="col-sm-6 col-md-4 col-lg col-xl">
                    <h6 class="orange_color">POTENTOR</h6>
                    <ul>
                        <li>
                            <a href="<?php echo 'plataforma_integral.php'?>"><?=lang('PI_text01');?></a>
                        </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg col-xl">
                    <h6 class="green_color"><?=lang('Gestión de talento');?></h6>
                    <ul>
                        <li><a href="<?php echo 'GDT_estructura_expediente.php'?>"><?=lang('Estructura y expedientes');?></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg col-xl">
                    <h6 class="purple_color"><?=lang('Cultura');?></h6>
                    <ul>
                        <li>
                            <a href="<?php echo 'CU_portal_del_empleado.php'?>"><?=lang('Portal del empleado');?></a>
                        </li>
                        <li>
                            <a href="<?php echo 'CU_clima_laboral.php'?>"><?=lang('Encuesta de clima org');?></a>
                        </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg col-xl">
                    <h6 class="pink_color"><?=lang('Psicometría');?></h6>
                    <ul>
                        <li><a href="<?php echo 'PSI_psicometria_por_competencias.php'?>"><?=lang('Psic x Comp_1');?></a></li>
                        <li><a href="<?php echo 'PSI_mapeo_de_talento.php'?>"><?=lang('Mapeo de talento');?></a></li>
                        <li><a href="<?php echo 'PSI_reclutamiento_y_permanencia.php'?>"><?=lang('RECYPERM');?></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg col-xl">

                    <h6 class="aqua_color"><?=lang('Des Organiz');?></h6>
                    <ul class="list-unstyled text-small list-P">
                      <li><a href="<?php echo 'DO_evaluacion360.php'?>"><?=lang('Eval 360')?></a></li>
                      <li><a href="<?php echo 'DO_evaluacion_del_desempeno.php'?>"><?=lang('Eval desemp')?></a></li>

                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg col-xl">
                    <h6 class="blue_color"><?=lang('Plan y ret tal')?></h6>
                    <ul class="list-unstyled text-small list-P">
                        <li><a href="<?php echo 'PYR_adecuacion_puesto_persona.php'?>"><?=lang('Adec puesto/persona')?></a></li>
                        <li><a href="<?php echo 'PYR_9box.php'?>"><?=lang('9box')?></a></li>
                        <li><a href="<?php echo 'PYR_planes_de_carrera_sucesion.php'?>"><?=lang('Plan carr y suc')?></a></li>
                    </ul>
                  </div>
                </div>
              </div>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo 'PSI_psicometria_por_competencias.php'?>"><?=lang('Psicometría');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=lang('Recursos')?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a href="http://blog.potentor.com.mx/" target="_blank">Blog</a>
              <a href="<?php echo 'partners.php'?>"><?=lang('Partners')?></a>
              <a href="<?php echo 'faq.php'?>">FAQs</a>
            </div>
          </li>
          <li class="nav-item">

            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=lang('Clientes')?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a href="<?php echo 'clientes.php'?>"><?=lang('Clientes')?></a>
              <a href="<?php echo 'clientes.php'?>#History" name="History"><?=lang('Historias de éxito')?></a>
            </div>

          </li>
          <li class="nav-item">

            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=lang('Compania')?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a href="<?php echo 'sobre_potentor.php'?>"><?=lang('Sobre Potentor')?></a>
              <a href="<?php echo 'sobre_potentor.php'?>#team"><?=lang('Nuestro equipo')?></a>
            </div>

          </li>
          <li class="nav-item">
            <a class="btn btn-outline-info" href="https://potentorlite.zohocommerce.com/" target="_blank">Potentor Lite</a>
          </li>
          <li class="nav-item">
            <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" style="margin-top:0;"><?=lang('Solicitar Demo')?></a>
          </li>


        </ul>

      </div>

    </nav>
<div class="modal fade solDemo_int" id="solDemo_int" tabindex="-1" role="dialog" aria-hidden="true"  data-keyboard="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body py-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="row">
                  <div class="col-lg-6 contentInfo_solDemo p-4">

                    <h4 class="pt-3 pb-5"><?=lang('sol_demo_text10')?></h4>
                    <p class="pb-3">
                      <?=lang('sol_demo_text11')?>
                    </p>
                    <?=lang('sol_demo_text12')?>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4 mt-3">

                      <h3><?=lang('sol_demo_text01')?></h3>
                      <h5 class="mb-4"><?=lang('sol_demo_text02')?></h5>
                      <div id='crmWebToEntityForm'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                         <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                         <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads3876226000001843007 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory3876226000001843007()' accept-charset='UTF-8'>
                      <input type='text' style='display:none;' name='xnQsjsdp' value='28962769f437d5b49ea22433900fa37ca3b8bf5f8b918fc1fe978d31087f847e'></input>
                       <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                       <input type='text' style='display:none;' name='xmIwtLD' value='2e28a802a88a5c5c4396ad4991f3c305ab89ae25882ea6b6e3276d15f62ec894'></input>
                       <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
                      <input type='text' style='display:none;' name='returnURL' value='https://www.potentor.com.mx/gracias.php' > </input>


                            <div class="form-group" style="margin-bottom: 2rem;">

                                <input type='text' id='Last Name' name='Last Name' placeholder="Nombre" class="form-control mb-3" maxlength='80'></input>

                                <input type='text' id='Company' name='Company' placeholder="Empresa" class="form-control mb-3" maxlength='100'></input>

                                <input type='text' id='LEADCF1' name='LEADCF1' placeholder="Puesto" class="form-control mb-3" maxlength='255'></input>

                                <input type='text' id='Phone' name='Phone' maxlength='30' placeholder="Celular" class="form-control mb-3"></input>

                                <input type='text' ftype='email' id='Email' name='Email' placeholder="Correo empresarial" class="form-control mb-3" maxlength='100'></input>

                                <input type='text' id='No of Employees' name='No of Employees' placeholder="Número de empleados" class="form-control mb-3" maxlength='9'></input>

                                Soluciones de inter&eacute;s<br/>

                                <select id='LEADCF3' name='LEADCF3' class="custom-select mb-3"  multiple >
                                 <option value='Estructura&#x20;y&#x20;expedientes'>Estructura y expedientes</option>
                                 <option value='Portal&#x20;del&#x20;empleado'>Portal del empleado</option>
                                 <option value='Encuesta&#x20;de&#x20;clima&#x20;&#x20;organizacional'>Encuesta de clima  organizacional</option>
                                 <option value='Psicometr&iacute;a&#x20;por&#x20;competencias'>Psicometr&iacute;a por competencias</option>
                                 <option value='Mapeo&#x20;de&#x20;talento'>Mapeo de talento</option>
                                 <option value='Reclutamiento&#x20;y&#x20;permanencia'>Reclutamiento y permanencia</option>
                                 <option value='Evaluaci&oacute;n&#x20;360&deg;'>Evaluaci&oacute;n 360&deg;</option>
                                 <option value='Evaluaci&oacute;n&#x20;de&#x20;desempe&ntilde;o'>Evaluaci&oacute;n de desempe&ntilde;o</option>
                                 <option value='Adecuaci&oacute;n&#x20;puesto&#x2f;persona'>Adecuaci&oacute;n puesto&#x2f;persona</option>
                                 <option value='9box'>9box</option>
                                 <option value='Plan&#x20;de&#x20;carrera&#x20;y&#x20;sucesi&oacute;n'>Plan de carrera y sucesi&oacute;n</option>
                               </select>

                                Mensaje<br/><textarea id='Description' name='Description' placeholder="" class="form-control" maxlength='32000'>&nbsp;</textarea>
                            </div>
                            <input type='submit' id='formsubmit' class='formsubmit btn btn-success mb-5' value='<?=lang('Solicitar Demo')?>' title='<?=lang('Solicitar Demo')?>'>

                            <script>
                               var mndFileds=new Array('Company','Last Name','Email','Phone','LEADCF1');
                               var fldLangVal=new Array('Empresa','Nombre','Correo empresarial','Celular','Puesto');
                                             var name='';
                                             var email='';
                              function validateEmail()
                              {
                                             var emailFld = document.querySelectorAll('[ftype=email]');
                                             var i;
                                             for (i = 0; i < emailFld.length; i++)
                                             {
                                                             var emailVal = emailFld[i].value;
                                                             if((emailVal.replace(/^\s+|\s+$/g, '')).length!=0 )
                                                             {
                                                                             var atpos=emailVal.indexOf('@');
                                                                             var dotpos=emailVal.lastIndexOf('.');
                                                                             if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailVal.length)
                                                                             {
                                                                                             alert('Please enter a valid email address. ');
                                                                                             emailFld[i].focus();
                                                                                             return false;
                                                                             }
                                                             }
                                             }
                                             return true;
                              }

                               function checkMandatory3876226000001843007() {
                                             for(i=0;i<mndFileds.length;i++) {
                                               var fieldObj=document.forms['WebToLeads3876226000001843007'][mndFileds[i]];
                                               if(fieldObj) {
                                                             if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                                                             if(fieldObj.type =='file')
                                                                             {
                                                                              alert('Please select a file to upload.');
                                                                              fieldObj.focus();
                                                                              return false;
                                                                             }
                                                             alert(fldLangVal[i] +' está vacio.');
                                                              fieldObj.focus();
                                                              return false;
                                                             }  else if(fieldObj.nodeName=='SELECT') {
                                                             if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                                                                             alert(fldLangVal[i] +' cannot be none.');
                                                                             fieldObj.focus();
                                                                             return false;
                                                                }
                                                             } else if(fieldObj.type =='checkbox'){
                                                             if(fieldObj.checked == false){
                                                                             alert('Please accept  '+fldLangVal[i]);
                                                                             fieldObj.focus();
                                                                             return false;
                                                                }
                                                              }
                                                              try {
                                                                  if(fieldObj.name == 'Last Name') {
                                                                             name = fieldObj.value;
                                                                }
                                                             } catch (e) {}
                                                 }
                                             }
                                             if(!validateEmail()){return false;}

                              }

                              function tooltipShow(el){
                                              var tooltip = el.nextElementSibling;
                                              var tooltipDisplay = tooltip.style.display;
                                              if(tooltipDisplay == 'none'){
                                                             var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                                                             for(i=0; i<allTooltip.length; i++){
                                                                             allTooltip[i].style.display='none';
                                                             }
                                                             tooltip.style.display = 'block';
                                              }else{
                                                             tooltip.style.display='none';
                                              }
                              }
                              </script>
                        </form>
                    </div>


                    </div>
                    <p class="text-center"><?=lang('sol_demo_text09')?></p>
                    <div class="row text-center mb-3">
                      <div class="col-4 d-flex align-items-center text-center">
                        <img class="img-fluid" src="images/clientes/soriana.jpg" width="135px">
                      </div>
                      <div class="col-4 d-flex align-items-center text-center"><img class="img-fluid" src="images/clientes/farmacias_ahorro.jpg" width="95px" /></div>
                      <div class="col-4 d-flex align-items-center text-center"><img class="img-fluid" src="images/clientes/banorte.jpg" width="136px"></div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>
</div>


