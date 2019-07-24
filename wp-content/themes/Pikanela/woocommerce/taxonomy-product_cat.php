<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


$cat = $wp_query->get_queried_object();
get_header();
?>

 <section class="product" style="padding-top: 100px;">
    <div class="container padding-top-bottom">
      <div class="mark-water">
        <h1><?php echo $cat->name; ?>
        </h1>
        <p class="text-water">Nuevos Productos</p>
      </div>


      <div class="row">
      	
        <?php while (have_posts()) : the_post();  global $product; ?>
        <div class="product-flex col-md-4" style="padding-bottom: 20px;">
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
<?php get_footer(); ?>