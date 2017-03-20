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
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
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
		'supports'              => array( 'title', 'revisions', 'custom-fields', ),
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
		'supports'              => array( 'title', 'revisions', 'custom-fields', ),
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
		'supports'              => array( 'title', 'revisions', 'custom-fields', ),
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
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
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
		'supports'              => array(  'title', 'editor', 'thumbnail', 'revisions', 'custom-fields',  ),
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
