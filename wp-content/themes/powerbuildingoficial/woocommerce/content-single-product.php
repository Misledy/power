<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */



defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */

// get_template_part('partials/header-2'); 
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
?>





  <section  id="product-<?php the_ID(); ?>" class="tab-img details-pro" style="padding-top: 100px;">
  
    <div class="container padding-top-bottom">
      <div class="row">
        <div class="col-lg-7">
          
                <?php
          /**
           * Hook: woocommerce_before_single_product_summary.
           *
           * @hooked woocommerce_show_product_sale_flash - 10
           * @hooked woocommerce_show_product_images - 20
           */
          do_action( 'woocommerce_before_single_product_summary' );
          ?>

        </div>
        <div class="col-lg-5">
          <div class="container">
            <div class="description-product">
              <p class="title-product"> <?php the_title(); ?></p>
              <h4 class="price-product"><?php echo $product->get_price_html(); ?></h4>
              <p class="text-product">Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris
                consequat ornare feugiat.</p>
            </div>
            <div class="row variation-none">
           
               <?php
              /**
               * Hook: woocommerce_single_product_summary.
               *
               * @hooked woocommerce_template_single_title - 5
               * @hooked woocommerce_template_single_rating - 10
               * @hooked woocommerce_template_single_price - 10
               * @hooked woocommerce_template_single_excerpt - 20
               * @hooked woocommerce_template_single_add_to_cart - 30
               * @hooked woocommerce_template_single_meta - 40
               * @hooked woocommerce_template_single_sharing - 50
               * @hooked WC_Structured_Data::generate_product_data() - 60
               */
              do_action( 'woocommerce_single_product_summary' );
              ?>
            </div>
          </div>
          <div class="info-extra">
            <a class="btn btn-info-extra" data-toggle="collapse" href="#collapseExample" role="button"
              aria-expanded="true" aria-controls="collapseExample">
              Descripción
              <i class="fa fa-minus" aria-hidden="true"></i>
            </a>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <div class="info-extra">
            <a class="btn btn-info-extra" data-toggle="collapse" href="#collapseExample2" role="button"
              aria-expanded="true" aria-controls="collapseExample2">
              Información Adicional
              <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
            <div class="collapse show" id="collapseExample2">
              <div class="card card-body">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="related">
    <div class="container padding-top-bottom">
      <div class="mark-water">
        <h1>Productos Destacados
        </h1>
        <p class="text-water">Comprar ahora</p>
      </div>
      <div class="multiple-product">
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
d
<style>
  .variation-none .product_title {
    display: none;
  }
</style>

<style>
  #sidebar{
    display: none;;
  }
</style>

