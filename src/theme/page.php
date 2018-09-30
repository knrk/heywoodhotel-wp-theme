<?php get_header(); ?>

<!-- site-content page template-->
<main role="main">
	<div class="site-content">
		<div class="contents">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', 'page' ); // load contents into content-page.php
				endwhile;
				else :
					get_template_part( 'content', 'none' ); // load content-none.php
				endif;
			?>
		</div>
	</div>
</main>
<!-- /site-content -->

<?php get_footer(); ?>
