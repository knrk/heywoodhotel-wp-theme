<!-- blog index content -->
<article class="grid-item post-block <?php if ( has_post_thumbnail() ) {
?>has-thumbnail <?php } ?>" data-aos="fade-up">
	<!-- post-thumbnail -->
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
	</div>
	<!-- /post-thumbnail -->

	<!-- inner-content -->
	<div class="inner-content">
		<p class="post-info">
			<span class="date">
				<?php the_time( 'F j, Y' ); ?>
			</span>
			<span>|</span>
			<span class="author">
				<?php 
					if (get_user_meta($post->post_author, 'hotel_role', true) != ""){
						echo "by ";
						the_author();
						echo ", ";
						get_user_meta($post->post_author, 'hotel_role', true); 
					} else {
						echo "by ";
						the_author();
					}
				?>
			</span>
		</p>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<p class="post-content">
			<?php echo get_the_excerpt(); ?>

			<?php
			$categories = get_the_category();
			$separator  = ', ';
			$output     = '';

			if ( $categories ) { ?>
				<div class="tags">
					<?php
						foreach ( $categories as $category ) {
							$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separator;
						}
						echo trim( $output, $separator );
					?>
				</div>
			<?php } ?>
		</p>

		<?php if ( is_search() or is_archive() ) { ?>
			<p class="excerpt content">
				<a href="<?php the_permalink(); ?>" class="button">Read More</a>
			</p>
		<?php
		} else {
			if ( $post->post_excerpt ) {
					?>
					<p class="excerpt">
						<?php echo get_the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="button">Read More</a>
					</p>
					<?php
			} else {
			}
		}
		?>
	</div>
	<!-- /inner-content -->
</article>
