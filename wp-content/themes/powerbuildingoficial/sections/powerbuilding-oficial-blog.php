<section id="powerbuilding-oficial-blog">
  <div class="blog">
    <div class="container">
      <div class="title-section text-left">
        <h2>Mantente al día con nuestro blog</h2>
      </div>

      <div class="items-blog">
        <div class="row">

                 <?php
                   $args =array(
                   'posts_per_page' => 3,
	                 'category_name' => 'Powerbuilding, Bodybuilding',
                    );
				   
		               $entradas = new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                   ?>
                   
          <div class="col-md-4 item-blog">
            <div class="imagen-blog">
              <a href="<?php the_permalink();  ?>">
                <?php the_post_thumbnail('', array('class' => 'img-responsive'));  ?>
              </a>
            </div>

            <div class="content-item-blog">
              <a href="<?php the_permalink();  ?>"><h4><?php the_title(); ?></h4></a>
              <div class="details-item-blog row">
                <div class="col-md-4">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-user.svg" />
                  <a href=""> <?php the_author(); ?></a>
                </div>
                <div class="col-md-4">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-clock.svg" />
                  <a style="cursor:default;" href=""> <?php the_time(get_option('date_format')); ?> </a>
                </div>
                <div class="col-md-4" style="display:flex;">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-file.svg" />
                  <div class="list-style-none"> <?php the_category(); ?></div>
                </div>
              </div>
              <br />
              <div class="descrition-item-blog">
              <?php the_excerpt('<p>','</p>');  ?>
              </div>
            </div>
          </div>

          <?php
				   endwhile; wp_reset_postdata();
          ?>

        </div>
      </div>

      <div class="btn-go-to-the-blog text-center">
        <a href="" class="go-to-the-blog">LEER MÁS EN EL BLOG</a>
      </div>
    </div>
  </div>
</section>