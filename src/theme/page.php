<?php get_header(); ?>

<!-- site-content -->
<main role="main">
	<div class="site-content page">
		<div class="contents">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', 'page' );
				endwhile;
				else :
					get_template_part( 'content', 'none' );
				endif;
			?>
		</div>
	</div>
</main>
<!-- /site-content -->

<?php get_footer(); ?>
