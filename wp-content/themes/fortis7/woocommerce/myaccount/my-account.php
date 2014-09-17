<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$woocommerce->show_messages(); ?>

<p class="myaccount_user">
	<?php
	printf(
		__( 'Hello, <strong>%s</strong>. From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">change your password</a>.', 'woocommerce' ),
		$current_user->display_name,
		get_permalink( woocommerce_get_page_id( 'change_password' ) )
	);
	?>
</p>

<?php do_action( 'woocommerce_before_my_account' ); ?>
<div class="tabbable tabs-left style_1" id="myaccount">
			<ul class="nav nav-tabs">
				<li class=""><a href="#edit_address" data-toggle="tab" class="yes"><i class="moon-office"></i><?php _e('Change Address', 'themeple') ?></a></li>

				<li class="active"><a href="#order" data-toggle="tab" class="yes"><i class="moon-cart"></i><?php _e('View Order', 'themeple') ?></a></li>
				
				<li class=""><a href="#change_pass" data-toggle="tab" class="yes"><i class="moon-user"></i><?php _e('Change Password', 'themeple') ?></a></li>
				
			</ul>
			<div class="tab-content">
				
				<div class="tab-pane active" id="edit_address">

					<?php  woocommerce_get_template( 'myaccount/form-edit-address.php') ?>

				</div>
				<div class="tab-pane" id="order">
					<?php woocommerce_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>
				</div>
				<div class="tab-pane" id="change_pass">

					<?php  woocommerce_get_template( 'myaccount/form-change-password.php') ?>

				</div>

				
			</div>
		</div>

<?php do_action( 'woocommerce_after_my_account' ); ?>