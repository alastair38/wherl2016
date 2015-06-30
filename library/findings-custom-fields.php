<?php



/* Adding custom fields for CPTs. These can be added to with the custom fields menu link in the admin area */

if(function_exists("register_field_group"))
{

	register_field_group(array (
		'id' => 'acf_category',
		'title' => 'What type of finding are you submitting?',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '1',
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
		'id' => 'acf_event-dates',
		'title' => 'Conference/Event Date',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '30',
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
		'menu_order' => 3,
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '31',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '30',
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
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 11,
	));

	register_field_group(array (
		'id' => 'acf_location',
		'title' => 'Conference/Event Location',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '30',
					'order_no' => 1,
					'group_no' => 0,
				),
                array (
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '31',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
            array (
				array (
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '30',
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
		'menu_order' => 3,
	));
	register_field_group(array (
		'id' => 'acf_parent-project',
		'title' => 'Work Package(s)',
		'fields' => array (
			array (
				'key' => 'field_54467d8155780',
				'label' => 'Assign Finding to at least one work package',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '31',
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
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 10,
	));
	register_field_group(array (
		'id' => 'acf_submitted-by',
		'title' => 'Authors (this applies to presentations, policy outputs and any publications)',
		'fields' => array (
			array (
				'key' => 'field_5446b19b27375',
				'label' => 'Choose at least one',
				'name' => 'resource_author',
				'type' => 'relationship',
                'instructions' => 'If you are not seeing any other fields, make sure you have selected a Finding sub-category: either Policy Outputs, Presentations or Publications from the <strong>CATEGORIES</strong> list on the right-hand side',
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
            array (
				'key' => 'field_55927331e1e39',
				'label' => 'Additional Authors',
				'name' => 'additional_authors',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Enter any authors who are not participants in the Wherl project',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '31',
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
		'id' => 'acf_where-was-this-presented',
		'title' => 'Where and when was this presented?',
		'fields' => array (
			array (
				'key' => 'field_5591c20dd777d',
				'label' => 'Conference Name',
				'name' => 'conference_name',
				'type' => 'text',
                'instructions' => 'If you are submitting a <strong>Finding</strong> that was presented at an event, make sure to assign this to the <strong>Event</strong> category as well. This will give you access to other necessary fields',
				'default_value' => '',
				'placeholder' => 'Please give the name of the event/conference proceeding',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
            array (
				'key' => 'field_5580567789f6a',
				'label' => 'Date of presentation',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '31',
					'order_no' => 0,
					'group_no' => 0,
				),
                array (
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '30',
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
		'menu_order' => 2,
	));
}

?>
