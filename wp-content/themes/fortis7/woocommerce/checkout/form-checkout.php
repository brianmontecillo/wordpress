<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$woocommerce->show_messages();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', $woocommerce->cart->get_checkout_url() ); ?>

<form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
		<div class="tabbable tabs-left style_1" id="customer_details">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#billing" data-toggle="tab" class="yes"><i class="moon-office"></i><?php _e('Billing Address', 'themeple') ?></a></li>
				<li class=""><a href="#shipping" data-toggle="tab" class="yes"><i class="moon-cart"></i><?php _e('Shipping Address', 'themeple') ?><</a></li>
				<li class=""><a href="#order" data-toggle="tab" class="yes"><i class="moon-cart"></i><?php _e('View Order', 'themeple') ?></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="billing">

					<?php do_action( 'woocommerce_checkout_billing' ); ?>

				</div>

				<div class="tab-pane" id="shipping">

					<?php do_action( 'woocommerce_checkout_shipping' ); ?>

				</div>

				<div class="tab-pane" id="order">
					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
					<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>
			</div>
		</div>

		

	<?php endif; ?>

	

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>