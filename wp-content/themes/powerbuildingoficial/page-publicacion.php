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
                       <?php echo do_shortcode('[formidable id=7]');  ?>
                      <input type="submit"  class="custom-coach buttom-gradient-red" id="register-button" value="Adjuntar Archivo" >
                    </form>
                </div>
              </div>        

    </div>
    <div id="countdown"></div>
<script>
var end = new Date('12/17/2100 9:30 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' dias, ';
        document.getElementById('countdown').innerHTML += hours + ' horas, ';
        document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
        document.getElementById('countdown').innerHTML += seconds + ' segundos';
    }

    timer = setInterval(showRemaining, 1000);
</script>
<?php echo do_shortcode("[display-frm-data id=2 filter=limited]"); ?>
<?php

//Función que permite obtener el post_id de un Give Form creado a través de Formidable Pro
         global $wpdb;
         $first_field = $_POST['item_meta'][25]; //change 25 to the ID of the field in your first form
         $user = $wpdb->get_var($wpdb->prepare("SELECT user_id FROM ". $wpdb->prefix ."frm_items WHERE id=%d", $entry_id));
   $entry_ids = $wpdb->get_col("Select id from ". $wpdb->prefix ."frm_items where form_id='112' and user_id=". $user);//Change 112 to the ID of the second form
         foreach ($entry_ids as $e)
             $wpdb->update( $wpdb->prefix .'frm_item_metas', array('meta_value' => $first_field), array('item_id' => $e, 'field_id' => '6422'));//Change 6422 to the ID of the field to be updated automatically in your second form
  
?>
</section>

<?php  get_footer(); ?>
