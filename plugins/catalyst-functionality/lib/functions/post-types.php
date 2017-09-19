<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Projects Custom Post Type

function projects_cpt() {

	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Projects',
		'archives'              => 'Project Archives',
		'attributes'            => 'Project Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Project',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'view_items'            => 'View Projects',
		'search_items'          => 'Search Porject',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Projects list',
		'items_list_navigation' => 'Projects list navigation',
		'filter_items_list'     => 'Filter projects list',
	);
	$args = array(
		'label'                 => 'Project',
		'description'           => 'projects list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects_cpt', 0 );



// Register Team Member Custom Post Type

function staff_cpt() {

	$labels = array(
		'name'                  => 'Staff',
		'singular_name'         => 'Staf',
		'menu_name'             => 'Staff',
		'name_admin_bar'        => 'Staff',
		'archives'              => 'Staff Archives',
		'attributes'            => 'Staff Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Staff Members',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Staff Member',
		'new_item'              => 'New Staff Member',
		'edit_item'             => 'Edit Staff Member',
		'update_item'           => 'Update Staff Member',
		'view_item'             => 'View Staff Member',
		'view_items'            => 'View Staff Members',
		'search_items'          => 'Search Staff Member',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Staff List',
		'items_list_navigation' => 'Staff list navigation',
		'filter_items_list'     => 'Filter Staff list',
	);
	$args = array(
		'label'                 => 'Staff',
		'description'           => 'Staff list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions', 'custom-fields' ),
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
		'capability_type'       => 'post',
	);
	register_post_type( 'staff', $args );

}
add_action( 'init', 'staff_cpt', 0 );

// Register Board Member Custom Post Type

function board_cpt() {

	$labels = array(
		'name'                  => 'Board',
		'singular_name'         => 'Board',
		'menu_name'             => 'Board Members',
		'name_admin_bar'        => 'Board Members',
		'archives'              => 'Board Member Archives',
		'attributes'            => 'Board Member Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Board Members',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Board Member',
		'new_item'              => 'New Board Member',
		'edit_item'             => 'Edit Board Member',
		'update_item'           => 'Update Board Member',
		'view_item'             => 'View Board Member',
		'view_items'            => 'View Board Members',
		'search_items'          => 'Search Board Member',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Board members list',
		'items_list_navigation' => 'Board members list navigation',
		'filter_items_list'     => 'Filter board members list',
	);
	$args = array(
		'label'                 => 'Board',
		'description'           => 'Board member list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions' ),
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
		'capability_type'       => 'post',
	);
	register_post_type( 'board', $args );

}
add_action( 'init', 'board_cpt', 0 );

// Register Board Member Custom Post Type

function committee_cpt() {

	$labels = array(
		'name'                  => 'Committee Members',
		'singular_name'         => 'Committee Member',
		'menu_name'             => 'Committee Members',
		'name_admin_bar'        => 'Committee Members',
		'archives'              => 'Committee Member Archives',
		'attributes'            => 'Committee Member Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Committee Members',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Committee Member',
		'new_item'              => 'New Committee Member',
		'edit_item'             => 'Edit Committee Member',
		'update_item'           => 'Update Committee Member',
		'view_item'             => 'View Committee Member',
		'view_items'            => 'View Committee Members',
		'search_items'          => 'Search Committee Member',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Committee members list',
		'items_list_navigation' => 'Committee members list navigation',
		'filter_items_list'     => 'Filter committee members list',
	);
	$args = array(
		'label'                 => 'Committee Members',
		'description'           => 'Committee members list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions' ),
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
		'capability_type'       => 'post',
	);
	register_post_type( 'committee', $args );

}
add_action( 'init', 'committee_cpt', 0 );

// Register Advisors Custom Post Type

function advisors_cpt() {

	$labels = array(
		'name'                  => 'Advisors',
		'singular_name'         => 'Advisors',
		'menu_name'             => 'Advisors',
		'name_admin_bar'        => 'Advisors',
		'archives'              => 'Advisor Archives',
		'attributes'            => 'Advisor Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Advisors',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Advisor',
		'new_item'              => 'New Advisor',
		'edit_item'             => 'Edit Advisor',
		'update_item'           => 'Update Advisor',
		'view_item'             => 'View Advisor',
		'view_items'            => 'View Advisors',
		'search_items'          => 'Search Advisors',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Advisors list',
		'items_list_navigation' => 'Advisors list navigation',
		'filter_items_list'     => 'Filter Advisors list',
	);
	$args = array(
		'label'                 => 'Advisor',
		'description'           => 'Advisor list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions' ),
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
		'capability_type'       => 'post',
	);
	register_post_type( 'advisors', $args );

}
add_action( 'init', 'advisors_cpt', 0 );


// Register Careers Custom Post Type

