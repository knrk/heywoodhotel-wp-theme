<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
<main role="main">
	<div class="site-content">
        <div class="contents">
            <?php 
            $temp = $wp_query; $wp_query= null;
            $wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
            while ($wp_query->have_posts()) : $wp_query->the_post(); 

            $post = get_post(); 
            
            ?>


            <div class="post-block">
                <div class="content">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="thumbnail-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                    <p class="post-info">
                        <span class="date">
                            <?php the_time( 'F j, Y' ); ?>
                        </span>
                        <span>|</span>
                        <span class="author">
                            by 
                            <?php the_author(); ?>, <?php echo get_user_meta($post->post_author, 'hotel_role', true); ?>
                        </span>
                    </p>
                    <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; ?>

            <?php /* if ($paged > 1) { ?>

            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
            </nav>

            <?php } else { ?>

            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            </nav>

            <?php } */ ?>

            <?php wp_reset_postdata(); ?>
	    </div>
    </div>
</main>
<?php get_footer(); ?>