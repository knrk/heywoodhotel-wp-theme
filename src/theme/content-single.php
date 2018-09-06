<?php 
/*
	Template Name: Blog
*/
?>
<article class="post-single">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail">
			<?php the_post_thumbnail('full'); ?>
		</a>
		<?php echo do_shortcode('[shariff services="facebook|twitter|instagram|mailto"]'); ?>
	<?php endif; ?>

	<h1 class="single-title"><?php the_title(); ?></h1>

	<p class="post-info">
		<span class="date">
			<?php the_time( 'F j, Y' ); ?>
		</span>
		<span>|</span>
		<span class="author">
			by <?php the_author(); ?>, <?php echo get_user_meta($post->post_author, 'hotel_role', true); ?>
		</span>
	</p>

	<div class="post-inner-content">
		<?php the_content(); ?>
	</div>
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;
	?>
</article>