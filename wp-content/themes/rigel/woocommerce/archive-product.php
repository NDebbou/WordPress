<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );

?>
	
	<?php
	
		/* HEADER */
		global $smof_data;

		$page_layout = isset($smof_data['shop_layout']) ? $smof_data['shop_layout'] : 'default';

		//Sidebar
		$shop_sidebar = isset($smof_data['shop_select_sidebar']) ? $smof_data['shop_select_sidebar'] : '0';

	?>

		<div id="primary" class="content-area">
		
			<main id="main" class="site-main container" role="main">

				<?php 
					/**
					 * Hook: woocommerce_before_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 * @hooked WC_Structured_Data::generate_website_data() - 30
					 */
					do_action( 'woocommerce_before_main_content' );

					if ( $page_layout == 'right-sidebar' || $page_layout == 'left-sidebar' || $page_layout == 'right-nav' || $page_layout == 'left-nav') {
						echo '<div class="row">';

						if ( $page_layout == 'left-sidebar' ) {
							echo '<div class="woo-desc"></div>';
		 					rigel_sidebar($shop_sidebar , 'shop');	
						} elseif ( $page_layout == 'left-nav' ) {
							echo '<aside class="col-md-3">';
								if(function_exists('wp_nav_menu')) {                                      
									wp_nav_menu(
										array(
											'theme_location' => 'left-nav',
											'container' => false,
											'menu_class' => 'sub-navigation left',
											'echo' => true,
											'before' => '',
											'after' => '',
											'link_before' => '',
											'link_after' => '',
											'depth' => 1,
											'fallback_cb' => 'rigel_nav_fallback'
											)
										);
								} 
								else {
									rigel_nav_fallback();
								}
								
							echo '</aside>';
						}

						echo '<div class="col-md-9">';
					}

					if ( have_posts() ) {

						woocommerce_product_loop_start();

						?>

						<header class="woocommerce-products-header">
							<div class="woo-desc">
							<?php
							/**
							 * Hook: woocommerce_archive_description.
							 *
							 * @hooked woocommerce_taxonomy_archive_description - 10
							 * @hooked woocommerce_product_archive_description - 10
							 */
							do_action( 'woocommerce_archive_description' );
							?>
							</div>
						</header>

						<?php

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked wc_print_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );

						woocommerce_product_subcategories();

						?>

						<div class="woo-wrap clearfix row">

						<?php
							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();

									/**
									 * Hook: woocommerce_shop_loop.
									 *
									 * @hooked WC_Structured_Data::generate_product_data() - 10
									 */
									do_action( 'woocommerce_shop_loop' );

									wc_get_template_part( 'content', 'product' );
								}
							} 
						?>

						</div>

						<?php

							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );

							woocommerce_product_loop_end();

					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					}


				if ( $page_layout == 'right-sidebar' || $page_layout == 'left-sidebar' || $page_layout == 'right-nav' || $page_layout == 'left-nav') {

					echo '</div>'; //col-md-9

						if ( $page_layout == 'right-sidebar' ) {
							rigel_sidebar($shop_sidebar , 'shop');
						} elseif ( $page_layout == 'right-nav' ) {
							echo '<aside class="col-md-3">';							
								if(function_exists('wp_nav_menu')) {                                      
									wp_nav_menu(
										array(
											'theme_location' => 'right-nav',
											'container' => false,
											'menu_class' => 'sub-navigation right',
											'echo' => true,
											'before' => '',
											'after' => '',
											'link_before' => '',
											'link_after' => '',
											'depth' => 1,
											'fallback_cb' => 'rigel_nav_fallback'
											)
										);
								} 
								else {
									rigel_nav_fallback();
								}
								 
							echo '</aside>';
						}

					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' );

					echo '</div>'; //row
				}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer( 'shop' );
