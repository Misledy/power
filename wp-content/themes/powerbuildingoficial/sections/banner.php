<section id="hero">

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    
    <!-- Carousel items -->
    <div class="carousel-inner">

    <?php 
      $i=1;
      $argsBanner = array( 'post_type' => 'banner', 
      'showposts' => 3,  );  

      $Banners = new WP_Query($argsBanner);   
      if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post();  
          $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
          $url = wp_get_attachment_url( $post_thumbnail_id);
    ?> 

        <div class="item <?php if($i == 1) echo 'active'; ?> bk1" style="background-image: url(<?php echo $url ?>)">
		
            <div class="carousel-caption">
				        <p class="text-hashtag-white">
                  <?php the_title(); ?>
                </p>
                <?php the_content(); ?>
            </div>
	    	</div>
          
    <?php $i++; endwhile; endif; ?>

    </div>

    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

</div>

</section>