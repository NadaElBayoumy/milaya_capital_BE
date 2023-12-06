<?php
function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

// Register Custom Post Type
function custom_page_section_post_type() {

    $labels = array(
        'name'                  => _x( 'Home Page Sections', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Home Page Section', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Home Page Sections', 'text_domain' ),
        'name_admin_bar'        => __( 'Home Page Section', 'text_domain' ),
        'archives'              => __( 'Home Page Section Archives', 'text_domain' ),
        'attributes'            => __( 'Home Page Section Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Page Section:', 'text_domain' ),
        'all_items'             => __( 'All Page Sections', 'text_domain' ),
        'add_new_item'          => __( 'Add New Page Section', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Page Section', 'text_domain' ),
        'edit_item'             => __( 'Edit Page Section', 'text_domain' ),
        'update_item'           => __( 'Update Page Section', 'text_domain' ),
        'view_item'             => __( 'View Page Section', 'text_domain' ),
        'view_items'            => __( 'View Page Sections', 'text_domain' ),
        'search_items'          => __( 'Search Page Sections', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Page Sections list', 'text_domain' ),
        'items_list_navigation' => __( 'Page Sections list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Page Sections list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Page Section', 'text_domain' ),
        'description'           => __( 'Custom Page Sections for your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, 
    );
    register_post_type( 'page_section', $args );

}
add_action( 'init', 'custom_page_section_post_type', 0 );



// Register Custom Post Type
function custom_what_we_do_post_type() {

    $labels = array(
        'name'                  => _x( 'What We Do', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'What We Do', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'What We Do', 'text_domain' ),
        'name_admin_bar'        => __( 'What We Do', 'text_domain' ),
        'archives'              => __( 'What We Do Archives', 'text_domain' ),
        'attributes'            => __( 'What We Do Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent What We Do:', 'text_domain' ),
        'all_items'             => __( 'All What We Do', 'text_domain' ),
        'add_new_item'          => __( 'Add New What We Do', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New What We Do', 'text_domain' ),
        'edit_item'             => __( 'Edit What We Do', 'text_domain' ),
        'update_item'           => __( 'Update What We Do', 'text_domain' ),
        'view_item'             => __( 'View What We Do', 'text_domain' ),
        'view_items'            => __( 'View What We Do', 'text_domain' ),
        'search_items'          => __( 'Search What We Do', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'What We Do list', 'text_domain' ),
        'items_list_navigation' => __( 'What We Do list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter What We Do list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'What We Do', 'text_domain' ),
        'description'           => __( 'Custom content for "What We Do" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'what_we_do', $args );

}
add_action( 'init', 'custom_what_we_do_post_type', 0 );


// Register Custom Post Type
function custom_business_heights_post_type() {

    $labels = array(
        'name'                  => _x( 'Business Heights', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Business Height', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Business Heights', 'text_domain' ),
        'name_admin_bar'        => __( 'Business Height', 'text_domain' ),
        'archives'              => __( 'Business Heights Archives', 'text_domain' ),
        'attributes'            => __( 'Business Heights Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Business Height:', 'text_domain' ),
        'all_items'             => __( 'All Business Heights', 'text_domain' ),
        'add_new_item'          => __( 'Add New Business Height', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Business Height', 'text_domain' ),
        'edit_item'             => __( 'Edit Business Height', 'text_domain' ),
        'update_item'           => __( 'Update Business Height', 'text_domain' ),
        'view_item'             => __( 'View Business Height', 'text_domain' ),
        'view_items'            => __( 'View Business Heights', 'text_domain' ),
        'search_items'          => __( 'Search Business Heights', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Business Heights list', 'text_domain' ),
        'items_list_navigation' => __( 'Business Heights list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Business Heights list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Business Height', 'text_domain' ),
        'description'           => __( 'Custom content for "Business Heights" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'business_heights', $args );

}
add_action( 'init', 'custom_business_heights_post_type', 0 );



// Register Custom Post Type
function custom_why_choose_post_type() {

    $labels = array(
        'name'                  => _x( 'Why Choose', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Why Choose', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Why Choose', 'text_domain' ),
        'name_admin_bar'        => __( 'Why Choose', 'text_domain' ),
        'archives'              => __( 'Why Choose Archives', 'text_domain' ),
        'attributes'            => __( 'Why Choose Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Why Choose:', 'text_domain' ),
        'all_items'             => __( 'All Why Choose', 'text_domain' ),
        'add_new_item'          => __( 'Add New Why Choose', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Why Choose', 'text_domain' ),
        'edit_item'             => __( 'Edit Why Choose', 'text_domain' ),
        'update_item'           => __( 'Update Why Choose', 'text_domain' ),
        'view_item'             => __( 'View Why Choose', 'text_domain' ),
        'view_items'            => __( 'View Why Choose', 'text_domain' ),
        'search_items'          => __( 'Search Why Choose', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Why Choose list', 'text_domain' ),
        'items_list_navigation' => __( 'Why Choose list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Why Choose list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Why Choose', 'text_domain' ),
        'description'           => __( 'Custom content for "Why Choose" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'why_choose', $args );

}
add_action( 'init', 'custom_why_choose_post_type', 0 );

// Register Custom Post Type
function custom_clients_post_type() {

    $labels = array(
        'name'                  => _x( 'Clients', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Clients', 'text_domain' ),
        'name_admin_bar'        => __( 'Client', 'text_domain' ),
        'archives'              => __( 'Clients Archives', 'text_domain' ),
        'attributes'            => __( 'Client Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Client:', 'text_domain' ),
        'all_items'             => __( 'All Clients', 'text_domain' ),
        'add_new_item'          => __( 'Add New Client', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Client', 'text_domain' ),
        'edit_item'             => __( 'Edit Client', 'text_domain' ),
        'update_item'           => __( 'Update Client', 'text_domain' ),
        'view_item'             => __( 'View Client', 'text_domain' ),
        'view_items'            => __( 'View Clients', 'text_domain' ),
        'search_items'          => __( 'Search Clients', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Clients list', 'text_domain' ),
        'items_list_navigation' => __( 'Clients list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Clients list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Client', 'text_domain' ),
        'description'           => __( 'Custom content for "Clients" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'clients', $args );

}
add_action( 'init', 'custom_clients_post_type', 0 );


// Add Meta Box for Image
function add_clients_image_meta_box() {
    add_meta_box(
        'clients_image_meta_box', // Unique ID
        'Client Grey Scale Image', // Box title
        'render_clients_image_meta_box', // Content callback function
        'clients', // Add this meta box to the "clients" custom post type
        'normal', // Context
        'default' // Priority
    );
}
add_action('add_meta_boxes', 'add_clients_image_meta_box');

// Render Meta Box Content
function render_clients_image_meta_box($post) {
    // Retrieve existing value from the database
    $client_image = get_post_meta($post->ID, '_client_image', true);

    // Use nonce for verification
    wp_nonce_field(basename(__FILE__), 'clients_image_nonce');

    // Display the form
    ?>
    <label for="client_image">Upload Image:</label>
    <input type="text" name="client_image" id="client_image" class="meta-image-field" value="<?php echo esc_attr($client_image); ?>">
    <input type="button" class="button button-primary meta-image-button" value="Choose or Upload an Image">
    <p class="description">Enter an image URL or upload an image for the client.</p>
    <?php
}

// Save Meta Box Content
function save_clients_image_meta_box($post_id) {
    // Verify nonce
    if (!isset($_POST['clients_image_nonce']) || !wp_verify_nonce($_POST['clients_image_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // Check if the current user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Save the meta box value
    $client_image = sanitize_text_field($_POST['client_image']);
    update_post_meta($post_id, '_client_image', $client_image);
}
add_action('save_post', 'save_clients_image_meta_box');


function custom_page_overview_post_type() {

    $labels = array(
        'name'                  => _x( 'Page Overview', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Page Overview', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Page Overview', 'text_domain' ),
        'name_admin_bar'        => __( 'Page Overview', 'text_domain' ),
        'archives'              => __( 'Page Overview Archives', 'text_domain' ),
        'attributes'            => __( 'Page Overview Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Page Overview:', 'text_domain' ),
        'all_items'             => __( 'All Page Overviews', 'text_domain' ),
        'add_new_item'          => __( 'Add New Page Overview', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Page Overview', 'text_domain' ),
        'edit_item'             => __( 'Edit Page Overview', 'text_domain' ),
        'update_item'           => __( 'Update Page Overview', 'text_domain' ),
        'view_item'             => __( 'View Page Overview', 'text_domain' ),
        'view_items'            => __( 'View Page Overviews', 'text_domain' ),
        'search_items'          => __( 'Search Page Overviews', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Page Overview list', 'text_domain' ),
        'items_list_navigation' => __( 'Page Overview list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Page Overview list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Page Overview', 'text_domain' ),
        'description'           => __( 'Custom content for "Page Overview" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'page_overview', $args );

}
add_action( 'init', 'custom_page_overview_post_type', 0 );

function custom_about_page_sections_post_type() {

    $labels = array(
        'name'                  => _x( 'About Page Sections', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'About Page Section', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'About Page Sections', 'text_domain' ),
        'name_admin_bar'        => __( 'About Page Section', 'text_domain' ),
        'archives'              => __( 'About Page Sections Archives', 'text_domain' ),
        'attributes'            => __( 'About Page Section Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent About Page Section:', 'text_domain' ),
        'all_items'             => __( 'All About Page Sections', 'text_domain' ),
        'add_new_item'          => __( 'Add New About Page Section', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New About Page Section', 'text_domain' ),
        'edit_item'             => __( 'Edit About Page Section', 'text_domain' ),
        'update_item'           => __( 'Update About Page Section', 'text_domain' ),
        'view_item'             => __( 'View About Page Section', 'text_domain' ),
        'view_items'            => __( 'View About Page Sections', 'text_domain' ),
        'search_items'          => __( 'Search About Page Sections', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'About Page Sections list', 'text_domain' ),
        'items_list_navigation' => __( 'About Page Sections list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter About Page Sections list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'About Page Section', 'text_domain' ),
        'description'           => __( 'Custom content for "About Page Sections" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'about_page_sections', $args );

}
add_action( 'init', 'custom_about_page_sections_post_type', 0 );

// Register Custom Post Type
function custom_counters_post_type() {

    $labels = array(
        'name'                  => _x( 'Counters', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Counter', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Counters', 'text_domain' ),
        'name_admin_bar'        => __( 'Counter', 'text_domain' ),
        'archives'              => __( 'Counters Archives', 'text_domain' ),
        'attributes'            => __( 'Counter Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Counter:', 'text_domain' ),
        'all_items'             => __( 'All Counters', 'text_domain' ),
        'add_new_item'          => __( 'Add New Counter', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Counter', 'text_domain' ),
        'edit_item'             => __( 'Edit Counter', 'text_domain' ),
        'update_item'           => __( 'Update Counter', 'text_domain' ),
        'view_item'             => __( 'View Counter', 'text_domain' ),
        'view_items'            => __( 'View Counters', 'text_domain' ),
        'search_items'          => __( 'Search Counters', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Counters list', 'text_domain' ),
        'items_list_navigation' => __( 'Counters list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Counters list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Counter', 'text_domain' ),
        'description'           => __( 'Custom content for "Counters" on your website', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable REST API support
    );
    register_post_type( 'counters', $args );

}
add_action( 'init', 'custom_counters_post_type', 0 );
?>