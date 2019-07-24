 <?php  get_header(); ?>

      <div class="headerlinksbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="menulinks" class="navbar-collapse collapse">
                <div class="navigation_menu">
                  <div>
                    <ul class="nav navbar-nav ">
                      <li class="custom-coach buttom-gradient-red">
                        <a href="entrenadores.html" class="">ENTRENADOR PERSONALIZADO</a>
                      </li>
                    </ul>
                  </div>
                  <div class="inner-menu">
                    <div class="navLinks">
                      <ul class="nav navbar-nav navbar-right main-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="index.html">INICIO</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="#servicios">POWERBUILDING OFICIAL</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="#schedules">TIENDA</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="#precios">EVENTOS</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="#blog">BLOG</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <nav class="navbar navbar-default navbar-fixed-bottom visible-xs">
      <div class="container">
      
        <div class="navbar-header">
          <div class="row">

        <div class="col-xs-5">
              <ul class="nav navbar-nav navbar-right text-center">
                 <li class="menu-home"><a href="#"> <img src="images/icons/icon-home.svg" alt="" width="18" height="auto"> </a></li>
             </ul>
        </div>
      

        <div class="col-xs-5 text-center">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menulinks"
            aria-expanded="false" aria-controls="deskTopHeader">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        

        <div class="col-xs-5">
            <ul class="nav navbar-nav navbar-right text-center">
                <li class="menu-login"><a href="#"><img src="images/services/icon-personalized-advice.svg" alt="" width="16" height="auto" ></a></li>
              </ul>
        </div>

        <div class="col-xs-5">
            <ul class="nav navbar-nav navbar-right text-center">
                <li class="menu-login"><a href="#"><img src="images/icons/icon-login.svg" alt="" width="21" height="auto"></a></li>
              </ul>
        </div>

        <div class="col-xs-5">
            <ul class="nav navbar-nav navbar-right text-center">
                <li class="menu-search"><a href="#"> <img src="images/icons/icon-search-withe.svg" alt="" width="18" height="auto"> </a></li>
              </ul>
        </div>

        </div>
        </div>
      
      </div>
      </nav>

  </header>



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
                                     <a href="">
                                     
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
                                 <a href="">
                                 
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
                                   <a href="">
                                   
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