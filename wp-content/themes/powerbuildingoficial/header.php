<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device=width, initial-scale=1">

<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="">

<title></title>
<?php wp_head(); ?>
<? $user = get_current_user_id();?>
</head>
<body>

    <header class="header">
      <nav class="header navbar navbar-inverse navbar-fixed-top " id="deskTopHeader">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6 col-xs-10">
              <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo get_home_url() ?>"><img class="normalize-svg"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/production/logo-powerbuilding-oficial.svg" alt="Go to Home Page" /></a>
              </div>
            </div>
  
            <div class="menu-util col-lg-4 col-md-5 col-sm-6 col-xs-2">            	
              <ul class="nav navbar-nav navbar-right dropdown">
              <!-- usuario --> 
               <?php 
                  if (is_user_logged_in()){
                  $usuario = wp_get_current_user();
                ?>              
                <li class="menu-login hidden-xs dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><?php echo $usuario -> user_login ?> <b class="caret"></b><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-login.svg" alt="" width="20" height="auto" ></a>
                    <ul class="dropdown-menu" style="background-color: #272727">
                        <li><a href="#" style="background: #272727;padding-top: 10px;padding-bottom: 10px;">Mi Cuenta</a></li>
                        <li class="divider"></li> 
                        <li><a href="<?php echo wp_logout_url( home_url()); ?>" style="background: #272727;padding-top: 10px;padding-bottom: 10px;">Cerrar sesión</a></li>
                    </ul>
                </li>    
               <?php
                }else{
               ?>		
		        <li class="menu-login hidden-xs "><a href="<?php echo get_home_url() ?>/ingresar-registrarse">Iniciar Sesión <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-login.svg" alt="" width="20" height="auto" ></a>
                </li>
		       <?php } ?>                   
              <!-- usuario end -->
                <li class="menu-search hidden-xs"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-search-withe.svg" alt="" width="18" height="auto"> </a></li>
                <li class="menu-bag"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-bag.svg" alt="" width="16" height="auto"> </a></li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="clearfix"></div>
  
        <div class="headerlinksbar">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div id="menulinks" class="navbar-collapse collapse">
                  <div class="navigation_menu">
                    <div>
                      <ul class="nav navbar-nav ">
                        <li class="custom-coach buttom-gradient-red">
                          <a href="<?php echo get_home_url() ?>/entrenadores" class="">ENTRENADOR PERSONALIZADO</a>
                        </li>
                      </ul>
                    </div>
                    <div class="inner-menu">
                      <div class="navLinks">
                        <ul class="nav navbar-nav navbar-right main-nav">
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_home_url() ?>">INICIO</a>
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
                   <li class="menu-home"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-home.svg" alt="" width="18" height="auto"> </a></li>
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
                  <li class="menu-login"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/services/icon-personalized-advice.svg" alt="" width="16" height="auto" ></a></li>
                </ul>
          </div>
  
          <div class="col-xs-5">
              <ul class="nav navbar-nav navbar-right text-center">
                  <li class="menu-login"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-login.svg" alt="" width="21" height="auto"></a></li>
                </ul>
          </div>
  
          <div class="col-xs-5">
              <ul class="nav navbar-nav navbar-right text-center">
                  <li class="menu-search"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/icon-search-withe.svg" alt="" width="18" height="auto"> </a></li>
                </ul>
          </div>
  
          </div>
          </div>
        
        </div>
        </nav>
  
    </header>
