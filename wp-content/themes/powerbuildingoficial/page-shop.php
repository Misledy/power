<?php get_header(); ?>

<section class="shop-section space-s">
        <h1 class="titulos cssanimation leFadeIn sequence" data-wow-iteration="5" data-wow-duration="0.15s">Most Requested Companions</h1>
        <div class="container">
            <div class="row">
                <?php $args = array( 'post_type' => 'product' ); ?>
                 <?php $loop = new WP_Query( $args ); ?>

                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                   
                <div class="col-lg-3 col-sm-6 animated wow fadeInLeft" data-wow-duration="3s">
                <a href="<?php the_permalink() ?>">
                    <div class="shop-item">
                        <div class="mask-shop"></div>
                        <!-- <i class='bx bxs-show'></i> -->
                        <?php the_post_thumbnail('medium'); ?>

                        <div class="content-doll add-card">
                            <p class="mr-auto"><?php the_title(); ?></p>
                         <div class="price-firts">
                         <p class="ml-auto"><?php echo $product->get_price_html(); ?></p>
                         </div>
                            <!-- <span>158 cm</span> -->
                        </div>

                    </div>
                    </a>
                </div>
            
                
                  <?php endwhile; ?>
              
            </div>

        </div>
    </section>

<?php get_footer(); ?>

