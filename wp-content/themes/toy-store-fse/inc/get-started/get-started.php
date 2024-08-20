<?php
add_action( 'admin_menu', 'toy_store_fse_getting_started' );
function toy_store_fse_getting_started() {
	add_theme_page( esc_html__('Get Started', 'toy-store-fse'), esc_html__('Get Started', 'toy-store-fse'), 'edit_theme_options', 'toy-store-fse-guide-page', 'toy_store_fse_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function toy_store_fse_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'toy_store_fse_admin_theme_style');

//guidline for about theme
function toy_store_fse_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'toy-store-fse' );
?>
	<div class="wrapper-outer">
		<div class="intro">
			<h3><?php echo esc_html( $theme->Name ); ?></h3>
			<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'toy-store-fse' ); ?></p>
			<div class="banner-buttons">
				<a href="<?php echo esc_url( TOY_STORE_FSE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Theme Documentation', 'toy-store-fse'); ?></a>
			</div>
		</div>
		<div class="left-main-box">
			<div class="about-wrapper">
				<div class="col-left">
					<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
				</div>
				<div class="col-right">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
				</div>
			</div>
			<div class="support-wrapper">
				<div class="review-box">
					<i class="dashicons dashicons-star-filled"></i>
					<h4><?php esc_html_e('Leave Us A Review', 'toy-store-fse'); ?></h4>
					<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'toy-store-fse'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( TOY_STORE_FSE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'toy-store-fse'); ?></a>
					</div>
				</div>
				<div class="support-box">
					<i class="dashicons dashicons-microphone"></i>
					<h4><?php esc_html_e('Need Help?', 'toy-store-fse'); ?></h4>
					<p><?php esc_html_e('Go to our support forum to help you out in case of queries.', 'toy-store-fse'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( TOY_STORE_FSE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'toy-store-fse'); ?></a>
					</div>
				</div>
				<div class="editor-box">
					<i class="dashicons dashicons-admin-appearance"></i>
					<h4><?php esc_html_e('Theme Customization', 'toy-store-fse'); ?></h4>
					<p><?php esc_html_e('Effortlessly modify and maintain your site using editor.', 'toy-store-fse'); ?></p>
					<div class="support-button">
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'toy-store-fse'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="right-main-box">
			<div class="pro-box">
				<i class="dashicons dashicons-cover-image"></i>
				<h4><?php esc_html_e('Go For Premium', 'toy-store-fse'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Proceed for pro version of theme.', 'toy-store-fse'); ?></p>
				<div class="pro-buttons">
					<a class="button button-primary doc-btn" href="<?php echo esc_url( TOY_STORE_FSE_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'toy-store-fse'); ?></a>
					<a class="button button-primary buy-btn" href="<?php echo esc_url( TOY_STORE_FSE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'toy-store-fse'); ?></a>
					<a class="button button-primary demo-btn" href="<?php echo esc_url( TOY_STORE_FSE_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Pro Demo', 'toy-store-fse'); ?></a>
				</div>
				<ul class="pro-list">
					<li><?php esc_html_e('Responsive Design', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Demo Content Import', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Aditional plugins', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Background sliders', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Video popups', 'toy-store-fse');?></li>
					<li><?php esc_html_e('More Fonts and Colors', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Multiple templates', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Multiple front page sections', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Woocommerce support', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Premium support', 'toy-store-fse');?></li>
					<li><?php esc_html_e('SEO optimization', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Speed optimization', 'toy-store-fse');?></li>
					<li><?php esc_html_e('Browser compatibility', 'toy-store-fse');?></li>
			</div>
		</div>
	</div>
<?php } ?>