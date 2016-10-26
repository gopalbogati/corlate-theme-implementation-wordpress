<?php
/*function for making slider of content*/
function slider_init() {

	$labels = array(
		'name'               => _x( 'Slider', 'post type general name', 'cl-textdomain' ),
		'singular_name'      => _x( 'slide', 'post type singular name', 'cl-textdomain' ),
		'menu_name'          => _x( 'PostSlider', 'admin menu', 'cl-textdomain' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'cl-textdomain' ),
		'add_new'            => _x( 'Add New', 'slider', 'cl-textdomain' ),
		'add_new_item'       => __( 'Add New slide', 'cl-textdomain' ),
		'new_item'           => __( 'New slide', 'cl-textdomain' ),
		'edit_item'          => __( 'Edit slide', 'cl-textdomain' ),
		'view_item'          => __( 'View slide', 'cl-textdomain' ),
		'all_items'          => __( 'All slider', 'cl-textdomain' ),
		'search_items'       => __( 'Search slide', 'cl-textdomain' ),
		'parent_item_colon'  => __( 'Parent slide:', 'cl-textdomain' ),
		'not_found'          => __( 'No slide found.', 'cl-textdomain' ),
		'not_found_in_trash' => __( 'No slide found in Trash.', 'cl-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'cl-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

	register_post_type( 'slider', $args );
	}





	/*function for making testimonials of content*/

add_action( 'init', 'testimonial_init' );




function testimonial_init() {
	$labels = array(
		'name'               => _x( 'testimonial', 'post type general name', 'cl-textdomain' ),
		'singular_name'      => _x( 'testimonial', 'post type singular name', 'cl-textdomain' ),
		'menu_name'          => _x( 'testimonial ', 'admin menu', 'cl-textdomain' ),
		'name_admin_bar'     => _x( 'testimonial', 'add new on admin bar', 'cl-textdomain' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'cl-textdomain' ),
		'add_new_item'       => __( 'Add New testimonial', 'cl-textdomain' ),
		'new_item'           => __( 'New testimonial', 'cl-textdomain' ),
		'edit_item'          => __( 'Edit testimonial', 'cl-textdomain' ),
		'view_item'          => __( 'View testimonial', 'cl-textdomain' ),
		'all_items'          => __( 'All testimonial', 'cl-textdomain' ),
		'search_items'       => __( 'Search testimonial', 'cl-textdomain' ),
		'parent_item_colon'  => __( 'Parent testimonial:', 'cl-textdomain' ),
		'not_found'          => __( 'No testimonial found.', 'cl-textdomain' ),
		'not_found_in_trash' => __( 'No testimonial found in Trash.', 'cl-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'cl-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'testimonial', $args );
}

/*function for making Aboutsliders of content*/

add_action( 'init', 'Aboutslider_init' );




function Aboutslider_init() {
	$labels = array(
		'name'               => _x( 'Aboutslider', 'post type general name', 'cl-textdomain' ),
		'singular_name'      => _x( 'Aboutslider', 'post type singular name', 'cl-textdomain' ),
		'menu_name'          => _x( 'Aboutslider ', 'admin menu', 'cl-textdomain' ),
		'name_admin_bar'     => _x( 'Aboutslider', 'add new on admin bar', 'cl-textdomain' ),
		'add_new'            => _x( 'Add New', 'Aboutslider', 'cl-textdomain' ),
		'add_new_item'       => __( 'Add New Aboutslider', 'cl-textdomain' ),
		'new_item'           => __( 'New Aboutslider', 'cl-textdomain' ),
		'edit_item'          => __( 'Edit Aboutslider', 'cl-textdomain' ),
		'view_item'          => __( 'View Aboutslider', 'cl-textdomain' ),
		'all_items'          => __( 'All Aboutslider', 'cl-textdomain' ),
		'search_items'       => __( 'Search Aboutslider', 'cl-textdomain' ),
		'parent_item_colon'  => __( 'Parent Aboutslider:', 'cl-textdomain' ),
		'not_found'          => __( 'No Aboutslider found.', 'cl-textdomain' ),
		'not_found_in_trash' => __( 'No Aboutslider found in Trash.', 'cl-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'cl-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Aboutslider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'Aboutslider', $args );
}





/**
*Register custom post type portfolios
*/
function portfolio_custom_init_portfolios() {
    $labels = array(
		'name'               => _x( 'portfolios', 'post type general name', 'portfolio_textdomain' ),
		'singular_name'      => _x( 'portfolio', 'post type singular name', 'portfolio_textdomain' ),
		'menu_name'          => _x( 'portfolios', 'admin menu', 'portfolio_textdomain' ),
		'name_admin_bar'     => _x( 'portfolios', 'add new on admin bar', 'portfolio_textdomain' ),
		'add_new'            => _x( 'Add portfolios', 'portfolios', 'portfolio_textdomain' ),
		'add_new_item'       => __( 'Add New portfolio', 'portfolio_textdomain' ),
		'new_item'           => __( 'New portfolio', 'portfolio_textdomain' ),
		'edit_item'          => __( 'Edit portfolio', 'portfolio_textdomain' ),
		'view_item'          => __( 'View portfolio', 'portfolio_textdomain' ),
		'all_items'          => __( 'All portfolios', 'portfolio_textdomain' ),
		'search_items'       => __( 'Search portfolios', 'portfolio_textdomain' ),
		'parent_item_colon'  => __( 'Parent portfolios:', 'portfolio_textdomain' ),
		'not_found'          => __( 'No portfolios found.', 'portfolio_textdomain' ),
		'not_found_in_trash' => __( 'No portfolios found in Trash.', 'portfolio_textdomain' )
	);
    $args = array(
      'public'    		=> true,
      'labels'     		=> $labels,
      'supports'  		=> array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields' ),
      'menu_icon' 		=> 'dashicons-welcome-learn-more',
      'menu_position' 	=> '25',
    );
    register_post_type( 'portfolios', $args );
}
add_action( 'init', 'portfolio_custom_init_portfolios' );

/**
*Register custom taxonomy type portfolioslug For custom post type portfolios
*/

function create_portfolios_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'portfolios categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'portfolios category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search portfolios categories' ),
		'all_items'         => __( 'All portfolios categories' ),
		'parent_item'       => __( 'Parent portfolios category' ),
		'parent_item_colon' => __( 'Parent portfolios category:' ),
		'edit_item'         => __( 'Edit portfolios category' ),
		'update_item'       => __( 'Update portfolios category' ),
		'add_new_item'      => __( 'Add New portfolios category' ),
		'new_item_name'     => __( 'New portfolios category Name' ),
		'menu_name'         => __( 'portfolios category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolioslug' ),
	);

	register_taxonomy( 'portfolioslug', array( 'portfolios' ), $args );
}
add_action( 'init', 'create_portfolios_taxonomies', 0 );











/**
*Register custom post type skills
*/
function skill_custom_init_skills() {
    $labels = array(
		'name'               => _x( 'Skills', 'post type general name', 'skill_textdomain' ),
		'singular_name'      => _x( 'Skill', 'post type singular name', 'skill_textdomain' ),
		'menu_name'          => _x( 'Skills', 'admin menu', 'skill_textdomain' ),
		'name_admin_bar'     => _x( 'Skills', 'add new on admin bar', 'skill_textdomain' ),
		'add_new'            => _x( 'Add Skills', 'skills', 'skill_textdomain' ),
		'add_new_item'       => __( 'Add New Skill', 'skill_textdomain' ),
		'new_item'           => __( 'New Skill', 'skill_textdomain' ),
		'edit_item'          => __( 'Edit Skill', 'skill_textdomain' ),
		'view_item'          => __( 'View Skill', 'skill_textdomain' ),
		'all_items'          => __( 'All Skills', 'skill_textdomain' ),
		'search_items'       => __( 'Search Skills', 'skill_textdomain' ),
		'parent_item_colon'  => __( 'Parent Skills:', 'skill_textdomain' ),
		'not_found'          => __( 'No skills found.', 'skill_textdomain' ),
		'not_found_in_trash' => __( 'No skills found in Trash.', 'skill_textdomain' )
	);
    $args = array(
      'public'    		=> true,
      'labels'     		=> $labels,
      'supports'  		=> array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields' ),
      'menu_icon' 		=> 'dashicons-welcome-learn-more',
      'menu_position' 	=> '25',
    );
    register_post_type( 'skills', $args );
}
add_action( 'init', 'skill_custom_init_skills' );

/**
*Register custom taxonomy type Skill_type For custom post type skills
*/

function create_skills_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Skills Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Skills Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Skills Categories' ),
		'all_items'         => __( 'All Skills Categories' ),
		'parent_item'       => __( 'Parent Skills Category' ),
		'parent_item_colon' => __( 'Parent Skills Category:' ),
		'edit_item'         => __( 'Edit skills Category' ),
		'update_item'       => __( 'Update Skills Category' ),
		'add_new_item'      => __( 'Add New Skills Category' ),
		'new_item_name'     => __( 'New skills Category Name' ),
		'menu_name'         => __( 'Skills Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Skill_type' ),
	);

	register_taxonomy( 'Skill_type', array( 'skills' ), $args );
}
add_action( 'init', 'create_skills_taxonomies', 0 );