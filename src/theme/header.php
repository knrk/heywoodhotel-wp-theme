<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/8bca4bb0-90b5-40cd-9646-32cd405f6aa4.css"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>

<div class="container">
	<header class="clearfix">
		<div class="header-logo" title="Heywood Hotel, Austin, TX"></div>
		<?php
		wp_nav_menu(array(
			'menu_id' => 'menu',
			'theme_location' => 'navigation-menu')); 
		?>
	</header>