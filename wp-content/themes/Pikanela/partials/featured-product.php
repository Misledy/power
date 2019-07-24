
  <section class="blog padding-top-bottom">
    <div class="mark-water">
      <h1>Productos Destacados</h1>
      </h1>
      <p class="text-water">Los más vendidos</p>
    </div>
    <div class="container">
      <div class="row wow fadeIn">
        <?php $args = array(
              'post_type' => 'product',
              'posts_per_page' => 3);
        $loop = new WP_Query($args);
        ?>
        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>

        <div class="col-lg-4 col-sm-6 col-md-4 item-blog ">
          <div class="img-blog-1" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <p><?php the_content(); ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>