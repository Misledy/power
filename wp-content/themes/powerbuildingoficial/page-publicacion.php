<?php  get_header(); ?>
<section id="hero">
        <div
          id="carousel"
          class="carousel slide carousel-fade carousel-voting"
          data-ride="carousel"
        >
          <!-- Carousel items -->
          <div class="carousel-inner">
            <?php 
               $argsBanner = array( 'post_type' => 'banner',  'showposts' => 3,  );  
                $i = 1;
               $Banners = new WP_Query($argsBanner);   
               if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->        the_post();   
                   $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
                   $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>          
            <div
              class="<?php if($i == 1) echo 'active'; ?> item bk-voting"
              style="background-image: url(<?php echo $url ?>)"
            >
              <div class="carousel-caption">
                <p class="text-hashtag-white">
                  <?php the_title(); ?>
                </p>
                <?php the_content(); ?>
              </div>
            </div>
            <?php $i++; endwhile; endif; ?>

            <!-- Left and right controls -->
      <a class="left carousel-control" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
</section>
  
<section id="voting">
    <div class="container"> 
              <div class="row">                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#" method="POST" name="register-form" class="register_form">
                      <h2 style="margin-bottom:20px">!Sube tus archivos!</h2>
                       <?php echo do_shortcode('[formidable id=10]');  ?>
                    </form>
                </div>
              </div>        

    </div>
</section>

<?php  get_footer(); ?>
