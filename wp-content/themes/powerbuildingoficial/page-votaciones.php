<?php  get_header(); ?>
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
<section id="hero">
        <div
          id="carousel"
          class="carousel slide carousel-fade carousel-voting"
          data-ride="carousel"
        >
          <!-- Carousel items -->
          <div class="carousel-inner">
            <?php 
               $argsBanner = array( 'post_type' => 'banner',  'showposts' => 3,  );  
                $i = 1;
               $Banners = new WP_Query($argsBanner);   
               if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->        the_post();   
                   $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
                   $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>          
            <div
              class="<?php if($i == 1) echo 'active'; ?> item bk-voting"
              style="background-image: url(<?php echo $url ?>)"
            >
              <div class="carousel-caption">
                <p class="text-hashtag-white">
                  <?php the_title(); ?>
                </p>
                <?php the_content(); ?>
              </div>
            </div>
            <?php $i++; endwhile; endif; ?>

            <!-- Left and right controls -->
      <a class="left carousel-control" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
</section>
<section id="voting">

    <div class="container">
            <div class="title-section text-center">
                    <h2>El mejor cambio de la semana</h2>
                    <h6 class="text-link">El post con más votos será publicado en nuestra cuenta de Instagram <a href="https://www.instagram.com/powerbuilding_oficial/" target="blank">@powerbuilding_oficial</a></h6> 
            </div> 
            <?php
                  if(is_user_logged_in() == NULL)
                  { ?>
                    <div class="btn-page-upload-post text-center">
                      <a href="<?php bloginfo('url') ?>/index.php/publicacion">AÑADIR PUBLICACIÓN +</a>
                    </div>
            <?php }  ?>


             <div class="count-down text-center">
                <p>Las votaciones finalizan en:</p>
                <div class="counter text-center">

                    <div class="days">
                        <span id="days"></span>
                        <p>DIAS</p>
                    </div>

                    <div class="hours">
                            <span id="hours"></span>
                            <p>HRS.</p>
                    </div>

                    <div class="minutes">
                            <span id="minutes"></span>
                            <p>MIN.</p>
                    </div>

                    <div class="seconds">
                            <span id="seconds"></span>
                            <p>SEC.</p>
                    </div>

                </div>

            </div>

            <div class="voting-posts-content">
              <div class="row">

                <!-- Post 1 -->
            <?php 
              $count=0;
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'siteurl'"); 
              foreach($result_link as $r)
              {
                $link = $r->option_value;
              }            
              $link_file = $link."/wp-content/uploads/";
              $argspublicacion = array( 'post_type' => 'publicacions',  'showposts' => 8,  );  
 
              $publicacions = new WP_Query($argspublicacion);   
              if ($publicacions->have_posts()) : while($publicacions->have_posts() ) : $publicacions-> the_post();   
                   $post_thumbnail_id = get_post_thumbnail_id( $publicacions->id );  
                   $url = wp_get_attachment_url( $post_thumbnail_id);
                   $count=+1;
              // one

              $id_p = get_the_ID();
              global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = 'publicacion' and post_id = '$id_p'"); 
              foreach($result_link as $r)
              {
                      $id = $r->meta_value;
              } 
              // two   
              $result_link2 = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = '_wp_attached_file' and post_id = '$id'"); 
              foreach($result_link2 as $r)
              {
                      $url_file2 = $link_file.'/'.$r->meta_value;
              }
              
            ?>                              
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <article class="voting-post-item">

                     <header class="header-post-item">
                  <div class="photo-profile">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/photo-profile.png" alt="" width="50" height="50">
                  </div>
                  <div class="name-profile">
                    <p>Samuel Jara</p>
                  </div>
                     </header>

                     <div class="content-img-post-item">
                       <img class="img-responsive" src="<?php echo $url_file2;?>" alt="">
                     </div>

                     <footer class="footer-post-item">

                     <div class="number-votes">
                        <p><span> 1263</span> votos</p> 
                     </div>

                     <div class="btn-vote">
                       <a href=""> <img style="margin-bottom: 5px;" src="<?php echo get_template_directory_uri();?>/images/icons/icon-like.svg" alt="" /> VOTAR</a>
                       <?php the_content();?>
                     </div>

                    </footer>
                     
                   </article>
               </div>
            <?php if ($count<='4') { ?>
              <!-- PUBLICIDAD-->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/publicidad-posts.jpg" alt="" style="margin-top: 30px;">
              </div>              
            <?php  } ?>  
            <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>


            </div>

            </div>
    </div>

</section>
 <?php } ?>
 <?php if ($activar_votacion == '') { ?>

<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://www.desarrolloweb.com">
            <section class="error-404 not-found text-center " id="voting" style="margin-bottom: 200px">
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Esa página no se puede encontrar.', 'apk' ); ?></h1>
                </header><!-- .page-header -->
                <div class="page-content">
                    <p><?php _e( 'Parece que no se encontró nada en esta ubicación. Tal vez intente una búsqueda?', 'apk' ); ?>fdsfsdfsdfsdffdsfdf</p>


                </div><!-- .page-content -->
            </section><!-- .error-404 -->
->
 <?php   } ?>         
<!--****************************** Cronómetro ******************************-->

<script>

var end = new Date('<?php echo $fecha_votacion; ?>');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('days').innerHTML = 'EXPIRED!';
            document.getElementById('hours').innerHTML = 'EXPIRED!';
            document.getElementById('minutes').innerHTML = 'EXPIRED!';
            document.getElementById('seconds').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;

    }

    timer = setInterval(showRemaining, 1000);
</script>
<?php  get_footer(); ?>
