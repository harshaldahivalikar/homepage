<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unique_freelancer_portfolio
 */

get_header(); ?>

<?php if ( true === apply_filters( 'unique_freelancer_portfolio_filter_home_page_content', true ) ) : ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<?php ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>
			<div class="navigation">
	            <?php
		            the_posts_pagination( array(
		                'prev_text'          => __( 'Previous page', 'unique-freelancer-portfolio' ),
		                'next_text'          => __( 'Next page', 'unique-freelancer-portfolio' ),
		                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'unique-freelancer-portfolio' ) . ' </span>',
		            ) );
		            ?>
		            <div class="clearfix"></div>
		    </div>
			<?php
			do_action( 'unique_freelancer_portfolio_action_posts_navigation' );?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main>
	</div>
<?php
	do_action( 'unique_freelancer_portfolio_action_sidebar' );
?>
<?php endif;?>

<?php get_footer(); ?>
