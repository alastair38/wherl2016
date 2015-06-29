<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function clg_people() {
	// creating (registering) the custom type
	register_post_type( 'people', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('People', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Person', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All People', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New Person', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Person', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Person', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Person', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Person', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search People', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl People', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-id-alt', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'people', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail', 'author')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_people');


function clg_team() {
	// creating (registering) the custom type
	register_post_type( 'team', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Team', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Team', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Teams', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New Team', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Team', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Team', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Team', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Team', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Teams', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Team', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-groups', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'team', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'excerpt', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_team');

		// let's create the function for the custom type
function clg_news() {
	// creating (registering) the custom type
	register_post_type( 'news', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('News', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('News Item', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All News', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New News Item', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit News', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New News Item', 'jointstheme'), /* New Display Title */
			'view_item' => __('View News', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search News', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl News', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-media-document', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'news', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_news');

		// let's create the function for the custom type
function clg_events() {
	// creating (registering) the custom type
	register_post_type( 'events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Events', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Events', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Event', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Event', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Events', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Events', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_events');


	// let's create the function for the custom type
function clg_findings() {
	// creating (registering) the custom type
	register_post_type( 'finding', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Findings', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Finding', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Findings', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Finding', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Findings', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Finding', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Findings', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Findings', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Findings', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'findings', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_findings');



		// let's create the function for the custom type
function clg_projects() {
	// creating (registering) the custom type
	register_post_type( 'projects', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Projects', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Project', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Projects', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Project', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Projects', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Project', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Projects', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Projects', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Projects', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-networking', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'projects', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'page',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_projects');


/* Adding custom fields for CPTs. These can be added to with the custom fields menu link in the admin area */

if(function_exists("register_field_group"))
{


	register_field_group(array (
		'id' => 'acf_contact-details',
		'title' => 'Contact Details',
		'fields' => array (
            array (
				'key' => 'field_5379db86047ff',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'textarea',
				'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter your contact work address (optional)',
				'prepend' => '',
				'append' => '',
				'formatting' => 'br',
				'maxlength' => ''
			),

			array (
				'key' => 'field_5375d9dac440f',
				'label' => 'Phone',
				'name' => 'phone_landline',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5375da22c4411',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => 'yourname@example.com',
				'prepend' => '',
				'append' => '',
			),
            array (
				'key' => 'field_5375da0cc4410',
				'label' => 'Website',
				'name' => 'website',
				'type' => 'text',
                'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter your website url in this format http://yourwebsite.com OR http://www.yourwebsite.com',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5379db07047fd',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'text',
				'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter the full URL for your Twitter profile eg https://twitter.com/YOURPROFILENAME',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5379db63047fe',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'type' => 'text',
				'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter the full URL for your LinkedIn profile',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
				array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'people',
					'order_no' => 2,
					'group_no' => 2,
				),
			),

		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_people-details',
		'title' => 'Person Details (these name and title fields are for database purposes and do not appear on the site. To change how your name appears, please update the text field at the top of the page - directly under "Edit Person")',
		'fields' => array (
			array (
				'key' => 'field_537a1dbbe3aa7',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'select',
				'choices' => array (
					'Dr' => 'Dr',
					'Professor' => 'Professor',
					'Mr' => 'Mr',
					'Mrs' => 'Mrs',
					'Miss' => 'Miss',
					'Ms' => 'Ms',
				),
				'default_value' => 'Professor',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_537a1dfee3aa8',
				'label' => 'First Name',
				'name' => 'first_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_537a1e40e3aa9',
				'label' => 'Surname',
				'name' => 'surname',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
            array (
				'key' => 'field_543692ae64146',
				'label' => 'Wherl Project Role',
				'name' => 'work_position',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5429adacda6b3',
				'label' => 'Biography',
				'name' => 'biography',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'people',
					'order_no' => 1,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_category',
		'title' => 'Category',
		'fields' => array (
			array (
				'key' => 'field_5447cc0bf4e08',
				'label' => 'Finding Type',
				'name' => 'finding_type',
				'type' => 'checkbox',
				'choices' => array (
					'Policy Outputs' => 'Policy Outputs',
					'Presentations' => 'Presentations',
					'Publications' => 'Publications',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'finding',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_contact',
		'title' => 'Details + Contact',
		'fields' => array (
			array (
				'key' => 'field_544799889417d',
				'label' => 'Contact Name',
				'name' => 'contact_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Individual or organisation contact name',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_544799989417e',
				'label' => 'Email',
				'name' => 'event_email',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'yourname@example.com',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_544799b19417f',
				'label' => 'Website',
				'name' => 'event_website',
				'type' => 'text',
                'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter the full URL for your website',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_544799cf94180',
				'label' => 'Phone',
				'name' => 'event_phone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Contact phone number',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_544799db94181',
				'label' => 'Twitter',
				'name' => 'event_twitter',
				'type' => 'text',
                'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter the full URL of your Twitter profile eg https://twitter.com/YOURPROFILENAME',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'news',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_event-dates',
		'title' => 'Date + Time',
		'fields' => array (
			array (
				'key' => 'field_544797d80f512',
				'label' => 'Event Start',
				'name' => 'event_start',
				'type' => 'date_picker',
                'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_544798030f513',
				'label' => 'Event Finish',
				'name' => 'event_finish',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
            array (
				'key' => 'field_5463c349b2f4c',
				'label' => 'Event Time',
				'name' => 'event_time',
				'type' => 'text',
				'instructions' => '',
				'default_value' => '',
				'placeholder' => 'Enter start/end time of event (optional)',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_funder-logos',
		'title' => 'Funder Logos',
		'fields' => array (
			array (
				'key' => 'field_544bbf96e0ff9',
				'label' => 'Funder One',
				'name' => 'funder_one',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_544bbfaae0ffa',
				'label' => 'Funder Two',
				'name' => 'funder_two',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_544bbfb6e0ffb',
				'label' => 'Funder Three',
				'name' => 'funder_three',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_links-files',
		'title' => 'Links + Files',
		'fields' => array (
			array (
				'key' => 'field_5447a86fd5e7d',
				'label' => 'First Upload',
				'name' => 'file_upload',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_5447a9a7b3f20',
				'label' => 'Second Upload',
				'name' => 'file_uploadb',
				'type' => 'file',
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_5447a9ceb3f21',
				'label' => 'Third Upload',
				'name' => 'file_uploadc',
				'type' => 'file',
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_5447cb50b0fcb',
				'label' => 'Source Link',
				'name' => 'external_link',
				'type' => 'text',
				'instructions' => 'You can use this to link to another website or a file you have uploaded elsewhere',
				'default_value' => '',
				'placeholder' => 'Paste the URL of an external source you wish to link to',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'finding',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
            array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'news',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_location',
		'title' => 'Location',
		'fields' => array (
            array (
				'key' => 'field_544799529417c',
				'label' => 'Address',
				'name' => 'event_address',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Enter the event address itself; You can also add a map to events by using the location function below)',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_544775c4bdf17',
				'label' => 'Event Map',
				'name' => 'event_map',
				'type' => 'google_map',
				'center_lat' => '51.5072',
				'center_lng' => '0.1275',
				'zoom' => '',
				'height' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_parent-project',
		'title' => 'Parent Project',
		'fields' => array (
			array (
				'key' => 'field_54467d8155780',
				'label' => 'Findings Project',
				'name' => 'findings_project',
				'type' => 'relationship',
				'return_format' => 'id',
				'post_type' => array (
					0 => 'projects',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'finding',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_parent',
					'operator' => '==',
					'value' => '26',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_slider',
		'title' => 'Slider',
		'fields' => array (
			array (
				'key' => 'field_544bbed059b54',
				'label' => 'Logo Image',
				'name' => 'logo_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_544bbef859b55',
				'label' => 'Slide One',
				'name' => 'slide_one',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_544bbf2559b56',
				'label' => 'Slide Two',
				'name' => 'slide_two',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'revisions',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_submitted-by',
		'title' => 'Submitted By',
		'fields' => array (
			array (
				'key' => 'field_5446b19b27375',
				'label' => 'Resource Author',
				'name' => 'resource_author',
				'type' => 'relationship',
				'required' => 1,
				'return_format' => 'object',
				'post_type' => array (
					0 => 'people',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'finding',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_team',
		'title' => 'Team',
		'fields' => array (
			array (
				'key' => 'field_54463798158e4',
				'label' => 'Wherl Group',
				'name' => 'academic_group',
				'type' => 'relationship',
				'instructions' => 'Which Wherl team are you a member of?',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'team',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'people',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_work-package',
		'title' => 'Work Package',
		'fields' => array (
			array (
				'key' => 'field_54369f260e00c',
				'label' => 'Work Project',
				'name' => 'work_project',
				'type' => 'relationship',
				'instructions' => 'Assign to a Wherl work package or packages, if relevant',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'projects',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'people',
					'order_no' => 4,
					'group_no' => 4,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'team',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
    register_field_group(array (
		'id' => 'acf_findings-date',
		'title' => 'Findings Date',
		'fields' => array (
			array (
				'key' => 'field_5580567789f6a',
				'label' => 'Add a date',
				'name' => 'findings_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'finding',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
