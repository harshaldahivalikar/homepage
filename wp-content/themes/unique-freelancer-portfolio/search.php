<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package unique_freelancer_portfolio
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'unique-freelancer-portfolio' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

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
			/**
			 * Hook - unique_freelancer_portfolio_action_posts_navigation.
			 *
			 * @hooked: unique_freelancer_portfolio_custom_posts_navigation - 10
			 */
			do_action( 'unique_freelancer_portfolio_action_posts_navigation' ); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main>
	</section>

<?php
	do_action( 'unique_freelancer_portfolio_action_sidebar' );
?>
<?php get_footer(); ?>
