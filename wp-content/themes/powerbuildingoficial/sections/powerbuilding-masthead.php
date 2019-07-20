<section id="powerbuilding-masthead">
      <div class="container">
        <div class="flush">
          <div class="row">
          <?php
            global $wpdb;  
 
            $result_activar_votacion = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'activar_activar_votacion'"); 
            foreach($result_activar_votacion as $r)
            {
                   $activar_votacion = $r->option_value;
            } 

            $result_fecha_votacion = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'activar_fecha_votacion'"); 
            foreach($result_fecha_votacion as $r)
            {
                    $fecha_votacion = $r->option_value;
            }  
          $fecha_votacion= "$fecha_votacion 11:59 PM";

          if ($activar_votacion == 'Si') { 
   
        ?>            
            <div class="col-md-12" style="background:#000;padding: 20px;color: #fff;">VOTA A LA MEJOR FOTO DE LA SEMANA <a href="<?php bloginfo('url') ?>/index.php/votaciones" class="buttom-gradient-red" style="padding-top:05px; padding-left:15px; padding-right:15px; padding-bottom:05px">Votar </a></div>
        <?php  }  ?>           
            <div class="col-md-4 masthead-plans">
              <a href="">
                <div class="text">
                  <h5 class="heading">
                    +200 <br />
                    <span class="white-color"
                      >Planes de entrenamiento y nutrición efectivos.</span
                    >
                  </h5>
                  <h2 class="demi">Pierde grasa y gana músculo rápido.</h2>
                </div>
              </a>
            </div>

            <div class="col-md-4 masthead-plans2">
              <a href="">
                <div class="text">
                  <h5 class="heading">
                    +4mil <br />
                    <span class="white-color"
                      >Personas confían en nosotros y en nuestro equipo.</span
                    >
                  </h5>
                  <h2 class="demi">Somos @powerbuilding_oficial</h2>
                </div>
              </a>
            </div>

            <div class="col-md-4 masthead-button">
              <a href="" class="buttom-gradient-red2 text-center">
                <h2>ASESORÍA PERSONALIZADA</h2>
                <span
                  class="glyphicon glyphicon-chevron-right wobble-horizontal"
                ></span>
              </a>
            </div>
          </div>
        </div>
      </div>
</section>