function careers_cpt() {

	$labels = array(
		'name'                  => 'Careers',
		'singular_name'         => 'Career',
		'menu_name'             => 'Careers',
		'name_admin_bar'        => 'Careers',
		'archives'              => 'Career Archives',
		'attributes'            => 'Career Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Careers',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Career',
		'new_item'              => 'New Career',
		'edit_item'             => 'Edit Career',
		'update_item'           => 'Update Career',
		'view_item'             => 'View Career',
		'view_items'            => 'View Careers',
		'search_items'          => 'Search Career',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Careers list',
		'items_list_navigation' => 'Careers list navigation',
		'filter_items_list'     => 'Filter Careers list',
	);
	$args = array(
		'label'                 => 'Career',
		'description'           => 'Career list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'careers', $args );

}

add_action( 'init', 'careers_cpt', 0 );

// Register Sponsors Custom Post Type

function sponsor_cpt() {

	$labels = array(
		'name'                  => 'Sponsors',
		'singular_name'         => 'Sponsor',
		'menu_name'             => 'Sponsors',
		'name_admin_bar'        => 'Sponsors',
		'archives'              => 'Sponsor Archives',
		'attributes'            => 'Sponsor Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Sponsors',
		'add_new_item'          => 'Add New Sponsor',
		'add_new'               => 'Add New Sponsor',
		'new_item'              => 'New Sponsor',
		'edit_item'             => 'Edit Sponsor',
		'update_item'           => 'Update Sponsor',
		'view_item'             => 'View Sponsor',
		'view_items'            => 'View Sponsors',
		'search_items'          => 'Search Sponsors',
		'not_found'             => 'Sponsor Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Sponsors list',
		'items_list_navigation' => 'Sponsors list navigation',
		'filter_items_list'     => 'Filter Sponsors list',
	);
	$args = array(
		'label'                 => 'sponsor',
		'description'           => 'Catalyst\'s sponsors',
		'labels'                => $labels,
		'supports'              => array(  'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sponsor', $args );

}
add_action( 'init', 'sponsor_cpt', 0 );


// news media Custom Post Type
// Register Custom Post Type
function newsmedia_cpt() {

	$labels = array(
		'name'                  => 'NewsMedia',
		'singular_name'         => 'NewsMedia',
		'menu_name'             => 'NewsMedia',
		'name_admin_bar'        => 'NewsMedia',
		'archives'              => 'NewsMedia Archives',
		'attributes'            => 'NewsMedia Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All News and Media',
		'add_new_item'          => 'Add News and Media',
		'add_new'               => 'Add New and Media',
		'new_item'              => 'New News and Media',
		'edit_item'             => 'Edit News and Media',
		'update_item'           => 'Update News and Media',
		'view_item'             => 'View News and Media',
		'view_items'            => 'View News and Medias',
		'search_items'          => 'Search News and Media',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'NewsMedia',
		'description'           => 'news and media articles',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_rest'			=> true,
		'rest_base'          => 'news',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'newsmedia', $args );

}
add_action( 'init', 'newsmedia_cpt', 0 );


// Register renters page Custom Post Type

function renters_cpt() {

	$labels = array(
		'name'                  => 'Renters',
		'singular_name'         => 'Renter',
		'menu_name'             => 'Renters Info',
		'name_admin_bar'        => 'Renters',
		'archives'              => 'Renter Archives',
		'attributes'            => 'Renter Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Project',
		'new_item'              => 'New Renter',
		'edit_item'             => 'Edit Renter',
		'update_item'           => 'Update Renter',
		'view_item'             => 'View Renter',
		'view_items'            => 'View Renters',
		'search_items'          => 'Search Porject',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Renters list',
		'items_list_navigation' => 'Renters list navigation',
		'filter_items_list'     => 'Filter Renters list',
	);
	$args = array(
		'label'                 => 'Renter',
		'description'           => 'renters list',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'renters', $args );

}
add_action( 'init', 'renters_cpt', 0 );

// Register Custom Post Type
function np_testimonials() {

	$labels = array(
		'name'                  => _x( 'Non-Profit Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Non-Profit Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Non-Profit Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Non-Profit Testimonials', 'text_domain' ),
		'archives'              => __( 'Non-Profit Testimonial Archives', 'text_domain' ),
		'attributes'            => __( 'Non-Profit Testimonial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add New Testimonial', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'view_items'            => __( 'View Testimonial', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Testimonial Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Testimonial Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Tesimonials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Non-Profit Testimonial', 'text_domain' ),
		'description'           => __( 'Testimonials from non-profit partners', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'author', 'custom-fields', 'post-formats', ),
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
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'np_testimonials', $args );

}
add_action( 'init', 'np_testimonials', 0 );

// Register Custom Post Type
function inv_testimonials() {

	$labels = array(
		'name'                  => _x( 'Investor Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Investor Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Investor Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Investor Testimonials', 'text_domain' ),
		'archives'              => __( 'Investor Testimonial Archives', 'text_domain' ),
		'attributes'            => __( 'Investor Testimonial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add New Testimonial', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'view_items'            => __( 'View Testimonial', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Testimonial Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Testimonial Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Tesimonials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Investor Testimonials', 'text_domain' ),
		'description'           => __( 'Testimonials from investor partners', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'author', 'custom-fields', 'post-formats', ),
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
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'inv_testimonials', $args );

}
add_action( 'init', 'inv_testimonials', 0 );


