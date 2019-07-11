<section id="testimonials">
      <div class="container">
        <div class="title-section text-center">
          <h2>Este es el éxito de los nuestros</h2>
          <p>Nuestra comunidad ha logrado un verdadero cambio en sus vidas.</p>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div
              id="myCarousel"
              class="carousel slide carousel-testimonials"
              data-ride="carousel"
              data-interval="false"
            >
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
              <?php 
                $i=1;
                $argsBanner = array( 'post_type' => 'testimonials', 
                'showposts' => 3,  );  
          
                $Banners = new WP_Query($argsBanner);   
                if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post();  
                    $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
                    $url = wp_get_attachment_url( $post_thumbnail_id);
              ?>                
                <div class="item <?php if($i == 1) echo 'active'; ?>">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <img
                        class="img-responsive"
                        src="<?php echo $url ?>"
                        alt="<?php the_title(); ?>"
                      />
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="text-testimonial">
                        <p class="testomonials-carousel-reviewer text-center">
                          <?php the_title(); ?>
                        </p>
                        <p class="testomonials-carousel-description">
                          <?php the_content(); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php $i++; endwhile; endif; ?>

              </div>
              <!-- Left and right controls -->
              <a
                class="left carousel-control"
                href="#myCarousel"
                data-slide="prev"
              >
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="right carousel-control"
                href="#myCarousel"
                data-slide="next"
              >
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <a class="insta-testimonial-item" href="">
              <div class="insta-poster-description">
                <p>
                  “No pares cuando estés cansado, para cuando hayas terminado”🦍
                  •. En mi vida me habría imaginado la posibilidad de meterme
                  tanto en algo que me cambiaría radicalmente... Esa fuerza de
                  voluntad que tuve hace 2 años ha convertido una obligación en
                  una pasión! 🔥 • ¿Porqué entrenas, que quieres lograr?
                  @guillemonz .<br /><br />#powerbuilding #gorilamode
                </p>
              </div>
              <div class="insta-poster-transition">
                <img
                  class="img-responsive slide-testimonial-img"
                  src="<?php echo get_stylesheet_directory_uri() ?>/images/insta-testimonial-001.png"
                  alt=""
                />
                <img
                  class="img-responsive slide-testimonial-img2"
                  src="<?php echo get_stylesheet_directory_uri() ?>/images/insta-testimonial-001-b.png"
                  alt=""
                />
              </div>
              <div class="insta-poster-meta">
                <img
                  class="icon-instagram"
                  src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-instagram.svg"
                  alt=""
                />
                <p>@guillemonz</p>
              </div>
            </a>
          </div>
        </div>
      </div>
</section>