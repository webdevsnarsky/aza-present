<?php

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
 
function add_my_currency_symbol( $currency_symbol, $currency ) {
switch( $currency ) {
case 'BYN': $currency_symbol = '&nbsp;руб.'; break;
}
return $currency_symbol;
}