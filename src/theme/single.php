<?php get_header(); ?>

<!-- site-content page template-->
<main role="main">
	<div class="site-content single">
		<div class="contents">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					if ( get_post_format() == false ) {
						get_template_part( 'content', 'single' );
					} else {
						get_template_part( 'content', get_post_format() );
					}
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
