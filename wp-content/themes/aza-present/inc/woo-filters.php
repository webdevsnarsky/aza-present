<?php 

// remove woo title 

add_filter( 'woocommerce_show_page_title', '__return_false' );

// remove tab in protuct page
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}