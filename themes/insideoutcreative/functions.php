<?php

function alpine_ranch_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri() );

wp_enqueue_style('nav', get_theme_file_uri('/css/sections/nav.css'));
wp_enqueue_style('hero', get_theme_file_uri('/css/sections/hero.css'));
wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
wp_enqueue_style('photo-gallery', get_theme_file_uri('/css/sections/photo-gallery.css'));
wp_enqueue_style('body', get_theme_file_uri('/css/sections/body.css'));
wp_enqueue_style('footer', get_theme_file_uri('/css/sections/footer.css'));
wp_enqueue_style('sidebar', get_theme_file_uri('/css/sections/sidebar.css'));
wp_enqueue_style('woocommerce-custom', get_theme_file_uri('/css/sections/woocommerce.css'));

if(is_page_template('templates/about.php')){
	wp_enqueue_style('about-custom', get_theme_file_uri('/css/sections/about.css'));
}

wp_enqueue_style('fonts', get_theme_file_uri('/css/elements/fonts.css'));
wp_enqueue_style('btn', get_theme_file_uri('/css/elements/btn.css'));
wp_enqueue_style('img', get_theme_file_uri('/css/elements/img.css'));
// fonts
wp_enqueue_style('blair-itc', get_theme_file_uri('/blair-itc-font/stylesheet.css'));
wp_enqueue_style('proxima-nova', get_theme_file_uri('/proxima-nova/proxima-nova.css'));
wp_enqueue_style('aspira-font', get_theme_file_uri('/aspira-font/aspira-font.css'));
// wp_enqueue_style('adorns', '//use.typekit.net/ejh0lok.css');

}
add_action('wp_enqueue_scripts', 'alpine_ranch_stylesheets');
// for footer
function alpine_ranch_stylesheets_footer() {
	wp_enqueue_style('style-footer', get_theme_file_uri('/css/style-footer.css'));
	// owl carousel
	wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
	wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
	// wp_enqueue_style('lightbox-css', get_theme_file_uri('/lightbox/lightbox.min.css'));
	// wp_enqueue_script('font-awesome', '//use.fontawesome.com/fff80caa08.js');

	// owl carousel
	wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
	wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
	wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));
	// wp_enqueue_script('lightbox-min-js', get_theme_file_uri('/lightbox/lightbox.min.js'));
	// wp_enqueue_script('lightbox-js', get_theme_file_uri('/lightbox/lightbox.js'));
	// aos
    wp_enqueue_script('aos-js', get_theme_file_uri('/aos/aos.js'));
    wp_enqueue_script('aos-custom-js', get_theme_file_uri('/aos/aos-custom.js'));
    wp_enqueue_style('aos-css', get_theme_file_uri('/aos/aos.css'));
    // general
	wp_enqueue_script('nav-js', get_theme_file_uri('/js/nav.js'));
	}
	
add_action('get_footer', 'alpine_ranch_stylesheets_footer');

function alpine_ranch_menus() {
 register_nav_menus( array(
   'primary' => __( 'Primary Menu' )));
register_nav_menus( array(
'secondary' => __( 'Secondary Menu' )));
 register_nav_menu('new-menu',__( 'Footer Links' ));
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'alpine_ranch_menus');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
}

add_action('after_setup_theme',function() {
    add_theme_support('woocommerce');
});
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

if(class_exists('WooCommerce')){
    require get_template_directory() . '/inc/wc-modifications.php';
}

// add_filter('show_admin_bar', '__return_false');

add_action('woocommerce_after_single_product_summary', 'nutritional_value', 9);
// add_action('woocommerce_before_single_product_summary', 'nutritional_value', 21);

function nutritional_value() {
	echo '<div class="pt-5 pb-5 position-relative" style="clear:both;">';
	echo '<div class="container">';
	echo '<div class="row">';
	if(have_rows('nutritional_value_content')): while(have_rows('nutritional_value_content')): the_row();
				echo '<div class="col-md-4">';
				echo '<h2 class="">Nutritional Value</h2>';
				echo get_sub_field('content');
				echo '</div>';
			endwhile; endif;
	if(have_rows('ingredients_list_content')): while(have_rows('ingredients_list_content')): the_row();
				echo '<div class="col-md-4">';
				echo '<h2 class="">Ingredients List</h2>';
				echo get_sub_field('content');
				echo '</div>';
			endwhile; endif;
			echo '</div>';
		echo '</div>';
		echo '</div>';
}

/*Base URL shorcode*/
add_shortcode( 'base_url', 'baseurl_shortcode' );
function baseurl_shortcode( $atts ) {

    return site_url();
	// [base_url]

}

// add_action('woocommerce_after_single_product_summary', 'ingredients_list', 9);
// // add_action('woocommerce_before_single_product_summary', 'ingredients_list', 21);

// function ingredients_list() {
// 	if(have_rows('ingredients_list_content')): while(have_rows('ingredients_list_content')): the_row();
// 		echo '<div class="pt-5 pb-5 position-relative" style="clear:both;">';
// 		echo '<h2 class="">Ingredients List</h2>';
// 		echo get_sub_field('content');
// 		echo '</div>';
// 	endwhile; endif;
// }