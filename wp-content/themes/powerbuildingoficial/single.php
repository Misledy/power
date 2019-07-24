<?php get_header(); ?>
            <?php
              foreach((get_the_category()) as $category) {
                   $cat=$category->cat_name . '';
            }
             if ($cat == 'Mujer' OR $cat == 'Hombre') {
           	  get_template_part( 'content_single', get_post_format() );
             }
            ?>
<?php get_footer(); ?>