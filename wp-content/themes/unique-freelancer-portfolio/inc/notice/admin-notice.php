<?php
$theme = wp_get_theme();

$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_unique-freelancer-portfolio-getting-started' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-success is-dismissible unique-freelancer-portfolio-admin-notice">
	<div class="unique-freelancer-portfolio-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Thank you for selecting ', 'unique-freelancer-portfolio' ); ?> <?php echo $theme->get( 'Name' ); ?> <?php esc_html_e( 'Theme!', 'unique-freelancer-portfolio' ); ?></h2>
		<p><?php esc_html_e( 'Explore the benefits of our simple Demo Importer and automatic Plugin Installation. Click the button below to begin.', 'unique-freelancer-portfolio' ); ?></p>
		<span class="admin-2-btn" >
			<a class="button-secondary" style="margin-bottom: 15px; margin-right: 10px; " href="<?php echo esc_url( admin_url( 'themes.php?page=unique-freelancer-portfolio-getting-started' ) ); ?>"><?php esc_html_e( 'Import Theme Demo', 'unique-freelancer-portfolio' ); ?></a>
	        <a class="button-primary" style="margin-bottom: 15px; " href="<?php echo esc_url('https://www.mizanthemes.com/products/portfolio-wordpress-theme'); ?>" target="_blank"><?php esc_html_e('Get Unique Freelancer Portfolio Pro', 'unique-freelancer-portfolio'); ?></a>
        </span>
	</div>
</div>