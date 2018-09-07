<?php
/**
 * @package Foundry
 * @author TommusRhodus
 * @version 9.9.9
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( $price_html = $product->get_price_html() )
	echo htmlspecialchars_decode($price_html);