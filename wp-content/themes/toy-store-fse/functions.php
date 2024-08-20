<?php
/**
 * Toy Store FSE functions and definitions
 *
 * @package toy_store_fse
 * @since 1.0
 */

if ( ! function_exists( 'toy_store_fse_support' ) ) :
	function toy_store_fse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'toy_store_fse_support' );

if ( ! function_exists( 'toy_store_fse_styles' ) ) :
	function toy_store_fse_styles() {
		// Register theme stylesheet.
		$toy_store_fse_theme_version = wp_get_theme()->get( 'Version' );

		$toy_store_fse_version_string = is_string( $toy_store_fse_theme_version ) ? $toy_store_fse_theme_version : false;
		wp_enqueue_style(
			'toy-store-fse-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$toy_store_fse_version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'toy_store_fse_styles' );

/* Theme Credit link */
define('TOY_STORE_FSE_BUY_NOW',__('https://www.cretathemes.com/products/toys-wordpress-theme','toy-store-fse'));
define('TOY_STORE_FSE_PRO_DEMO',__('https://pattern.cretathemes.com/toy-store-fse/','toy-store-fse'));
define('TOY_STORE_FSE_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/toy-store-fse/','toy-store-fse'));
define('TOY_STORE_FSE_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/toy-store-fse/','toy-store-fse'));
define('TOY_STORE_FSE_SUPPORT',__('https://wordpress.org/support/theme/toy-store-fse','toy-store-fse'));
define('TOY_STORE_FSE_REVIEW',__('https://wordpress.org/support/theme/toy-store-fse/reviews/#new-post','toy-store-fse'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// TGM plugin
require get_template_directory() . '/inc/tgm-plugin/plugin-activation.php';


// Add Getstart admin notice
function toy_store_fse_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'toy_store_fse_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_toy-store-fse-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing Toy Store FSE Theme!', 'toy-store-fse'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=toy-store-fse-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'toy-store-fse'); ?></a> <a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'toy-store-fse'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?toy_store_fse_admin_notice=1"><?php esc_html_e( 'Dismiss', 'toy-store-fse' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'toy_store_fse_admin_notice' );

if( ! function_exists( 'toy_store_fse_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function toy_store_fse_update_admin_notice(){
    if ( isset( $_GET['toy_store_fse_admin_notice'] ) && $_GET['toy_store_fse_admin_notice'] = '1' ) {
        update_option( 'toy_store_fse_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'toy_store_fse_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'toy_store_fse_getstart_setup_options');
function toy_store_fse_getstart_setup_options () {
    update_option('toy_store_fse_admin_notice', FALSE );
}