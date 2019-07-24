     <section class="banner">
    <div class="carousel-banner">
    <?php $args = array( 'post_type' => 'banner'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="item-slick"style="width: 100% !important; background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="text-banner">
          <h1 class="wow rotateInDownLeft">LEATHER BAGS</h1>
          <h2 class="wow rotateInUpRight" data-wow-duration="1.5s">New Collection 2018</h2>
          <button class="btn-principal wow rotateIn" data-wow-duration="2s">shop now</button>
        </div>
      </div>
   <?php endwhile; ?>

    </div>
  </section>