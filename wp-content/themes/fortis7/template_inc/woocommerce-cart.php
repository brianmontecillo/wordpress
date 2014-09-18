<?php global $woocommerce; ?>
<div class="cart">
		<?php if(!$woocommerce->cart->cart_contents_count): ?>
		<a class="cart_icon" href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><i class="moon-basket"></i></a>
		<?php else: ?>
		<a class="cart_icon cart_icon_active" href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><i class="moon-basket"></i></a>
		<div class="content">
			<div class="items">
			<?php foreach($woocommerce->cart->cart_contents as $key => $cart_item): ?>
			
				<div class="cart_item">
					<a href="<?php echo get_permalink($cart_item['product_id']); ?>">
					<?php echo get_the_post_thumbnail($cart_item['product_id'], 'post_thumbnail'); ?>
					<div class="description">
						<span class="title"><?php echo $cart_item['data']->post->post_title; ?></span>
						<span class="price"><?php echo $cart_item['quantity']; ?> x <?php echo $woocommerce->cart->get_product_subtotal($cart_item['data'], $cart_item['quantity']); ?></span>
					</div>
					</a>
					<a class="remove" href="<?php echo $woocommerce->cart->get_remove_url($key) ?>"></a>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="checkout">
				<div class="view_cart"><a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><i class="moon-cart"></i><span><?php _e('View Cart', 'themeple'); ?></span></a></div>
				<div class="checkout_link"><a href="<?php echo get_permalink(get_option('woocommerce_checkout_page_id')); ?>"><i class="moon-redo-2"></i><span><?php _e('Checkout', 'themeple'); ?></span></a></div>
			</div>
		</div>
		<?php endif; ?>
</div>