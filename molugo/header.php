<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory') ?>/assets/images/favicon.ico" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/reset.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/flatpickr.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css">
	</head>
	<body>
		
	<div class="top-bar">
		<div class="wrapper">
			<a href="javascript:;" class="btn btn-nav pc-h"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-16.png" alt="icon nav"></a>
			<div class="logo"><a href="/" title="index"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo.jpg" alt="logo"></a></div>
			
		    <div class="nav">
				<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 
								'theme_location' => 'primary', 
								'container' => 'nav',
								'menu_id' => 'menu-nav',
								'depth' => 2,
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
						
						) );
					} 
				?> 

			</div>
		
				<a href="#" title="btn date-plugin" class="btn date-plugin flatpickr">
					
					<input class="date" type="hidden" data-input>
					
					<img src="<?php bloginfo('template_directory') ?>/assets/images/icon-1.png" alt="icon date-plugin" class="icon-calendar" data-toggle>
					<div id="calendar-box"></div>
				</a>
				<div class="search-input"><input type="text" id="key_search" placeholder="Search"></div>

				<a href="#" title="btn-search" class="btn search mb-h"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-2.png" alt="icon search"></a>
				<a href="#" title="btn-search" class="btn search pc-h"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-17.png" alt="icon search"></a>
				<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="hidden" name="s" id="s">
				</form>
		</div>
	</div>
	

	
