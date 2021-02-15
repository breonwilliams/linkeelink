<?php

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a card block.
        acf_register_block_type(array(
            'name'              => 'card',
            'title'             => __('Card'),
            'description'       => __('A custom card block.'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'template-parts/blocks/card/card.php',
            'category'          => 'formatting',
        ));
    }
}
