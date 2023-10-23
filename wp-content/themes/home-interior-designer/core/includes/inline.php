<?php


$home_interior_designer_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$home_interior_designer_text_transform = get_theme_mod( 'menu_text_transform_home_interior_designer','CAPITALISE');
    if($home_interior_designer_text_transform == 'CAPITALISE'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='text-transform: capitalize ; font-size: 15px;';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_text_transform == 'UPPERCASE'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='text-transform: uppercase ; font-size: 15px;';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_text_transform == 'LOWERCASE'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='text-transform: lowercase ; font-size: 15px;';

		$home_interior_designer_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$home_interior_designer_container_width = get_theme_mod('home_interior_designer_container_width');

		$home_interior_designer_custom_css .='body{';

			$home_interior_designer_custom_css .='width: '.esc_attr($home_interior_designer_container_width).'%; margin: auto';

		$home_interior_designer_custom_css .='}';

		/*---------------------------Slider-content-alignment-------------------*/

	$home_interior_designer_slider_content_alignment = get_theme_mod( 'home_interior_designer_slider_content_alignment','LEFT-ALIGN');

	 if($home_interior_designer_slider_content_alignment == 'LEFT-ALIGN'){

			$home_interior_designer_custom_css .='.blog_box{';

				$home_interior_designer_custom_css .='text-align:left;';

			$home_interior_designer_custom_css .='}';


		}else if($home_interior_designer_slider_content_alignment == 'CENTER-ALIGN'){

			$home_interior_designer_custom_css .='.blog_box{';

				$home_interior_designer_custom_css .='text-align:center;';

			$home_interior_designer_custom_css .='}';


		}else if($home_interior_designer_slider_content_alignment == 'RIGHT-ALIGN'){

			$home_interior_designer_custom_css .='.blog_box{';

				$home_interior_designer_custom_css .='text-align:right;';

			$home_interior_designer_custom_css .='}';

		}

		/*---------------------------Copyright Text alignment-------------------*/

$home_interior_designer_copyright_text_alignment = get_theme_mod( 'home_interior_designer_copyright_text_alignment','LEFT-ALIGN');

 if($home_interior_designer_copyright_text_alignment == 'LEFT-ALIGN'){

		$home_interior_designer_custom_css .='.copy-text p{';

			$home_interior_designer_custom_css .='text-align:left;';

		$home_interior_designer_custom_css .='}';


	}else if($home_interior_designer_copyright_text_alignment == 'CENTER-ALIGN'){

		$home_interior_designer_custom_css .='.copy-text p{';

			$home_interior_designer_custom_css .='text-align:center;';

		$home_interior_designer_custom_css .='}';


	}else if($home_interior_designer_copyright_text_alignment == 'RIGHT-ALIGN'){

		$home_interior_designer_custom_css .='.copy-text p{';

			$home_interior_designer_custom_css .='text-align:right;';

		$home_interior_designer_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

$home_interior_designer_related_product_setting = get_theme_mod('home_interior_designer_related_product_setting',true);

	if($home_interior_designer_related_product_setting == false){

		$home_interior_designer_custom_css .='.related.products, .related h2{';

			$home_interior_designer_custom_css .='display: none;';

		$home_interior_designer_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

		$home_interior_designer_scroll_top_position = get_theme_mod( 'home_interior_designer_scroll_top_position','Right');

		if($home_interior_designer_scroll_top_position == 'Right'){
	
			$home_interior_designer_custom_css .='.scroll-up{';
	
				$home_interior_designer_custom_css .='right: 20px;';
	
			$home_interior_designer_custom_css .='}';
	
		}else if($home_interior_designer_scroll_top_position == 'Left'){
	
			$home_interior_designer_custom_css .='.scroll-up{';
	
				$home_interior_designer_custom_css .='left: 20px;';
	
			$home_interior_designer_custom_css .='}';
	
		}else if($home_interior_designer_scroll_top_position == 'Center'){
	
			$home_interior_designer_custom_css .='.scroll-up{';
	
				$home_interior_designer_custom_css .='right: 50%;left: 50%;';
	
			$home_interior_designer_custom_css .='}';
		}
	
			/*---------------------------Pagination Settings-------------------*/
	
	
	$home_interior_designer_pagination_setting = get_theme_mod('home_interior_designer_pagination_setting',true);
	
		if($home_interior_designer_pagination_setting == false){
	
			$home_interior_designer_custom_css .='.nav-links{';
	
				$home_interior_designer_custom_css .='display: none;';
	
			$home_interior_designer_custom_css .='}';
		}
