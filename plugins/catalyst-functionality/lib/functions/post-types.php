<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
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
		'description'           => 'porjects list',
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



// Register Custom Post Type
function teammember_cpt() {

	$labels = array(
		'name'                  => 'Teammembers',
		'singular_name'         => 'Teammember',
		'menu_name'             => 'Teammembers',
		'name_admin_bar'        => 'Teammembers',
		'archives'              => 'Teammember Archives',
		'attributes'            => 'Teammember Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Teammembers',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New Teammember',
		'new_item'              => 'New Teammember',
		'edit_item'             => 'Edit Teammember',
		'update_item'           => 'Update Teammember',
		'view_item'             => 'View Teammember',
		'view_items'            => 'View Teammembers',
		'search_items'          => 'Search Teammember',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Teammembers list',
		'items_list_navigation' => 'Teammembers list navigation',
		'filter_items_list'     => 'Filter Teammembers list',
	);
	$args = array(
		'label'                 => 'Teammember',
		'description'           => 'teammember list',
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
	register_post_type( 'teammember', $args );

}
add_action( 'init', 'teammember_cpt', 0 );