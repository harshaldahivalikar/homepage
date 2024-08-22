<?php
/**
 * Theme Options.
 *
 * @package unique_freelancer_portfolio
 */

$default = unique_freelancer_portfolio_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'unique_freelancer_portfolio_theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'unique-freelancer-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// General Option.
$wp_customize->add_section( 'unique_freelancer_portfolio_section_general_option',
	array(
	'title'      => __( 'General Options', 'unique-freelancer-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_freelancer_portfolio_theme_option_panel',
	)
);

// Setting show scroll to top.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_scroll_to_top]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_scroll_to_top'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_scroll_to_top]',
	array(
	'label'    => __( 'Show Scroll To Top', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Preloader.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_preloader_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_preloader_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_preloader_setting]',
	array(
	'label'    => __( 'Show Preloader', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Sticky Header.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_data_sticky_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_data_sticky_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_data_sticky_setting]',
	array(
	'label'    => __( 'Show Sticky Header', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Post Option.
$wp_customize->add_section( 'unique_freelancer_portfolio_section_post_option',
	array(
	'title'      => __( 'Post Options', 'unique-freelancer-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_freelancer_portfolio_theme_option_panel',
	)
);

// Setting show Post date.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_date_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_date_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_date_setting]',
	array(
	'label'    => __( 'Show Post Date', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Heading.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_heading_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_heading_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_heading_setting]',
	array(
	'label'    => __( 'Show Post Heading', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Content.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_content_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_content_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_content_setting]',
	array(
	'label'    => __( 'Show Post Full Content', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post admin.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_admin_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_admin_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_admin_setting]',
	array(
	'label'    => __( 'Show Post Admin', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Categories.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_categories_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_categories_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_categories_setting]',
	array(
	'label'    => __( 'Show Post Categories', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Comments.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_comments_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_comments_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_comments_setting]',
	array(
	'label'    => __( 'Show Post Comments', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Featured Image.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_featured_image_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_featured_image_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_featured_image_setting]',
	array(
	'label'    => __( 'Show Post Featured Image', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Tags.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_post_tags_setting]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_post_tags_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_post_tags_setting]',
	array(
	'label'    => __( 'Show Post Tags', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Header Section.
$wp_customize->add_section( 'unique_freelancer_portfolio_section_header',
	array(
	'title'      => __( 'Header Options', 'unique-freelancer-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_freelancer_portfolio_theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_title]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_title]',
	array(
	'label'    => __( 'Show Site Title', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_show_tagline]',
	array(
	'default'           => $default['unique_freelancer_portfolio_show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Contact button Text

$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_quote_button_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_quote_button_text]',
	array(
	'label'    => __( 'Quote Button Text', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Contact button link
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_quote_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_quote_button_link]',
	array(
	'label'    => __( 'Quote Button Link', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'unique_freelancer_portfolio_section_layout',
	array(
	'title'      => __( 'Layout Options', 'unique-freelancer-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_freelancer_portfolio_theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_global_layout]',
	array(
	'default'           => $default['unique_freelancer_portfolio_global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_global_layout]',
	array(
	'label'    => __( 'Global Layout', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_layout',
	'type'     => 'select',
	'choices'  => unique_freelancer_portfolio_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_archive_layout]',
	array(
	'default'           => $default['unique_freelancer_portfolio_archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_layout',
	'type'     => 'select',
	'choices'  => unique_freelancer_portfolio_get_archive_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_archive_image]',
	array(
	'default'           => $default['unique_freelancer_portfolio_archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_layout',
	'type'     => 'select',
	'choices'  => unique_freelancer_portfolio_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_archive_image_alignment]',
	array(
	'default'           => $default['unique_freelancer_portfolio_archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'unique-freelancer-portfolio' ),
	'section'         => 'unique_freelancer_portfolio_section_layout',
	'type'            => 'select',
	'choices'         => unique_freelancer_portfolio_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'unique_freelancer_portfolio_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_single_image]',
	array(
	'default'           => $default['unique_freelancer_portfolio_single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_layout',
	'type'     => 'select',
	'choices'  => unique_freelancer_portfolio_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'unique_freelancer_portfolio_section_footer',
	array(
	'title'      => __( 'Footer Options', 'unique-freelancer-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_freelancer_portfolio_theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[unique_freelancer_portfolio_copyright_text]',
	array(
	'default'           => $default['unique_freelancer_portfolio_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_freelancer_portfolio_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[unique_freelancer_portfolio_copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'unique-freelancer-portfolio' ),
	'section'  => 'unique_freelancer_portfolio_section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);