<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

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

function team_member_cpt() {

	$labels = array(
		'name'                  => 'Team members',
		'singular_name'         => 'Team member',
		'menu_name'             => 'Team members',
		'name_admin_bar'        => 'Team members',
		'archives'              => 'Team member Archives',
		'attributes'            => 'Team member Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Team members',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Team member',
		'new_item'              => 'New Team member',
		'edit_item'             => 'Edit Team member',
		'update_item'           => 'Update Team member',
		'view_item'             => 'View Team member',
		'view_items'            => 'View Team members',
		'search_items'          => 'Search Team member',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Team members list',
		'items_list_navigation' => 'Team members list navigation',
		'filter_items_list'     => 'Filter Team members list',
	);
	$args = array(
		'label'                 => 'Team member',
		'description'           => 'team member list',
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
	register_post_type( 'team_member', $args );

}
add_action( 'init', 'team_member_cpt', 0 );


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
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'career_cpt', 0 );

// Register Sponsors Custom Post Type

function sponsor_cpt() {

	$labels = array(
		'name'                  => _x( 'sponsors', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'sponsor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sponsors', 'text_domain' ),
		'name_admin_bar'        => __( 'Sponsors', 'text_domain' ),
		'archives'              => __( 'Sponsor Archives', 'text_domain' ),
		'attributes'            => __( 'Sponsor Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Sponsors', 'text_domain' ),
		'add_new_item'          => __( 'Add New Sponsor', 'text_domain' ),
		'add_new'               => __( 'Add New Sponsor', 'text_domain' ),
		'new_item'              => __( 'New Sponsor', 'text_domain' ),
		'edit_item'             => __( 'Edit Sponsor', 'text_domain' ),
		'update_item'           => __( 'Update Sponsor', 'text_domain' ),
		'view_item'             => __( 'View Sponsor', 'text_domain' ),
		'view_items'            => __( 'View Sponsors', 'text_domain' ),
		'search_items'          => __( 'Search Sponsors', 'text_domain' ),
		'not_found'             => __( 'Sponsor Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Sponsors list', 'text_domain' ),
		'items_list_navigation' => __( 'Sponsors list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Sponsors list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'sponsor', 'text_domain' ),
		'description'           => __( 'Catalyst\'s sponsors', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', ),
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