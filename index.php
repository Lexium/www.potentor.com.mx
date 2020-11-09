<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<!--<div class="modal fade sol_demo demo" id="solDEMO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-keyboard="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-body">
                <h3><?=lang('sol_demo_text01')?></h3>
                <h5 class="mb-4"><?=lang('sol_demo_text02')?></h5>
                <div id='crmWebToEntityForm'>
                    <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                    <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads3876226000001843007 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory3876226000001843007()' accept-charset='UTF-8'>
                        <input type='text' style='display:none;' name='xnQsjsdp' value='28962769f437d5b49ea22433900fa37ca3b8bf5f8b918fc1fe978d31087f847e'></input>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2e28a802a88a5c5c4396ad4991f3c305ab89ae25882ea6b6e3276d15f62ec894'></input>
                        <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
                        <input type='text' style='display:none;' name='returnURL' value='https://www.potentor.com.mx/gracias.php' > </input>


                        <div class="form-group" style="margin-bottom: 2rem;">

                            <input type='text' maxlength='80' name='Last Name' placeholder="Nombre" class="form-control mb-3" id="nameForm"></input>
                            <input type='text' maxlength='100' name='Company' placeholder="Empresa" class="form-control mb-3"></input>
                            <input type='text' maxlength='255' name='LEADCF1' placeholder="Puesto" class="form-control mb-3"></input>
                            <input type='text' maxlength='30' name='Mobile' placeholder="Celular" class="form-control mb-3"></input>
                            <input type='text' maxlength='100' name='Email' ftype='email' placeholder="Correo empresarial" class="form-control mb-3"></input>
                            <input type='text' maxlength='9'  name='No of Employees' placeholder="Número de empleados" class="form-control mb-3"></input>
                            Soluciones de inter&eacute;s<br/>
                            <select name='LEADCF3' class="custom-select mb-3" multiple>
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
                            Mensaje<br/><textarea maxlength='32000'  name='Description' placeholder="" class="form-control">&nbsp;</textarea>

                        </div>
                        <input class="btn btn-success mb-5" id='formsubmit' type='submit' value='<?=lang('Solicitar Demo')?>'  />

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
                              alert(fldLangVal[i] +' cannot be empty.');
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

                            document.getElementById('formsubmit').disabled=true;
                          }
                        </script>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>-->
<section class="b1_landing">
    <div class="row pl-5 d-flex align-items-center">
        <div class="col-12 col-md-6 left-space">
            <h1>
             <?=lang('ini_text39');?>
            </h1>
            <h3 class="mb-5"><?=lang('ini_text40');?></h3>
            <!--<form class="form-inline mb-3" method="post" action="enviar_email.php">
                <input type="hidden" name="_val1">
                <input type="hidden" name="_val2">
                <div class="form-group mb-2">
                    <input type="email" placeholder="* <?=lang('sol_demo_text_mail')?>" class="form-control form-control-lg" name="email" required >
                </div>
                <button type="submit" class="btn btn-success btn-lg mb-2 ml-2"><?=lang('Solicitar Demo')?></button>
            </form>-->
            <a class="btn btn-success btn-lg" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
        </div>
        <div class="col-md-6 right-space"></div>
    </div>
</section>
<section class="b2_landing py-5">
    <div class="container">
        <ul class="row">
            <li class="d-flex align-items-center"><img class="img-fluid" src="images/clientes/soriana.jpg"></li>
            <li class="d-flex align-items-center"><img class="img-fluid" src="images/clientes/farmacias_ahorro.jpg"></li>
            <li class="d-flex align-items-center"><img class="img-fluid" src="images/clientes/axtel.jpg"></li>
            <li class="d-flex align-items-center"><img class="img-fluid" src="images/clientes/banorte.jpg"></li>
            <li class="d-flex align-items-center"><img class="img-fluid" src="images/clientes/gis.jpg"></li>
        </ul>
    </div>
</section>
<section class="b3_landing py-5 bg_gray">
    <div class="container">
        <h3 class="text-center pb-5"><?=lang('ini_text01');?></h3>
        <div class="row">
            <div class="col-lg-8">
                <img class="img-fluid" src="images/img_b3_landing.png">
            </div>
            <div class="col-lg-4">
                <h5><?=lang('ini_text01_1');?></h5>
                <p><?=lang('ini_text01_2');?></p>
                <h5><?=lang('ini_text01_3');?></h5>
                <p><?=lang('ini_text01_4');?></p>
                <h5><?=lang('ini_text01_5');?></h5>
                <p><?=lang('ini_text01_6');?></p>
                <h5><?=lang('ini_text01_7');?></h5>
                <p><?=lang('ini_text01_8');?></p>
            </div>
        </div>
    </div>
