<!DOCTYPE html>
<html>

<!-- by clickwebexpress.co.uk  -->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<!--METADATA-->
<title><?php wp_title(' | ', true,'right'); ?></title>
<meta name="description" content="Website description...">

<!-- STYLESHEET -->
<link href=<?php bloginfo( 'stylesheet_url' ); ?> rel="stylesheet">

<?php wp_head(); ?>

</head>

<body role="document">

<header>
<!-- NAVBAR -->
<div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div class="navbar-collapse collapse">

			 <?php
				wp_nav_menu( array(
					'menu'              => 'primary',
                	'theme_location'    => 'primary',
                	'depth'             => 2,
                	'menu_class'        => 'nav navbar-nav',
                	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                	'walker'            => new wp_bootstrap_navwalker					())
            	);
        	?>
        
        </div>
        <!--/.nav-collapse -->
      </div>
    </div></header>
    
<!-- START OF MAIN CONTENT -->
<div class="container" id="container">  