<?php

// count amount of each product for 2 weeks
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

// Edit single page variable product pricing  on single price

add_action('woocommerce_before_single_product', 'move_variations_single_price', 1);
function move_variations_single_price()
{
  global $product, $post;
  if ($product->is_type('variable')) {
    add_action('woocommerce_single_product_summary', 'replace_variation_single_price', 10);
  }
}

function replace_variation_single_price()
{
?>
  <style>
    .woocommerce-variation-price {
      display: none;
    }
  </style>
  <script>
    jQuery(document).ready(function($) {
      var priceselector = '.product p.price';
      var originalprice = $(priceselector).html();

      $(document).on('show_variation', function() {
        $(priceselector).html($('.single_variation .woocommerce-variation-price').html());
      });
      $(document).on('hide_variation', function() {
        $(priceselector).html(originalprice);
      });
    });
  </script>
<?php
}

// add surprise section to product page 

add_action('woocommerce_after_single_product', 'add_surprise_section', 25);

function add_surprise_section() {
  // $surprise = get_template_part('template-parts/surprise');

  echo "<div class='surprise_media'>" . get_template_part('template-parts/surprise') . "</div>";
}