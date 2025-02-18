<?php
/**
 * Theme widgets.
 *
 * @package unique_freelancer_portfolio
 */

if ( ! function_exists( 'unique_freelancer_portfolio_load_widgets' ) ) :

	/**
	 * Load widgets.
	 *
	 * @since 1.0.0
	 */
	function unique_freelancer_portfolio_load_widgets() {

		// Social widget.
		register_widget( 'Unique_Freelancer_Portfolio_Social_Widget' );

	}

endif;

add_action( 'widgets_init', 'unique_freelancer_portfolio_load_widgets' );

if ( ! class_exists( 'Unique_Freelancer_Portfolio_Social_Widget' ) ) :

	/**
	 * Social widget Class.
	 *
	 * @since 1.0.0
	 */
	class Unique_Freelancer_Portfolio_Social_Widget extends unique_freelancer_portfolio_Widget_Base {

		/**
		 * Sets up a new widget instance.
		 *
		 * @since 1.0.0
		 */
		function __construct() {

			$opts = array(
				'classname'                   => 'unique_freelancer_portfolio_widget_social',
				'description'                 => __( 'Displays social icons.', 'unique-freelancer-portfolio' ),
				'customize_selective_refresh' => true,
				);
			$fields = array(
				'title' => array(
					'label' => __( 'Title:', 'unique-freelancer-portfolio' ),
					'type'  => 'text',
					'class' => 'widefat',
					),
				);

			if ( false === has_nav_menu( 'social' ) ) {
				$fields['message'] = array(
					'label' => __( 'Social menu is not set. Please create menu and assign it to Social Menu.', 'unique-freelancer-portfolio' ),
					'type'  => 'message',
					'class' => 'widefat',
					);
			}

			parent::__construct( 'unique-freelancer-portfolio-social', __( 'Social Widget', 'unique-freelancer-portfolio' ), $opts, array(), $fields );

		}

		/**
		 * Outputs the content for the current widget instance.
		 *
		 * @since 1.0.0
		 *
		 * @param array $args     Display arguments.
		 * @param array $instance Settings for the current widget instance.
		 */
		function widget( $args, $instance ) {

			$params = $this->get_params( $instance );

			echo $args['before_widget'];

			if ( ! empty( $params['title'] ) ) {
				echo $args['before_title'] . $params['title'] . $args['after_title'];
			}

			if ( has_nav_menu( 'social' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'social',
					'container'      => false,
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
			}

			echo $args['after_widget'];

		}
	}
endif;
