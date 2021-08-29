<?php

// single-product.php 
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// content-single-product 
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


add_action('woocommerce_single_product_summary', 'bbloomer_product_sold_count_2_week', 31);

function bbloomer_product_sold_count_2_week()
{
  global $product;

  // GET LAST WEEK ORDERS
  $all_orders = wc_get_orders(
    array(
      'limit' => -1,
      'status' => array_map('wc_get_order_status_name', wc_get_is_paid_statuses()),
      'date_after' => date('Y-m-d', strtotime('-2 week')),
      'return' => 'ids',
    )
  );

  // LOOP THROUGH ORDERS AND SUM QUANTITIES PURCHASED
  $count = 0;
  foreach ($all_orders as $all_order) {
    $order = wc_get_order($all_order);
    $items = $order->get_items();
    foreach ($items as $item) {
      $product_id = $item->get_product_id();
      if ($product_id == $product->get_id()) {
        $count = $count + absint($item['qty']);
      }
    }
  }

  if ($count > 0) echo "<div><span class='txt-bright'>$count</span><span> За последние 14 дней этот товар купили $count раз</span></div>";
}