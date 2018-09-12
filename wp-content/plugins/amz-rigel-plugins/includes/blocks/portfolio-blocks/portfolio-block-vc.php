<?php
    /* =============================================================================
     Portfolio Blocks Extend Vc
     ========================================================================== */

	$block = array(
		'portfolio_block1'  => esc_html__( 'Portfolio Block 1', 'amz-rigel-plugins' ),
		'portfolio_block2'  => esc_html__( 'Portfolio Block 2', 'amz-rigel-plugins' ),
		'portfolio_block3'  => esc_html__( 'Portfolio Block 3', 'amz-rigel-plugins' ),
		'portfolio_block4'  => esc_html__( 'Portfolio Block 4', 'amz-rigel-plugins' ),
		'portfolio_block5'  => esc_html__( 'Portfolio Block 5', 'amz-rigel-plugins' ),
		'portfolio_block6'  => esc_html__( 'Portfolio Block 6', 'amz-rigel-plugins' ),
		'portfolio_block7'  => esc_html__( 'Portfolio Block 7', 'amz-rigel-plugins' ),
		'portfolio_block8'  => esc_html__( 'Portfolio Block 8', 'amz-rigel-plugins' ),
		'portfolio_block9'  => esc_html__( 'Portfolio Block 9', 'amz-rigel-plugins' ),
		'portfolio_block10' => esc_html__( 'Portfolio Block 10', 'amz-rigel-plugins' ),
		'portfolio_block11' => esc_html__( 'Portfolio Block 11', 'amz-rigel-plugins' ),
		'portfolio_block12' => esc_html__( 'Portfolio Block 12', 'amz-rigel-plugins' )
	);
	foreach ( $block as $key => $value ) {

		if( 'portfolio_block1' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block1';
		}
		elseif( 'portfolio_block2' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block2';
		}
		elseif( 'portfolio_block3' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block3';
		}
		elseif( 'portfolio_block4' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block4';
		}
		elseif( 'portfolio_block5' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block5';
		}
		elseif( 'portfolio_block6' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block6';
		}
		elseif( 'portfolio_block7' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block7';
		}
		elseif( 'portfolio_block8' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block8';
		}
		elseif( 'portfolio_block9' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block9';
		}
		elseif( 'portfolio_block10' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block10';
		}
		elseif( 'portfolio_block11' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block11';
		}
		elseif( 'portfolio_block12' == $key ) {

			// Icon class for individual vc items
			$icon = 'icon-portfolio-block12';
		}

		// Portfolio Block
		vc_map( array(
			'name' => $value, //Title
			'base' => $key, //Shortcode name
			'class' => 'blocks',
			'icon' => $icon,
			'category' => 'Portfolio Blocks', //category
			'params' => array(

				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Insert Portfolio By', 'amz-rigel-plugins'),
					'param_name' => 'insert_type',
					'value' => array(
						esc_html__('Posts', 'amz-rigel-plugins') => 'posts', 
						esc_html__('Id', 'amz-rigel-plugins') => 'id'
					),
					'description' => ''
				),

				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Show Filter', 'amz-rigel-plugins'),
					'param_name' => 'filter',
					'value' => array(
						esc_html__( 'Yes', 'amz-rigel-plugins' ) => 'yes',  
						esc_html__( 'No', 'amz-rigel-plugins' ) => 'no'
					),
					'description' => esc_html__( 'Do you want to display filter', 'amz-rigel-plugins' )
				),

				array(
					'type' => 'dropdown',
					'heading' => esc_html__('HTML Tag for portfolio Name', 'amz-rigel-plugins'),
					'param_name' => 'title_tag',
					'value' => array('h2','h3','h4','h5','h6','h1' ),
					'description' => esc_html__('Choose which html tag you want use for portfolio name.', 'amz-rigel-plugins')
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Id', 'amz-rigel-plugins'),
					'param_name' => 'portfolio_id',
					'value' => '',
					'description' => esc_html__( 'Enter the portfolio ids seperated by commas (,). Example: 2,54,8', 'amz-rigel-plugins' ),
					'dependency' => array( 'element' => 'insert_type', 'value' => 'id' ),
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Exclude Portfolio', 'amz-rigel-plugins'),
					'param_name' => 'exclude_portfolio',
					'value' => '',
					'description' => esc_html__('Enter the portfolio id you don\'t want to display. Divide id with comma (,).', 'amz-rigel-plugins')
				),

				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Order By', 'amz-rigel-plugins'),
					'param_name' => 'order_by',
					'value' => array(
						esc_html__('Date Modified', 'amz-rigel-plugins') => 'modified',
						esc_html__('Date', 'amz-rigel-plugins') => 'date',  
						esc_html__('Rand', 'amz-rigel-plugins') => 'rand',
						esc_html__('ID', 'amz-rigel-plugins') => 'ID', 
						esc_html__('Title', 'amz-rigel-plugins') => 'title', 
						esc_html__('Author', 'amz-rigel-plugins') => 'author',
						esc_html__('Name', 'amz-rigel-plugins') => 'name',
						esc_html__('Parent', 'amz-rigel-plugins') => 'parent',							  
						esc_html__('Menu Order', 'amz-rigel-plugins') => 'menu_order',
						esc_html__('None', 'amz-rigel-plugins') => 'none'
					),
					'dependency' => array('element' => 'insert_type', 'value' => 'posts'),
					'description' => esc_html__('Order posts By choosen order', 'amz-rigel-plugins')
				),

				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Order', 'amz-rigel-plugins'),
					'param_name' => 'order',
					'value' => array(
						esc_html__( 'Descending order', 'amz-rigel-plugins') => 'DESC', 
						esc_html__( 'Ascending order', 'amz-rigel-plugins' ) => 'ASC'
					),
					'dependency' => array( 'element' => 'insert_type', 'value' => 'posts' ),
					'description' => ''
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

				array(
					'type' => 'dropdown',
					'heading' => esc_html__('Pagination', 'amz-rigel-plugins'),
					'param_name' => 'pagination',
					'value' => array(
						esc_html__('None', 'amz-rigel-plugins')      => 'none',
						esc_html__('Load More', 'amz-rigel-plugins') => 'load_more',
						esc_html__('Autoload', 'amz-rigel-plugins')  => 'autoload',
						esc_html__('Number', 'amz-rigel-plugins')    => 'number',
						esc_html__('Text', 'amz-rigel-plugins')      => 'text'
					),
					'description' => '',
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Load More Text', 'amz-rigel-plugins'),
					'param_name' => 'loadmore_text',
					'value' => esc_html__( 'Load More', 'amz-rigel-plugins' ),
					'description' => esc_html__('Enter the load more text', 'amz-rigel-plugins'),
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__('All Post Loaded Text', 'amz-rigel-plugins'),
					'param_name' => 'allpost_loaded_text',
					'value' => esc_html__( 'All Portfolio Loaded', 'amz-rigel-plugins' ),
					'description' => esc_html__('Enter the all post loaded text', 'amz-rigel-plugins'),
				)
			)
		) );
	}
    