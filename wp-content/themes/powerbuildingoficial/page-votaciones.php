<?php  get_header(); ?>
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
<!-- eliminar --> 
            <?php 
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'siteurl'"); 
              foreach($result_link as $r)
              {
                $link = $r->option_value;
              }            
              $link_file = $link."/wp-content/uploads/";
              $argspublicacion = array( 'post_type' => 'testimonials',  'showposts' => 3,  );  

              $publicacions = new WP_Query($argspublicacion);   
              if ($publicacions->have_posts()) : while($publicacions->have_posts() ) : $publicacions-> the_post();   
                   $post_thumbnail_id = get_post_thumbnail_id( $publicacions->id );  
                   $url = wp_get_attachment_url( $post_thumbnail_id);
             
              // one

              $id_p = get_the_ID();
              global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = 'publicacion' and post_id = '$id_p'"); 
              foreach($result_link as $r)
              {
                      $id = $r->meta_value;
                      echo $id;
              } 
              // two   
              $result_link2 = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = '_wp_attached_file' and post_id = '$id'"); 
              foreach($result_link2 as $r)
              {
                      $url_file2 = $link_file.'/'.$r->meta_value;
                      echo "<img src='$url_file2'>";
              }
              the_content();
            ?>
     
            <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
<!-- **************** -->
            <div class="btn-page-upload-post text-center">
                <a href="<?php bloginfo('url') ?>/index.php/publicacion">AÑADIR PUBLICACIÓN +</a>
            </div>

            <div class="count-down text-center">
                <p>Las votaciones finalizan en:</p>
                <?php echo do_shortcode("[activar_votar]"); ?>

            </div>

            <div class="voting-posts-content">
              <div class="row">

                <!-- Post 1 -->
            <?php 
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'siteurl'"); 
              foreach($result_link as $r)
              {
                $link = $r->option_value;
              }            
              $link_file = $link."/wp-content/uploads/";
              $argspublicacion = array( 'post_type' => 'testimonials',  'showposts' => 3,  );  

              $publicacions = new WP_Query($argspublicacion);   
              if ($publicacions->have_posts()) : while($publicacions->have_posts() ) : $publicacions-> the_post();   
                   $post_thumbnail_id = get_post_thumbnail_id( $publicacions->id );  
                   $url = wp_get_attachment_url( $post_thumbnail_id);
             
              // one

              $id_p = get_the_ID();
              global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = 'publicacion' and post_id = '$id_p'"); 
              foreach($result_link as $r)
              {
                      $id = $r->meta_value;
                      echo $id;
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
            <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
                <!-- Post 2 -->
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
                      <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/testimonial-1.png" alt="">
                    </div>

                    <footer class="footer-post-item">

                    <div class="number-votes">
                       <p><span> 1263</span> votos</p> 
                    </div>

                    <div class="btn-vote">
                      <a href=""> <img style="margin-bottom: 5px;" src="<?php echo get_template_directory_uri();?>/images/icons/icon-like.svg" alt="" /> VOTAR</a>
                    </div>

                   </footer>
                    
                  </article>
              </div>

                <!-- Post 3 -->
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
                      <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/testimonial-1.png" alt="">
                    </div>

                    <footer class="footer-post-item">

                    <div class="number-votes">
                       <p><span> 1263</span> votos</p> 
                    </div>

                    <div class="btn-vote">
                      <a href=""> <img style="margin-bottom: 5px;" src="<?php echo get_template_directory_uri();?>/images/icons/icon-like.svg" alt="" /> VOTAR</a>
                    </div>

                   </footer>
                    
                  </article>
              </div>

                <!-- Post 4 -->
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
                      <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/testimonial-1.png" alt="">
                    </div>

                    <footer class="footer-post-item">

                    <div class="number-votes">
                       <p><span> 1263</span> votos</p> 
                    </div>

                    <div class="btn-vote">
                      <a href=""> <img style="margin-bottom: 5px;" src="<?php echo get_template_directory_uri();?>/images/icons/icon-like.svg" alt="" /> VOTAR</a>
                    </div>

                   </footer>
                    
                  </article>
              </div>
 
              <!-- PUBLICIDAD-->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/publicidad-posts.jpg" alt="" style="margin-top: 30px;">
              </div>

              <!-- Post 1 -->
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
                      <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/testimonial-1.png" alt="">
                    </div>

                    <footer class="footer-post-item">

                    <div class="number-votes">
                       <p><span> 1263</span> votos</p> 
                    </div>

                    <div class="btn-vote">
                      <a href=""> <img style="margin-bottom: 5px;" src="<?php echo get_template_directory_uri();?>/images/icons/icon-like.svg" alt="" /> VOTAR</a>
                    </div>

                   </footer>
                    
                  </article>
              </div>

               <!-- Post 2 -->
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
                     <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/testimonial-1.png" alt="">
                   </div>

                   <footer class="footer-post-item">

                   <div class="number-votes">
                      <p><span> 1263</span> votos</p> 
                   </div>

                   <div class="btn-vote">
                     <a href=""> <img style="margin-bottom: 5px;" src="<?php echo get_template_directory_uri();?>/images/icons/icon-like.svg" alt="" /> VOTAR</a>
                   </div>

                  </footer>
                   
                 </article>
             </div>

            </div>

            </div>
    </div>

</section>

<?php  get_footer(); ?>