</section>
<section class="b4_landing container py-5">
    <ul class="nav nav-tabs nav-fill mb-5">
      <li class="nav-item">
        <a class="nav-link active"  data-toggle="tab" href="#home" ><?=lang('ini_text03');?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1"><?=lang('ini_text05');?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  data-toggle="tab" href="#menu2"><?=lang('ini_text07');?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  data-toggle="tab" href="#menu3"><?=lang('ini_text09');?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link"  data-toggle="tab" href="#menu4"><?=lang('ini_text11');?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link"  data-toggle="tab" href="#menu5"><?=lang('ini_text13');?></a>
      </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div class="row">
                <div class="col-md-6">
                    <a href="#!" data-toggle="modal" data-target=".bd-example-modal-lg"><img class="img-fluid" src="images/nuestra-suite.png"></a>
                </div>
                <div class="col-md-6">
                    <?=lang('ini_text04');?>
                    <ul class="row blue_color">
                        <li class="col-md-6"><a href="<?php echo 'GDT_estructura_expediente.php'?>"><?=lang('Estructura y expedientes');?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'DO_evaluacion360.php'?>"><?=lang('Eval 360')?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'CU_portal_del_empleado.php'?>"><?=lang('Portal del empleado');?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'DO_evaluacion_del_desempeno.php'?>"><?=lang('Eval desemp')?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'CU_clima_laboral.php'?>"><?=lang('Encuesta de clima org');?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'PYR_adecuacion_puesto_persona.php'?>"><?=lang('Adec puesto/persona')?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'PSI_psicometria_por_competencias.php'?>"><?=lang('Psic x Comp_1');?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'PYR_9box.php'?>"><?=lang('9box')?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'PSI_mapeo_de_talento.php'?>"><?=lang('Mapeo de talento');?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'PYR_planes_de_carrera_sucesion.php'?>"><?=lang('Plan carr y suc')?></a></li>
                        <li class="col-md-6"><a href="<?php echo 'PSI_reclutamiento_y_permanencia.php'?>"><?=lang('RECYPERM');?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="menu1">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="images/gestion.png"></div>
                <div class="col-md-6">
                    <?=lang('ini_text06');?>
                    <a href="<?php echo 'GDT_estructura_expediente.php'?>"><?=lang('Estructura y expedientes');?></a>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="menu2">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="images/portal-empleado.png" /></div>
                <div class="col-md-6">
                    <?=lang('ini_text08');?>
                    <a href="<?php echo 'CU_portal_del_empleado.php'?>"><?=lang('Portal del empleado');?></a>
                    <a href="<?php echo 'CU_clima_laboral.php'?>"><?=lang('Encuesta de clima org');?></a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="menu3">
             <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="images/potencial.png"></div>
                <div class="col-md-6">
                    <?=lang('ini_text10');?>
                    <a href="<?php echo 'PSI_psicometria_por_competencias.php'?>"><?=lang('Psic x Comp_1');?></a>
                    <a href="<?php echo 'PSI_mapeo_de_talento.php'?>"><?=lang('Mapeo de talento');?></a>
                    <a href="<?php echo 'PSI_reclutamiento_y_permanencia.php'?>"><?=lang('RECYPERM');?></a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="menu4">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="images/eva_360.png"></div>
                <div class="col-md-6">
                    <?=lang('ini_text12');?>
                    <a href="<?php echo 'DO_evaluacion360.php'?>"><?=lang('Eval 360')?></a>
                    <a href="<?php echo 'DO_evaluacion_del_desempeno.php'?>"><?=lang('Eval desemp')?></a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="menu5">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="images/nivel-de-apego.png"></div>
                <div class="col-md-6">
                    <?=lang('ini_text14');?>
                    <a href="<?php echo 'PYR_adecuacion_puesto_persona.php'?>"><?=lang('Adec puesto/persona')?></a>
                    <a href="<?php echo 'PYR_9box.php'?>"><?=lang('9box')?></a>
                    <a href="<?php echo 'PYR_planes_de_carrera_sucesion.php'?>"><?=lang('Plan carr y suc')?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="b5_landing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5 text-center left">
                <h3><?=lang('ini_text15');?></h3>
            </div>
            <div class="col-md-6 py-5">
                <?=lang('ini_text15_a');?>
                <a href="<?php echo 'PSI_psicometria_por_competencias.php'?>" class="btn btn-success mb-5"><?=lang('ini_text16');?></a>
                <h5 class="mb-3"><?=lang('ini_text16_a');?></h5>
                <a href="https://potentorlite.zohocommerce.com/" class="btn btn-purple" target="_blank"><?=lang('ini_text16_b');?> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<section class="b6_landing d-flex align-items-end">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 mb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p><?=lang('TES_BAN_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/magda_gonzalez_banorte.png" />
                                <div class="title">
                                    <?=lang('TES_BAN_NAME');?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_SOR_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/karen_garcia_soriana.png"/>
                                <div class="title">
                                    <?=lang('TES_SOR_NAME');?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_LOC_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/angela_verduzco_lockton.png"/>
                                <div class="title"><?=lang('TES_LOC_NAME');?></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_AXT_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/mariana_morales_axtel.png"/>
                                <div class="title"><?=lang('TES_AXT_NAME');?></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_ALIS_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/ilse_lobo_alisFood.png"/>
                                <div class="title"><?=lang('TES_ALIS_NAME');?></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_WIN_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/diana_arreola_WIN.png"/>
                                <div class="title"><?=lang('TES_WIN_NAME');?></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_MK_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/salvador_luna_Marykay.png"/>
                                <div class="title"><?=lang('TES_MK_NAME');?></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p><?=lang('TES_CEM_DES');?></p>
                            <div class="name_container">
                                <img class="img-fluid" src="images/carlos_alberto_herrera_cemix.png"/>
                                <div class="title"><?=lang('TES_CEM_NAME');?></div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="b7_landing bg_gray py-5">
     <div class="container">
        <h3 class="text-center mb-5"><?=lang('ini_text25');?></h3>
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 left">
                <div class="description d-flex align-items-center">
                    <div class="icon_image">
                        <img src="images/saas.png" style="max-width: 64px;" />
                    </div>
                    <div class="content">
                        <?=lang('ini_text26');?>
                    </div>

                </div>
                <div class="description d-flex align-items-center">
                    <div class="icon_image">
                        <img src="images/me-gusta.png"/>
                    </div>
                    <div class="content">
                        <?=lang('ini_text27');?>
                    </div>

                </div>
                <div class="description d-flex align-items-center">
                    <div class="icon_image">
                        <img src="images/rayo.png" style="max-width: 64px;"/>
                    </div>
                    <div class="content">
                        <?=lang('ini_text28');?>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 central text-center">
                <img src="images/iphone_image.png" />
            </div>
            <div class="col-lg-4 col-md-6 right">
                <div class="left_content">
                    <div class="description d-flex align-items-center">
                        <div class="icon_image">
                            <img src="images/saas.png" style="max-width: 64px;"/>
                        </div>
                        <div class="content">
                            <?=lang('ini_text29');?>
                        </div>

                    </div>
                    <div class="description d-flex align-items-center">
                        <div class="icon_image">
                            <img src="images/me-gusta.png"/>
                        </div>
                        <div class="content">
                            <?=lang('ini_text30');?>
                        </div>

                    </div>
                    <div class="description d-flex align-items-center">
                        <div class="icon_image">
                            <img src="images/rayo.png" style="max-width: 64px;"/>
                        </div>
                        <div class="content">
                            <?=lang('ini_text31');?>
                        </div>
                    </div>
                </div>
                <div class="description d-flex align-items-center">
                    <div class="icon_image">
                        <img src="images/pruebas.png"/>
                    </div>
                    <div class="content">
                        <?=lang('ini_text32');?>
                    </div>

                </div>
                <div class="description d-flex align-items-center">
                    <div class="icon_image">
                        <img src="images/ux.png"/>
                    </div>
                    <div class="content">
                        <?=lang('ini_text33');?>
                    </div>

                </div>
                <div class="description d-flex align-items-center">
                    <div class="icon_image">
                        <img src="images/ui.png"/>
                    </div>
                    <div class="content">
                        <?=lang('ini_text34');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="b8_landing py-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 col-6">
                <span class="orange_color">6</span>
                <?=lang('ini_text35');?>
            </div>
            <div class="col-md-3 col-6">
                <span class="pink_color">+3M</span>
                <?=lang('ini_text36');?>
            </div>
            <div class="col-md-3 col-6">
                <span class="green_color">+100</span>
                <?=lang('ini_text37');?>
            </div>
            <div class="col-md-3 col-6">
                <span class="blue_color">+1M</span>
                <?=lang('ini_text38');?>
            </div>
        </div>
    </div>
</section>


<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-body">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/fYnKfCTbh-c?start=7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php if( !isset($_SESSION['popup']) ){?>
<!---Modal de promoción-->
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="content_promo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-5 text-center">
                            <img src="images/img_promo.png" class="img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <h1>potentor</h1>
                            <p><?=lang('promo_text1');?></p>
                            <h3><?=lang('promo_text2');?></h3>
                            <a href="#" class="btn btn_orange mb-5 gotoForm"><?=lang('promo_text3');?></a>
                            <div class="restrictions mb-3">
                                <?=lang('promo_text4');?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--- Termina Modal de promoción-->


<script type="text/javascript">
$(document).ready(function()
{
    //$('#solDEMO').modal('show');
    $('.modal-backdrop').removeClass("modal-backdrop");
    $("#mostrarmodal").modal({
        show:true,
        "backdrop":true
    });

    $(".gotoForm").click(function(){
        $("#mostrarmodal").modal('hide');
        $("#solDemo_int").modal('show');
        $("#nameForm").focus();

    });

});
</script>
<?php };?>

<?php include 'footer.php' ?>