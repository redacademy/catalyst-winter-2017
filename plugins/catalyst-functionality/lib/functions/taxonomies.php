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
function team_member_taxonomy() {

	$labels = array(
		'name'                       => 'Team member Types',
		'singular_name'              => 'Team member Type',
		'menu_name'                  => 'Team member Type',
		'all_items'                  => 'All Team member Types',
		'parent_item'                => 'Parent',
		'parent_item_colon'          => 'Parent Team member Type:',
		'new_item_name'              => 'New Team member Type',
		'add_new_item'               => 'Add New Team member Type',
		'edit_item'                  => 'Edit Team member Type',
		'update_item'                => 'Update Team member Type',
		'view_item'                  => 'View Team member Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Types',
		'search_items'               => 'Search Team member Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Team member Type list',
		'items_list_navigation'      => 'Team member Type list navigation',
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
	register_taxonomy( 'team_member_type', array( 'post' ), $args );

}
add_action( 'init', 'team_member_taxonomy', 0 );


// Register Custom Taxonomy
function careers_taxonomy() {

	$labels = array(
		'name'                       => 'Career Types',
		'singular_name'              => 'Career Type',
		'menu_name'                  => 'Career Type',
		'all_items'                  => 'All Career Types',
		'parent_item'                => 'Parent',
		'parent_item_colon'          => 'Parent Career Type:',
		'new_item_name'              => 'New Career Type',
		'add_new_item'               => 'Add New Career Type',
		'edit_item'                  => 'Edit Career Type',
		'update_item'                => 'Update Career Type',
		'view_item'                  => 'View Career Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Types',
		'search_items'               => 'Search Career Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Career Type list',
		'items_list_navigation'      => 'Career Type list navigation',
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
	register_taxonomy( 'careers_type', array( 'post' ), $args );

}
add_action( 'init', 'careers_taxonomy', 0 );