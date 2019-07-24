<section class="categories ">
    <div class=" container padding-top-bottom">
      <div class="mark-water">
        <h1>Categorias
        </h1>
        <p class="text-water">Nuestras categorias</p>
      </div>
      <div class="multiple-categories wow fadeInUp">
       <?php $args = array(

            'orderby' => 'slug',
            'order' => 'ASC'
            );
            $product_categories = get_terms('product_cat', $args);

            foreach ($product_categories as $product_category) { ?>
                      
                    <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                          $images = wp_get_attachment_image_src($thumbnail_id, 'medium'); ?>

            <div class="slick-category">
              <a href="<?php echo $url_category = get_term_link( $product_category ) ?>" class="item-category" , style="background-image: url(<?php echo $images[0]; ?>)">
                <div class="name-category">
                  <p><?php echo $product_category->name; ?></p>
                </div>
              </a>
            </div>
          <?php

              }
            ?>
        </div>
      </div>
  </section>