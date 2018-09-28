<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-27114347-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');

		fbq('init', '205064539829223');
		fbq('track', "PageView");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=205064539829223&ev=PageView&noscript=1"/></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>

<div class="container">
	<header class="clearfix">
		<div class="header-logo" title="Heywood Hotel, Austin, TX"></div>
		<nav>
			<label for="show-menu" class="show-menu">Menu <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" /></label>
			<input type="checkbox" id="show-menu" role="button">
			<?php
			wp_nav_menu(array(
				'menu_id' => 'menu',
				'container' => false,
				'theme_location' => 'navigation-menu')); 
			?>
		</nav>
	</header>