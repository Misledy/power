<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width, initial-scale=1">
<title></title>
<?php wp_head(); ?>
<? $user = get_current_user_id();?>
</head>
<body>

<header class="header">
<nav class="header navbar navbar-inverse navbar-fixed-top " id="deskTopHeader">
	<div class="container">
	<div class="row">
	<div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menulinks" aria-expanded="false" aria-controls="deskTopHeader">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo get_home_url() ?>"><img class="normalize-svg" src="<?php echo get_stylesheet_directory_uri() ?> /images/production/logo-powerbuilding-oficial.svg" alt="Go to Home Page"></a>
			</div>
	</div>
	
	<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
		
		<ul class="nav navbar-nav navbar-right">
          <?php 
          if (is_user_logged_in()){
            $usuario = wp_get_current_user();
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Usuario: <?php echo $usuario -> user_login ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#">Panel de control</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo wp_logout_url( home_url()); ?>">Cerrar sesión</a>
            </li>                        
            <?php
          }else{
            ?>		
		<li><a href="<?php bloginfo('url') ?>/index.php/ingresar-registrarse">Ingresar / Registrase</a></li>
		<?php } ?>
		<li><a href="#">Buscar</a></li>
		<li><a href="#">Carrito</a></li>
		</ul>
      
	</div>
	</div>
	</div>
	
	<div class="clearfix"></div>
	
	<div class="headerlinksbar">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<div  id="menulinks" class="navbar-collapse collapse">
	<div class="navigation_menu">
					<div>
						<ul class="nav navbar-nav ">
							<li class="custom-coach buttom-gradient-red"><a class="">ENTRENADOR PERSONALIZADO</a></li>
						</ul>
					</div>
                        <div class="inner-menu">
                            <div class="navLinks">
								<ul class="nav navbar-nav navbar-right main-nav">
										 
        <li class="nav-item active">
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
</header>