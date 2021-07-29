<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a promo block.
        // acf_register_block_type(array(
        //     'name'              => 'promo',
        //     'title'             => __('promo/секция промо'),
        //     'description'       => __('promo'),
        //     'render_template'   => 'template-parts/blocks/promo.php',
        //     'category'          => 'formatting',
        //     'icon'              => 'admin-comments',
        //     'keywords'          => array( 'promo', 'промо' ),
        // ));
    }
}