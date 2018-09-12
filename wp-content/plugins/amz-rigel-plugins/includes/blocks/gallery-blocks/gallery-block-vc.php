<?php
    /* =============================================================================
     Gallery Blocks Extend Vc
     ========================================================================== */

	$block = array(
		'gallery_block1'  => esc_html__( 'Gallery Block 1', 'amz-rigel-plugins' ),
		'gallery_block2'  => esc_html__( 'Gallery Block 2', 'amz-rigel-plugins' ),
		'gallery_block3'  => esc_html__( 'Gallery Block 3', 'amz-rigel-plugins' ),
		'gallery_block4'  => esc_html__( 'Gallery Block 4', 'amz-rigel-plugins' ),
		'gallery_block5'  => esc_html__( 'Gallery Block 5', 'amz-rigel-plugins' ),
		'gallery_block6'  => esc_html__( 'Gallery Block 6', 'amz-rigel-plugins' ),
		'gallery_block7'  => esc_html__( 'Gallery Block 7', 'amz-rigel-plugins' ),
		'gallery_block8'  => esc_html__( 'Gallery Block 8', 'amz-rigel-plugins' ),
		'gallery_block9'  => esc_html__( 'Gallery Block 9', 'amz-rigel-plugins' ),
		'gallery_block10' => esc_html__( 'Gallery Block 10', 'amz-rigel-plugins' ),
		'gallery_block11' => esc_html__( 'Gallery Block 11', 'amz-rigel-plugins' ),
		'gallery_block12' => esc_html__( 'Gallery Block 12', 'amz-rigel-plugins' )
	);
	
	foreach ( $block as $key => $value ) {

		$icon = str_replace('gallery_block', 'icon-portfolio-block', $key);

		// Gallery Block
		vc_map( array(
			"name" => $value, //Title
			"base" => $key, //Shortcode name
			"class" => "blocks",
			"icon" => $icon,
			"category" => 'Gallery Blocks', //category
			"params" => array(

				array(
					"type" => "attach_images",
					"heading" => esc_html__("Image", "amz-rigel-plugins"),
					"param_name" => "image_id",
					"value" => "",
					"description" => esc_html__("Select a icon image from media library.", "amz-rigel-plugins")
				),

				array(
					'type' => 'dropdown',
					'heading' => esc_html__( 'Disable Space in columns?', 'amz-rigel-plugins' ),
					'param_name' => 'margin',
					'value' => array(
						esc_html__( 'No', 'amz-rigel-plugins' ) => '',  
						esc_html__( 'Yes', 'amz-rigel-plugins' ) => 'margin-no'
					),
					'description' => esc_html__( 'Choose Yes to disable Space ( no margin inbetween columns ) ', 'amz-rigel-plugins')
				),
			)
		) );
	}
    