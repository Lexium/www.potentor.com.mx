<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<section class="generic_page">
    <div class="container mt-3 py-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="aqua_color"><?=lang('PI_text01');?></h5>
                <h2><?=lang('PI_text02');?></h2>
                <p class="mb-4"><?=lang('PI_text03');?></p>
                <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
            </div>
            <div class="col-md-6 characteristics">
                <ul>
                    <li class="first">
                        <h5><?=lang('PI_text04');?></h5>
                        <p><?=lang('PI_text05');?></p>
                    </li>
                    <li class="first special">
                        <h5><?=lang('PI_text06');?></h5>
                        <p><?=lang('PI_text07');?></p>
                    </li>
                    <li class="first special">
                        <h5><?=lang('PI_text08');?></h5>
                        <p><?=lang('PI_text09');?></p>
                    </li>
                    <li class="second">
                        <h5><?=lang('PI_text10');?></h5>
                        <p><?=lang('PI_text11');?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg_gray py-5">
        <div class="container">
            <h5 class="text-center"><?=lang('PI_text12');?></h5>
            <h4 class="text-center mb-5"><?=lang('PI_text13');?></h4>
            <div class="table_container">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><?=lang('Gestión de talento');?></td>
                            <td width="20%"><img src="images/ok_bullet_aqua.png"></td>
                            <td width="20%"><a href="<?php echo 'GDT_estructura_expediente.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Portal del empleado');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'CU_portal_del_empleado.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Encuesta de clima org');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'CU_clima_laboral.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Psic x Comp_1');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'PSI_psicometria_por_competencias.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Mapeo de talento');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'PSI_mapeo_de_talento.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('RECYPERM');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'PSI_reclutamiento_y_permanencia.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Eval 360')?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'DO_evaluacion360.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Eval desemp')?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'DO_evaluacion_del_desempeno.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Adec puesto/persona');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'PYR_adecuacion_puesto_persona.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('9box');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'PYR_9box.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                        <tr>
                            <td><?=lang('Plan carr y suc');?></td>
                            <td><img src="images/ok_bullet_aqua.png"></td>
                            <td><a href="<?php echo 'PYR_planes_de_carrera_sucesion.php'?>"><?=lang('ver mas');?></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <section class="b6_landing d-flex align-items-end mb-5">
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
</section>
<?php include 'generic_footer.php';?>