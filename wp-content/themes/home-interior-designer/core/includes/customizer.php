<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_interior_designer_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'home-interior-designer' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'home-interior-designer' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'home-interior-designer' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'home_interior_designer_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'home-interior-designer' ),
	) );

	Kirki::add_section( 'home_interior_designer_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'home-interior-designer' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_all_headings_typography',
		'section'     => 'home_interior_designer_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'home_interior_designer_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'home-interior-designer' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'home-interior-designer' ),
		'section'     => 'home_interior_designer_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_body_content_typography',
		'section'     => 'home_interior_designer_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'home_interior_designer_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'home-interior-designer' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'home-interior-designer' ),
		'section'     => 'home_interior_designer_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'home_interior_designer_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'home-interior-designer' ),
	) );

	// Additional Settings

	Kirki::add_section( 'home_interior_designer_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'home-interior-designer' ),
	    'description'    => esc_html__( 'Scroll To Top', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'home_interior_designer_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'home-interior-designer' ),
			'Center' => esc_html__( 'Center', 'home-interior-designer' ),
			'Right'  => esc_html__( 'Right', 'home-interior-designer' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_home_interior_designer',
		'label'       => esc_html__( 'Menus Text Transform', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'home-interior-designer' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'home-interior-designer' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'home-interior-designer' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_interior_designer_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	if ( class_exists( 'WooCommerce' ) ) {
		// Woocommerce Settings

		Kirki::add_section( 'home_interior_designer_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'home-interior-designer' ),
			'description'    => esc_html__( 'Shop Page', 'home-interior-designer' ),
			'panel'          => 'home_interior_designer_panel_id',
			'priority'       => 160,
		) );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'home_interior_designer_related_product_setting',
			'label'       => esc_html__( 'Here you can enable or disable your related products.', 'home-interior-designer' ),
			'section'     => 'home_interior_designer_woocommerce_settings',
			'default'     => true,
			'priority'    => 10,
		] );		
	}

	// POST SECTION

	Kirki::add_section( 'home_interior_designer_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'home-interior-designer' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_post_heading',
		'section'     => 'home_interior_designer_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_interior_designer_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'home_interior_designer_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'home-interior-designer' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_topbar_text',
		'section'     => 'home_interior_designer_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Header Text', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_topbar_text' ,
        'section'  => 'home_interior_designer_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_time_heading',
		'section'     => 'home_interior_designer_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Opening Time', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_topbar_opening_time' ,
        'section'  => 'home_interior_designer_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_button_heading',
		'section'     => 'home_interior_designer_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'    =>  esc_html__( 'Button Text', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_header_button_text' ,
        'section'  => 'home_interior_designer_section_header',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'    =>  esc_html__( 'Button Link', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_header_button_link' ,
        'section'  => 'home_interior_designer_section_header',
    ] );	

	// SLIDER SECTION

	Kirki::add_section( 'home_interior_designer_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'home-interior-designer' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'home-interior-designer' ),
        'panel'          => 'home_interior_designer_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_slider_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'home_interior_designer_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'home_interior_designer_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'home-interior-designer' ),
		'priority'    => 10,
		'choices'     => home_interior_designer_get_categories_select(),
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'home-interior-designer' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'home-interior-designer' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'home-interior-designer' ),

		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_phone_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'    =>  esc_html__( 'Phone Text', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_phone_text' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'    =>  esc_html__( 'Phone Number', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_phone_number' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_email_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'    =>  esc_html__( 'Email Text', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_email_text' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'    =>  esc_html__( 'Email Address', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_email_address' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_social_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'home_interior_designer_blog_slide_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'home-interior-designer' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'home-interior-designer' ),
		'settings'     => 'home_interior_designer_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'home-interior-designer' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'home-interior-designer' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'home-interior-designer' ),
				'description' => esc_html__( 'Add the social icon url here.', 'home-interior-designer' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	//TRENDING BLOGS SECTION

	Kirki::add_section( 'home_interior_designer_trending_section', array(
	    'title'          => esc_html__( 'Trending News Settings', 'home-interior-designer' ),
	    'description'    => esc_html__( 'Here you can add trending blogs.', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Services',  'home-interior-designer' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_trending_section_enable',
		'section'     => 'home_interior_designer_trending_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'home-interior-designer' ),
			'off' => esc_html__( 'Disable',  'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_short_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Short Heading',  'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_trending_short_heading' ,
        'section'  => 'home_interior_designer_trending_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_trending_main_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading',  'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_trending_heading' ,
        'section'  => 'home_interior_designer_trending_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_number_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number of post to show',  'home-interior-designer' ) . '</h3>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'home_interior_designer_trending_number',
		'section'     => 'home_interior_designer_trending_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_category_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Select the category to show post',  'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'home_interior_designer_trending_category',
		'section'     => 'home_interior_designer_trending_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'home-interior-designer' ),
		'priority'    => 10,
		'choices'     => home_interior_designer_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'home_interior_designer_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'home-interior-designer' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'home-interior-designer' ),
        'panel'          => 'home_interior_designer_panel_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_footer_enable_heading',
		'section'     => 'home_interior_designer_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_footer_text_heading',
		'section'     => 'home_interior_designer_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'home_interior_designer_footer_text',
		'section'  => 'home_interior_designer_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'home_interior_designer_footer_text_heading_2',
	'section'     => 'home_interior_designer_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'home-interior-designer' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'home-interior-designer' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'home-interior-designer' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'home-interior-designer' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'home_interior_designer_footer_text_heading_1',
	'section'     => 'home_interior_designer_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'home-interior-designer' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'home_interior_designer_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_footer_section',
		'default'     => '',
	] );
}
