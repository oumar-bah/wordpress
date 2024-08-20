<?php
/**
 * Block Styles
 *
 * @package toy_store_fse
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function toy_store_fse_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'toy-store-fse-padding-0',
				'label' => esc_html__( 'No Padding', 'toy-store-fse' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'toy-store-fse-post-author-card',
				'label' => esc_html__( 'Theme Style', 'toy-store-fse' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'toy-store-fse-button',
				'label'        => esc_html__( 'Plain', 'toy-store-fse' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'toy-store-fse-post-comments',
				'label'        => esc_html__( 'Theme Style', 'toy-store-fse' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'toy-store-fse-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'toy-store-fse' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'toy-store-fse-wp-table',
				'label'        => esc_html__( 'Theme Style', 'toy-store-fse' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'toy-store-fse-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'toy-store-fse' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'toy-store-fse-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'toy-store-fse' ),
			)
		);
	}
	add_action( 'init', 'toy_store_fse_register_block_styles' );
}
