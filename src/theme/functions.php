<?php
function heywood_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	// wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'heywood_resources' );

// Customize excerpt word count length
function custom_excerpt_length() {
	return 40;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Theme setup
function heywood_setup() {
	// Handle Titles
	add_theme_support( 'title-tag' );

	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 720, 720, true );
	add_image_size( 'square-thumbnail', 80, 80, true );
	add_image_size( 'banner-image', 1024, 1024, true );
}

add_action( 'after_setup_theme', 'heywood_setup' );

show_admin_bar( false );

// Checks if there are any posts in the results
function is_search_has_results() {
	return 0 != $GLOBALS['wp_query']->found_posts;
}

// Add Widget Areas
function heywood_widgets() {
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'heywood_widgets' );

function heywood_custom_menu() {
	register_nav_menus(array(
		'navigation-menu' => __('Navigation Menu'),
		'navigation-rooms' => __('Rooms')
	));
}

add_action('init', 'heywood_custom_menu');

function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false, 'menu_class' => 'list-unstyled' ) );
}

add_shortcode('menu', 'print_menu_shortcode');

add_filter('body_class','body_class_section');

function body_class_section($classes) {
	global $wpdb, $post;
	if (is_page()) {
		if ($post->post_parent) {
			$parent = end(get_post_ancestors($current_page_id));
		} else {
			$parent = $post->ID;
		}
		$post_data = get_post($parent, ARRAY_A);
		$classes[] = $post_data['post_name'];
	}
	return $classes;
}

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );

add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Heywood Hotel role</h3>

	<table class="form-table">

		<tr>
			<th><label for="hotel-role">Role in Hotel</label></th>

			<td>
				<input type="text" name="hotel-role" id="hotel-role" value="<?php echo esc_attr( get_the_author_meta( 'hotel_role', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your role in hotel.</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );

add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'hotel_role', $_POST['hotel-role'] );
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );