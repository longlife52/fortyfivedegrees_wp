<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    /*
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-format-status',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_staff',    // Taxonomy
        'staff',             // Object Type
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
    */

/* WORKSHOP */
    register_post_type('workshop', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Workshop', 'html5blank'), // Rename these to suit
            'singular_name' => __('Workshop', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Workshop', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Workshop', 'html5blank'),
            'new_item' => __('New Workshop', 'html5blank'),
            'view' => __('View Workshop', 'html5blank'),
            'view_item' => __('View Workshop', 'html5blank'),
            'search_items' => __('Search Workshop', 'html5blank'),
            'not_found' => __('No Workshops found', 'html5blank'),
            'not_found_in_trash' => __('No Workshops found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'excerpt',
            'editor',
            'revisions',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-info',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_workshop',    // Taxonomy
        'workshop',             // Object Type
        array(
            'label' => __( 'Type of Workshop' ),
            'rewrite' => array( 'slug' => 'workshop' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );

    /* TESTIMONIALS */
    register_post_type('testimonial', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Testimonial', 'html5blank'), // Rename these to suit
            'singular_name' => __('Testimonial', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Testimonial', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Testimonial', 'html5blank'),
            'new_item' => __('New Testimonial', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View Testimonial', 'html5blank'),
            'search_items' => __('Search Testimonial', 'html5blank'),
            'not_found' => __('No Testimonials found', 'html5blank'),
            'not_found_in_trash' => __('No Testimonials found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-smiley',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_testimonial',    // Taxonomy
        'testimonial',             // Object Type
        array(
            'label' => __( 'Type of Testimonial' ),
            'rewrite' => array( 'slug' => 'testimonial' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );

}
