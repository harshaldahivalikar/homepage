<?php
/**
 * Basic theme functions.
 *
 * This file contains hook functions attached to core hooks.
 *
 * @package unique_freelancer_portfolio
 */

if ( ! function_exists( 'unique_freelancer_portfolio_implement_excerpt_length' ) ) :

	/**
	 * Implement excerpt length.
	 *
	 * @since 1.0.0
	 *
	 * @param int $length The number of words.
	 * @return int Excerpt length.
	 */
	function unique_freelancer_portfolio_implement_excerpt_length( $length ) {

		$unique_freelancer_portfolio_excerpt_length = unique_freelancer_portfolio_get_option( 'unique_freelancer_portfolio_excerpt_length' );
		$unique_freelancer_portfolio_excerpt_length = apply_filters( 'unique_freelancer_portfolio_filter_excerpt_length', $unique_freelancer_portfolio_excerpt_length );

		if ( absint( $unique_freelancer_portfolio_excerpt_length ) > 0 ) {
			$length = absint( $unique_freelancer_portfolio_excerpt_length );
		}

		return $length;

	}

endif;

if ( ! function_exists( 'unique_freelancer_portfolio_implement_read_more' ) ) :

	/**
	 * Implement read more in excerpt
	 *
	 * @since 1.0.0
	 *
	 * @param string $more The string shown within the more link.
	 * @return string The excerpt.
	 */
	function unique_freelancer_portfolio_implement_read_more( $more ) {

		$unique_freelancer_portfolio_flag_apply_excerpt_read_more = apply_filters( 'unique_freelancer_portfolio_filter_excerpt_read_more', true );
		if ( true !== $unique_freelancer_portfolio_flag_apply_excerpt_read_more ) {
			return $more;
		}

		$output = $more;
		$unique_freelancer_portfolio_read_more_text = unique_freelancer_portfolio_get_option( 'read_more_text' );
		if ( ! empty( $unique_freelancer_portfolio_read_more_text ) ) {
			$output = ' <a href="'. esc_url( get_permalink() ) . '" class="read-more">' . esc_html( $unique_freelancer_portfolio_read_more_text ) . '</a>';
			$output = apply_filters( 'unique_freelancer_portfolio_filter_read_more_link' , $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'unique_freelancer_portfolio_content_more_link' ) ) :

	/**
	 * Implement read more in content.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more_link Read More link element.
	 * @param string $more_link_text Read More text.
	 * @return string Link.
	 */
	function unique_freelancer_portfolio_content_more_link( $unique_freelancer_portfolio_more_link, $unique_freelancer_portfolio_more_link_text ) {

		$unique_freelancer_portfolio_flag_apply_excerpt_read_more = apply_filters( 'unique_freelancer_portfolio_filter_excerpt_read_more', true );
		if ( true !== $unique_freelancer_portfolio_flag_apply_excerpt_read_more ) {
			return $unique_freelancer_portfolio_more_link;
		}

		$unique_freelancer_portfolio_read_more_text = unique_freelancer_portfolio_get_option( 'read_more_text' );
		if ( ! empty( $unique_freelancer_portfolio_read_more_text ) ) {
			$unique_freelancer_portfolio_more_link = str_replace( $unique_freelancer_portfolio_more_link_text, esc_html( $unique_freelancer_portfolio_read_more_text ), $unique_freelancer_portfolio_more_link );
		}
		return $unique_freelancer_portfolio_more_link;

	}

endif;

if ( ! function_exists( 'unique_freelancer_portfolio_custom_body_class' ) ) :
	/**
	 * Custom body class
	 *
	 * @since 1.0.0
	 *
	 * @param string|array $input One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function unique_freelancer_portfolio_custom_body_class( $input ) {

		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$input[] = 'group-blog';
		}

		$unique_freelancer_portfolio_home_content_status =	unique_freelancer_portfolio_get_option( 'unique_freelancer_portfolio_home_content_status' );
		if( true !== $unique_freelancer_portfolio_home_content_status ){
			$input[] = 'home-content-not-enabled';
		}

		// Global layout.
		global $post;
		$unique_freelancer_portfolio_global_layout = unique_freelancer_portfolio_get_option( 'unique_freelancer_portfolio_global_layout' );
		$unique_freelancer_portfolio_global_layout = apply_filters( 'unique_freelancer_portfolio_filter_theme_global_layout', $unique_freelancer_portfolio_global_layout );

		// Check if single.
		if ( $post  && is_singular() ) {
			$unique_freelancer_portfolio_post_options = get_post_meta( $post->ID, 'unique_freelancer_portfolio_theme_settings', true );
			if ( isset( $unique_freelancer_portfolio_post_options['unique_freelancer_portfolio_post_layout'] ) && ! empty( $unique_freelancer_portfolio_post_options['unique_freelancer_portfolio_post_layout'] ) ) {
				$unique_freelancer_portfolio_global_layout = $unique_freelancer_portfolio_post_options['unique_freelancer_portfolio_post_layout'];
			}
		}

		$input[] = 'global-layout-' . esc_attr( $unique_freelancer_portfolio_global_layout );

		// Common class for three columns.
		switch ( $unique_freelancer_portfolio_global_layout ) {
		  case 'three-columns':
		    $input[] = 'three-columns-enabled';
		    break;

		  default:
		    break;
		}

		// Common class for four columns.
		switch ( $unique_freelancer_portfolio_global_layout ) {
		  case 'four-columns':
		    $input[] = 'four-columns-enabled';
		    break;

		  default:
		    break;
		}

		$unique_freelancer_portfolio_flag_apply_slider = apply_filters( 'unique_freelancer_portfolio_filter_slider_status', false );

		if ( true === $unique_freelancer_portfolio_flag_apply_slider ) {
			$input[] = 'slider-enabled';
		}
		else {
			$input[] = 'slider-disabled';
		}

		return $input;

	}
endif;

add_filter( 'body_class', 'unique_freelancer_portfolio_custom_body_class' );

if ( ! function_exists( 'unique_freelancer_portfolio_featured_image_instruction' ) ) :

	/**
	 * Message to show in the Featured Image Meta box.
	 *
	 * @since 1.0.0
	 *
	 * @param string $content Admin post thumbnail HTML markup.
	 * @param int    $post_id Post ID.
	 * @return string HTML.
	 */
	function unique_freelancer_portfolio_featured_image_instruction( $content, $post_id ) {

		$allowed = array( 'post', 'page' );
		if ( in_array( get_post_type( $post_id ), $allowed ) ) {
			$content .= '<strong>' . __( 'Recommended Image Sizes', 'unique-freelancer-portfolio' ) . ':</strong><br/>';
			$content .= __( 'Slider Image', 'unique-freelancer-portfolio' ) . ' : 1350px X 590px';
		}

		return $content;

	}

endif;
add_filter( 'admin_post_thumbnail_html', 'unique_freelancer_portfolio_featured_image_instruction', 10, 2 );

if ( ! function_exists( 'unique_freelancer_portfolio_custom_content_width' ) ) :

	/**
	 * Custom content width.
	 *
	 * @since 1.0.0
	 */
	function unique_freelancer_portfolio_custom_content_width() {

		global $post, $wp_query, $content_width;

		$unique_freelancer_portfolio_global_layout = unique_freelancer_portfolio_get_option( 'unique_freelancer_portfolio_global_layout' );
		$unique_freelancer_portfolio_global_layout = apply_filters( 'unique_freelancer_portfolio_filter_theme_global_layout', $unique_freelancer_portfolio_global_layout );

		// Check if single.
		if ( $post  && is_singular() ) {
		  $unique_freelancer_portfolio_post_options = get_post_meta( $post->ID, 'unique_freelancer_portfolio_theme_settings', true );
		  if ( isset( $unique_freelancer_portfolio_post_options['unique_freelancer_portfolio_post_layout'] ) && ! empty( $unique_freelancer_portfolio_post_options['unique_freelancer_portfolio_post_layout'] ) ) {
		    $unique_freelancer_portfolio_global_layout = esc_attr( $unique_freelancer_portfolio_post_options['unique_freelancer_portfolio_post_layout'] );
		  }
		}
		switch ( $unique_freelancer_portfolio_global_layout ) {

			case 'no-sidebar':
				$content_width = 1140;
				break;

			case 'three-columns':
				$content_width = 525;
				break;

			case 'four-columns':
				$content_width = 525;
				break;

			case 'left-sidebar':
			case 'right-sidebar':
				$content_width = 771;
				break;

			default:
				break;
		}

	}
endif;

add_filter( 'template_redirect', 'unique_freelancer_portfolio_custom_content_width' );

if ( ! function_exists( 'unique_freelancer_portfolio_hook_read_more_filters' ) ) :

	/**
	 * Hook read more filters.
	 *
	 * @since 1.0.0
	 */
	function unique_freelancer_portfolio_hook_read_more_filters() {
		if ( is_home() || is_category() || is_tag() || is_author() || is_date() ) {

			add_filter( 'excerpt_length', 'unique_freelancer_portfolio_implement_excerpt_length', 999 );
			add_filter( 'the_content_more_link', 'unique_freelancer_portfolio_content_more_link', 10, 2 );
			add_filter( 'excerpt_more', 'unique_freelancer_portfolio_implement_read_more' );

		}
	}
endif;

add_action( 'wp', 'unique_freelancer_portfolio_hook_read_more_filters' );
