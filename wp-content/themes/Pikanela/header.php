<!DOCTYPE html>
<html>

<head>
 <title><?php wp_title('|', true, 'right'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Poppins" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/medias.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/product.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
  <?php wp_head(); ?>
</head>

<body>
   <?php $current_file =  $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
   $url_page = 'localhost/Pikanela-w/';
           ?> 
  <header class="header-index">

    <div class="container flex-container <?php if ($current_file != $url_page){ echo 'navbar-product'; }?>">
      <div class="box-left-social">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </div>
      <a href="<?php bloginfo('url'); ?>/index.php">
        <?php if ($current_file != $url_page):?>
          <img class="logo-initial" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-black.png" alt="">
          <?php else: ?>
          <img class="logo-initial" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="">
        <?php endif?>
      
      </a>
      <div class="box-right-social" style="display: flex; margin-right: 15px; ">
        <form action="<?php echo esc_url( $action_link ); ?>" id="frm_search_form" method="get" class="searchform">      
           <div id="custom-search">
              <input type="text" name="s" class="search-query" placeholder="Buscar" />
              <button type="button"> <i class='fa fa-search' <?php if ($current_file == $url_page){ echo 'style="color: white !important"'; }?>></i></button>
              
            </div>
         </form> 
        <a href="<?php bloginfo('url'); ?>/cart"><i <?php if ($current_file != $url_page){ echo 'style="color: #333333!important"'; }?> class="fa fa-shopping-bag" aria-hidden="true"></i></a>
      </div>
    </div>
    <nav class=" navbar navbar-expand-xl navbar-light container <?php if ($current_file != $url_page){ echo 'navbar-product'; }?>">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Calzado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Bolsos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Sombreros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Accesorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sale">Ropa de playa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/about">¿Quienes Somos?</a>
          </li>
          <li class="nav-item">
            <div class="box-right-social box-right-mobile">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <a href="<?php bloginfo('url'); ?>/cart"><i class="fa fa-shopping-bag" <?php if ($current_file != $url_page){ echo 'style="color: #333333!important"'; }?> aria-hidden="true"></i></a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <nav class=" fixed-2 navbar navbar-expand-xl navbar-light">
    <div class="fixed-container container">
      <a href="<?php bloginfo('url'); ?>/index.php">
        <img class="logo-fixed" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white2.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-flex" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Calzado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Bolsos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Sombreros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Accesorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sale">Ropa de playa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url'); ?>/about">¿Quienes Somos?</a>
          </li>
        </ul>
        <i class="fa fa-search search-fixed" aria-hidden="true"></i>
      </div>
    </div>
  </nav>