<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop, $themeple_config;
$posts_per_page = 4;
if($themeple_config['current_sidebar'] == 'sidebar_right' || $themeple_config['current_sidebar'] == 'sidebar_left')
	$posts_per_page = 3;
$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
	'posts_per_page' 		=> $posts_per_page,
	'orderby' 				=> $orderby,
	'post__in' 				=> $related,
	'post__not_in'			=> array($product->id)
) );

$products = new WP_Query( $args );
$columns = 4;
if($themeple_config['current_sidebar'] == 'sidebar_right' || $themeple_config['current_sidebar'] == 'sidebar_left')
	$columns = 3;
$woocommerce_loop['columns'] 	= $columns;
if ( $products->have_posts() ) : ?>

	<div class="related products row-dynamic-el">

		<div class="header"><h6><?php _e( 'Related Products', 'woocommerce' ); ?></h6></div>

		<?php woocommerce_product_loop_start(); ?>

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

				<?php woocommerce_get_template_part( 'content', 'product' ); ?>

			<?php endwhile; // end of the loop. ?>

		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
