<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function project_taxonomy() {

	$labels = array(
		'name'                       => 'Project Types',
		'singular_name'              => 'Project Type',
		'menu_name'                  => 'Project Type',
		'all_items'                  => 'All Project Types',
		'parent_item'                => 'Parent',
		'parent_item_colon'          => 'Parent Project Type:',
		'new_item_name'              => 'New Project Type',
		'add_new_item'               => 'Add New Project Type',
		'edit_item'                  => 'Edit Project Type',
		'update_item'                => 'Update Project Type',
		'view_item'                  => 'View Project Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Types',
		'search_items'               => 'Search Project Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Project Type list',
		'items_list_navigation'      => 'Project Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_type', array( 'post' ), $args );

}
add_action( 'init', 'project_taxonomy', 0 );


// Register Custom Taxonomy
function teammember_taxonomy() {

	$labels = array(
		'name'                       => 'Teammember Types',
		'singular_name'              => 'Teammember Type',
		'menu_name'                  => 'Teammember Type',
		'all_items'                  => 'All Teammember Types',
		'parent_item'                => 'Parent',
		'parent_item_colon'          => 'Parent Teammember Type:',
		'new_item_name'              => 'New Teammember Type',
		'add_new_item'               => 'Add New Teammember Type',
		'edit_item'                  => 'Edit Teammember Type',
		'update_item'                => 'Update Teammember Type',
		'view_item'                  => 'View Teammember Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Types',
		'search_items'               => 'Search Teammember Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Teammember Type list',
		'items_list_navigation'      => 'Teammember Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Teammember_type', array( 'post' ), $args );

}
add_action( 'init', 'Teammember_taxonomy', 0 );