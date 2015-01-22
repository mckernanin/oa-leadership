<?php
function oaldr_custom_taxonomy_group() {

	$labels = array(
		'name'                       => _x( 'Groups', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Group', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Group', 'text_domain' ),
		'all_items'                  => __( 'All Groups', 'text_domain' ),
		'parent_item'                => __( 'Parent Group', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Group:', 'text_domain' ),
		'new_item_name'              => __( 'New Group Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Group', 'text_domain' ),
		'edit_item'                  => __( 'Edit Group', 'text_domain' ),
		'update_item'                => __( 'Update Group', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate groups with commas', 'text_domain' ),
		'search_items'               => __( 'Search Group', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove groups', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used groups', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'oaldr_group', array( 'oaldr_position' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'oaldr_custom_taxonomy_group', 0 );