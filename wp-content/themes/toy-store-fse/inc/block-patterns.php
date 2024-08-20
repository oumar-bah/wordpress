<?php
/**
 * Block Patterns
 *
 * @package toy_store_fse
 * @since 1.0
 */

function toy_store_fse_register_block_patterns() {
	$block_pattern_categories = array(
		'toy-store-fse' => array( 'label' => esc_html__( 'Toy Store FSE', 'toy-store-fse' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'toy-store-fse' ) ),
	);

	$block_pattern_categories = apply_filters( 'toy_store_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'toy_store_fse_register_block_patterns', 9 );