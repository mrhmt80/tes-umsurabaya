<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php is_front_page()? bloginfo('description'):wp_title();?></title>
    <link href="<?php bloginfo('template_url');?>/bs4/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  </head>
  <body>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md fixed-top navbar-custom shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">Praktikum UM SURABAYA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'container_class'   => '',
			'container_id'      => '',
			'menu_class'        => 'navbar-nav mr-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
          <form class="form-inline mt-2 mt-md-0" action="<?php echo home_url( '/' ); ?>">
            <input class="form-control mr-sm-2" type="text" name="s" id="s" placeholder="Cari" value="<?php if(is_search()){ echo get_search_query();} ?>" aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Cari</button>
          </form>
        </div>
        </div>
      </nav>
    </header>
    <!-- Memanggil Halaman Awal -->
    <main role="main" class="container">
    <?php
		 if(is_front_page()) 
		 	{
	?>
    <center>
      <h1><?php echo bloginfo('name');?></h1>
      <small><?php echo bloginfo('description');?></small>
     </center>
    <?php			
			}
	?>
    <div class="row">