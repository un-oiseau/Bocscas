<?php

add_action('acf/init', 'ocs_acf_init_block_types');
function ocs_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'additional-questions',
            'title'             => __('Additional questions'),
            'render_template'   => 'includes/acf-blocks/additional-questions.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Additional questions' ),
        ));

        acf_register_block_type(array(
            'name'              => 'additional-resources',
            'title'             => __('Additional Resources'),
            'render_template'   => 'includes/acf-blocks/additional-resources.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Additional Resources' ),
        ));

        acf_register_block_type(array(
            'name'              => 'aff-table',
            'title'             => __('Aff Table'),
            'render_template'   => 'includes/acf-blocks/aff-table.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Aff Table' ),
        ));

        acf_register_block_type(array(
            'name'              => 'brand-review',
            'title'             => __('Brand Review'),
            'render_template'   => 'includes/acf-blocks/brand-review.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Brand Review' ),
        ));

        acf_register_block_type(array(
            'name'              => 'content-links',
            'title'             => __('Content Links'),
            'render_template'   => 'includes/acf-blocks/content-links.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Content Links' ),
        ));

        acf_register_block_type(array(
            'name'              => 'expert',
            'title'             => __('Expert'),
            'render_template'   => 'includes/acf-blocks/expert.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Expert' ),
        ));

        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'render_template'   => 'includes/acf-blocks/faq.php',
            'category'          => 'formatting',
            'keywords'          => array( 'FAQ' ),
        ));

        acf_register_block_type(array(
            'name'              => 'helpfull-info',
            'title'             => __('Helpfull info'),
            'render_template'   => 'includes/acf-blocks/helpfull-info.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Helpfull info' ),
        ));

        acf_register_block_type(array(
            'name'              => 'important-info',
            'title'             => __('Important Info'),
            'render_template'   => 'includes/acf-blocks/important-info.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Important Info' ),
        ));

        acf_register_block_type(array(
            'name'              => 'linking-block',
            'title'             => __('Linking Block (Brands)'),
            'render_template'   => 'includes/acf-blocks/linking-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Linking Block (Brands)' ),
        ));

        acf_register_block_type(array(
            'name'              => 'ordered-list',
            'title'             => __('Ordered list with description'),
            'render_template'   => 'includes/acf-blocks/ordered-list.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Ordered list with description' ),
        ));

        acf_register_block_type(array(
            'name'              => 'pros-cons',
            'title'             => __('ProsCons'),
            'render_template'   => 'includes/acf-blocks/pros-cons.php',
            'category'          => 'formatting',
            'keywords'          => array( 'ProsCons' ),
        ));

        acf_register_block_type(array(
            'name'              => 'slot-review',
            'title'             => __('Slot Review'),
            'render_template'   => 'includes/acf-blocks/slot-review.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Slot Review' ),
        ));

        acf_register_block_type(array(
            'name'              => 'top-3',
            'title'             => __('Top 3'),
            'render_template'   => 'includes/acf-blocks/top-3.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Top-3' ),
        ));

        acf_register_block_type(array(
            'name'              => 'top-game',
            'title'             => __('Top Game'),
            'render_template'   => 'includes/acf-blocks/top-game.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Top Game' ),
        ));

        acf_register_block_type(array(
            'name'              => 'top-offer',
            'title'             => __('Top Offer'),
            'render_template'   => 'includes/acf-blocks/top-offer.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Top Offer' ),
        ));
        acf_register_block_type(array(
            'name'              => 'top-4',
            'title'             => __('Top 4'),
            'render_template'   => 'includes/acf-blocks/top-4.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Top-4' ),
        ));

    }
}

?>
