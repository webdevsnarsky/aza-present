<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        //register about promo block.
        acf_register_block_type(array(
            'name'              => 'promo',
            'title'             => __('promo/ промо секция'),
            'description'       => __('promo'),
            'render_template'   => 'template-parts/blocks/promo.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'promo', 'о промо' ),
        ));

        //register about surprise block.
        acf_register_block_type(array(
            'name'              => 'surprise',
            'title'             => __('surprise/секция о сюрпризе'),
            'description'       => __('surprise'),
            'render_template'   => 'template-parts/blocks/surprise.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'surprise', 'о сюрпризах' ),
        ));

        //register about contacts block.
        acf_register_block_type(array(
            'name'              => 'contacts',
            'title'             => __('contacts/ секция контакты'),
            'description'       => __('contacts'),
            'render_template'   => 'template-parts/blocks/contacts.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contacts', 'контакты' ),
        ));

        //register posts block.
        acf_register_block_type(array(
            'name'              => 'posts',
            'title'             => __('posts/записи'),
            'description'       => __('posts'),
            'render_template'   => 'template-parts/blocks/posts.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'posts', 'о постах' ),
        ));
    }
}