<?php

/**
 * Register a custom post type called "robots".
 *
 * @see get_post_type_labels() for label keys.
 */

/**
 * Register our Robots Costom Post Type with Classes OOP
 */

if (!class_exists('Ro_Robots')) :
	class Ro_Robots
	{
		public function __construct()
		{
			//Register the CPT and taxonomies
			add_action('init', array($this, 'robots_cpt'));
			add_action('init', array($this, 'robot_category_taxonomy'));

			//Register Metaboxes
			add_action('add_meta_boxes', array($this, 'register_meta_boxes'));

			//Save actions
			add_action('save_post', array($this, 'meta_save'));
		}

		public function robots_cpt()
		{
			$labels = array(
				'name'                  => _x('Robots', 'Post type general name', 'robots'),
				'singular_name'         => _x('Robot', 'Post type singular name', 'robots'),
				'menu_name'             => _x('Robots', 'Admin Menu text', 'robots'),
				'name_admin_bar'        => _x('Robot', 'Add New on Toolbar', 'robots'),
				'add_new'               => __('Add New', 'robots'),
				'add_new_item'          => __('Add New Robot', 'robots'),
				'new_item'              => __('New Robot', 'robots'),
				'edit_item'             => __('Edit Robot', 'robots'),
				'view_item'             => __('View Robot', 'robots'),
				'all_items'             => __('All Robots', 'robots'),
				'search_items'          => __('Search Robots', 'robots'),
				'parent_item_colon'     => __('Parent Robots:', 'robots'),
				'not_found'             => __('No robots found.', 'robots'),
				'not_found_in_trash'    => __('No robots found in Trash.', 'robots'),
				'featured_image'        => _x('Robot Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'robots'),
				'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'robots'),
				'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'robots'),
				'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'robots'),
				'archives'              => _x('Robot archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'robots'),
				'insert_into_item'      => _x('Insert into robot', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'robots'),
				'uploaded_to_this_item' => _x('Uploaded to this robot', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'robots'),
				'filter_items_list'     => _x('Filter robots list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'robots'),
				'items_list_navigation' => _x('Robots list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'robots'),
				'items_list'            => _x('Robots list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'robots'),
			);

			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array('slug' => 'robot'),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
				// 'show_in_rest'       => true
			);

			register_post_type('robot', $args);
		}
		/**
		 * Register our Category taxonomy for our Robots CPT
		 * 
		 */

		public function robot_category_taxonomy()
		{
			$labels = array(
				'name'          => 'Categories',
				'singular_name' => 'Category',

			);

			$args = array(
				'labels'       => $labels,
				'show_in_rest' => true,
				'hierarchical' => true,
			);

			register_taxonomy('robot-category', 'robot', $args);
		}

		/**
		 * Register meta box(es)
		 */

		public function register_meta_boxes()
		{
			add_meta_box('featured', __('Is Featured?', 'softuni'), array($this, 'featured_metabox_callback'), 'robot', 'side');
		}
		public function featured_metabox_callback($post_id)
		{
			$checked = get_post_meta($post_id->ID, 'is_featured', true);

?>
			<div>
				<label for='is-featured'>Is Featured?</label>
				<input name="is-featured" name="is-featured" value="1" type="checkbox" <?php checked($checked, 1, true); ?> />
			</div>
<?php
		}
		/**
		 * Save my Robot post meta
		 * 
		 */

		public function meta_save($post_id)
		{

			if (empty($post_id)) {
				return;
			}

			$featured = '';

			if (isset($_POST['is-featured'])) {

				$featured = esc_attr($_POST['is-featured']);
			}

			update_post_meta($post_id, 'is_featured', $featured);
		}
	}
	$su_robots_instance = new Ro_Robots();
endif;
