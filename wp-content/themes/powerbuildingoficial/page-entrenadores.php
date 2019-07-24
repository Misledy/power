 <?php  get_header(); ?>

<section id="trainers-content">

    <div class="container">

        <div class="title-page text-left">
            <h3>Elije a tu Entrenador</h3>
        </div> 

            <div role="tabpanel">
              <div class="row grid-filter-content">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12">
                   <ul class="nav nav-tabs navbar-right" role="tablist">

                      <li role="presentation" class="active"><a href="#tab-todos" data-toggle="tab" role="tab" aria-controls="tab2">Todos</a></li>
                      
                      <li role="presentation"><a href="#tab-hombre" data-toggle="tab" role="tab" aria-controls="tab3">Hombre</a></li>
                      
                      <li role="presentation"><a href="#tab-mujer" data-toggle="tab" role="tab" aria-controls="tab4">Mujer</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <form class="navbar-form navbar-right search-trainer">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar Entrenador...">
                      </div>
                      <button type="submit" class="btn btn-default"><img src="images/icons/icon-search.svg" alt=""></button>
                    </form>
                  </div>
              </div>
                    <div id="tabContent1" class="tab-content">                     
                    
                     <div role="tabpanel" class="tab-pane fade in active" id="tab-todos">
                         <div class="row content-todos">
                         <?php
                           $argsBanner = array( 'post_type' => 'entrenador',  ); 
                           $Banners = new WP_Query($argsBanner);   
                           if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post();  
                               $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
                               $url = wp_get_attachment_url( $post_thumbnail_id);
                         ?>                             
                             <div class="col-md-5 col-sm-3 col-xs-4 no-padding">
                                <div class="trainer-item-page">
                                     <a href="<?php echo the_permalink() ?>">
                                     
                                         <img class="img-responsive" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
                                         <h4 class="name-trainer-item-page"><?php the_title(); ?></h4>
                                     
                                     </a>
                                </div>
                             </div>
                         <?php $i++; endwhile; endif; ?>                             

                         </div>
                     </div>
                     
                      
                     <div role="tabpanel" class="tab-pane fade" id="tab-hombre">

                      <div class="row content-hombre">

                        <?php
                        $argsBanner = array( 'post_type' => 'entrenador', 'category_name' => 'hombre',  ); 
                        $Banners = new WP_Query($argsBanner);   
                        if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post();  
                            $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
                            $url = wp_get_attachment_url( $post_thumbnail_id);
                        ?>                             

                        <div class="col-md-5 col-sm-3 col-xs-4 no-padding">
                            <div class="trainer-item-page">
                                 <a href="<?php echo the_permalink() ?>">
                                 
                                     <img class="img-responsive" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
                                     <h4 class="name-trainer-item-page"><?php the_title(); ?></h4>
                                 
                                 </a>
                            </div>
                        </div>
                        <?php $i++; endwhile; endif; ?> 
                        </div>
                     </div>
                    
                     <div role="tabpanel" class="tab-pane fade" id="tab-mujer">

                      <div class="row content-mujer">
                        <?php
                        $argsBanner = array( 'post_type' => 'entrenador', 'category_name' => 'mujer',  ); 
                        $Banners = new WP_Query($argsBanner);   
                        if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post();  
                            $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
                            $url = wp_get_attachment_url( $post_thumbnail_id);
                        ?> 
                          <div class="col-md-5 col-sm-3 col-xs-4 no-padding">
                              <div class="trainer-item-page">
                                   <a href="<?php echo the_permalink() ?>">
                                   
                                       <img class="img-responsive" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
                                       <h4 class="name-trainer-item-page"><?php the_title(); ?></h4>
                                   
                                   </a>
                              </div>
                          </div>
                        <?php $i++; endwhile; endif; ?>
                      </div>
                     </div>
                    </div>
              </div>

    </div>

</section>
<!-- ***********************SECTION WORKMODE*************************** -->
<?php  get_template_part('sections/workmode'); ?>

<?php  get_footer(); ?>