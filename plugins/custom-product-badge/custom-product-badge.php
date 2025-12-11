<?php
/**
 * Plugin Name: WC Custom Product Badge (Example)
 * Description: Adds a custom badge to product loop items.
 * Version: 0.1
 * Author: Soumen Maity
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action('woocommerce_before_shop_loop_item_title', 'sc_add_custom_badge', 9);

function sc_add_custom_badge() {
    global $product;

    if ( $product->is_on_sale() ) {
        echo '<span class="sc-badge">Sale</span>';
    } elseif ( has_term( 'featured', 'product_tag', $product->get_id() ) ) {
        echo '<span class="sc-badge">Featured</span>';
    }
}
