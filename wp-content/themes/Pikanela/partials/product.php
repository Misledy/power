 <section class="product">
    <div class="container padding-top-bottom">
      <div class="mark-water">
        <h1>Comprar ahora
        </h1>
        <p class="text-water">Nuevos Productos</p>
      </div>

      <div class="multiple-product wow bounceInRight ">
<?php $args = array(
              'post_type' => 'product',
              'posts_per_page' => 5);
        $loop = new WP_Query($args);
        ?>
        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
        <div class="product-flex ">
          <div class="product-item">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="mask-product">
              <a href="<?php the_permalink(); ?>" class="btn-principal">VER MÁS</a>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="product-new">
              <p>New</p>
            </div>
            <div class="description-product">
              <p class="title-product"> <?php the_title(); ?></p>
            </div>
          </div>
        </div>
<?php endwhile; ?>
       
      </div>
    </div>
  </section>