<?php
$archivo_previo = __FILE__;
include 'lang/es.php';
include 'header.php' ?>
<section class="generic_page">
    <div class="bg_gray py-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-5"><?php lang('SP_text01');?></h2>
                    <p style="font-size:1.5rem;"><?php lang('SP_text02');?></p>
                    <a class="btn btn_orange" data-toggle="modal" data-target=".solDemo_int" ><?=lang('Solicitar Demo')?></a>
                </div>
                <div class="col-md-6" >
                    <img src="images/circulos_sobre_potentor.png" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 text-center vareli_group mb-3">
        <a href="https://www.grupovareli.com/" target="_blank"><img src="images/logo_vareli_gde.png" class="img-fluid mb-4"/></a>
        <h3 class="mb-5"><?php lang('SP_text03');?></h3>
        <div class="row companies d-flex align-items-center">
            <div class="col-6 col-sm-6 col-md"><a href="https://www.lexiumonline.com/" target="_blank"><img src="images/logo_lexium.png" class="img-fluid mb-3"/></a></div>
            <div class="col-6 col-sm-6 col-md"><a href="https://www.sidesports.com.mx/" target="_blank"><img src="images/logo_sidesports.png" class="img-fluid sides mb-3"/></a></div>
            <div class="col-6 col-sm-6 col-md"><a href="https://mulligans.com.mx/" target="_blank"><img src="images/logo_mulligans.png" class="img-fluid mb-3"/></a></div>
            <div class="col-6 col-sm-6 col-md"><a href="https://www.batbox.com.mx/" target="_blank"><img src="images/logo_batbox.png" class="img-fluid mb-3"/></a></div>
            <div class="col-6 col-sm-6 col-md"><a href="http://propertypr.com.mx/" target="_blank"><img src="images/logo_property.png" class="img-fluid property mb-3"/></a></div>
        </div>
        <div id="team">&nbsp;</div>
    </div>

    <div class="bg_gray py-5 text-center">
        <div class="container vareli_group">
            <h2 class="mb-3"><?php lang('SP_text04');?></h2>
            <div class="row team">
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/jose.png" class="img-fluid mb-3"/>
                    <h5>José Vargas</h5>
                    <p>CEO Grupo Vareli & Co-founder Potentor </p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/andrea.png" class="img-fluid mb-3"/>
                    <h5>Andrea Vargas</h5>
                    <p>CEO | Co-founder</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/laura.png" class="img-fluid mb-3"/>
                    <h5>Laura Elizondo</h5>
                    <p>CIO</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/miguel.png" class="img-fluid mb-3"/>
                    <h5>Juan Miguel Cruz</h5>
                    <p>Head of Sales</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/roberto.png" class="img-fluid mb-3"/>
                    <h5>Roberto Castillo</h5>
                    <p>Head of Account Management</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/eloy.png" class="img-fluid mb-3"/>
                    <h5>Eloy Marroquín</h5>
                    <p>Head of IT & Development</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/patricio.png" class="img-fluid mb-3"/>
                    <h5>Patricio Botello</h5>
                    <p>Sales Consultant</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/stephanie.png" class="img-fluid mb-3"/>
                    <h5>Stephanie Garza</h5>
                    <p>Digital Marketing</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/antonio.png" class="img-fluid mb-3"/>
                    <h5>Antonio Casillas</h5>
                    <p>Software Developer</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/paulette.png" class="img-fluid mb-3"/>
                    <h5>Paulette Cerecer</h5>
                    <p>Customer Success</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/daniel.png" class="img-fluid mb-3"/>
                    <h5>Daniel Torres</h5>
                    <p>Software Developer</p>
                </div>
                <div class="col-6 col-sm-4 col-md-4">
                    <img src="images/equipo/edgar.png" class="img-fluid mb-3"/>
                    <h5>Edgar Edel Ramirez Castañeda</h5>
                    <p>Software Developer</p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include 'generic_footer.php';?>