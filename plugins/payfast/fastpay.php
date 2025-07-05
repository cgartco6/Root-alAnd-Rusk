<?php
/*
Plugin Name: PayFast Gateway
Description: Accept PayFast payments in WooCommerce
*/

add_filter('woocommerce_payment_gateways', 'add_payfast_gateway');
function add_payfast_gateway($gateways) {
    $gateways[] = 'WC_Gateway_PayFast';
    return $gateways;
}

class WC_Gateway_PayFast extends WC_Payment_Gateway {
    public function __construct() {
        $this->id = 'payfast';
        $this->method_title = 'PayFast';
        $this->method_description = 'Secure SA gateway';
        $this->enabled = "yes";
    }
}
