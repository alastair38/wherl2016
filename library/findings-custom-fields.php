<?php



/* Adding custom fields for CPTs. These can be added to with the custom fields menu link in the admin area */

if(function_exists("register_field_group"))
{
    	register_field_group(array (
		'id' => 'acf_select-event',
		'title' => 'Select Event',
		'fields' => array (
			array (
				'key' => 'field_55d1fd4d7525d',
				'label' => 'Where was this presented?',
				'name' => 'finding_event',
                'instructions' => 'If this finding was presented at an event, please choose the event from the list below. To appear on this list, an event has to have been added to the <em>Events</em> section of the website already',
				'type' => 'relationship',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'events',
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
				'key' => 'field_5580567789f6a',
				'label' => 'Pick the date your finding was presented',
				'name' => 'findings_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
                'required' => 1,
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
				'placeholder' => 'Enter start/end time of event eg: 10am - 5pm (optional)',
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
				'label' => 'Upload Presentation',
				'name' => 'file_upload',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_5447a9a7b3f20',
				'label' => 'Upload Publication',
				'name' => 'file_uploadb',
				'type' => 'file',
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_5447a9ceb3f21',
				'label' => 'Upload Additional File',
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
					'value' => '26',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
            array (
				array (
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '25',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => '24',
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
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
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
		'menu_order' => -3,
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
                'instructions' => 'Choose the author(s) of this finding from the list below',
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
		'menu_order' => -4,
	));

   /** register_field_group(array (
		'id' => 'acf_where-was-this-presented',
		'title' => 'Where was this presented?',
		'fields' => array (
			array (
				'key' => 'field_5591c20dd777d',
				'label' => 'Conference Name',
				'name' => 'conference_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Please give the name of the event/conference proceeding where the finding was presented',
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
					'value' => '33',
					'order_no' => 0,
					'group_no' => 0,
				),
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
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));


    register_field_group(array (
		'id' => 'acf_date-submitted',
		'title' => 'Date finding was presented/submitted?',
		'fields' => array (
            array (
				'key' => 'field_5580567789f6a',
				'label' => 'Pick date',
				'name' => 'findings_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
                'required' => 1,
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
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => -3,
	)); ***/

	register_field_group(array (
		'id' => 'acf_policy-output-details',
		'title' => 'Policy Output Details',
		'fields' => array (
			array (
				'key' => 'field_5591dfcf08e55',
				'label' => 'Date of Publication',
				'name' => 'date_of_publication',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_5591dfab08e54',
				'label' => 'Publisher',
				'name' => 'published_by',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Published by?',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591dffe08e56',
				'label' => 'Place of Publication',
				'name' => 'place_of_publication',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Place of publication (City, Country)',
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
					'value' => '24',
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
		'menu_order' => -2,
	));
	register_field_group(array (
		'id' => 'acf_publications-details',
		'title' => 'Publications Details',
		'fields' => array (
			array (
				'key' => 'field_5591d70147f81',
				'label' => 'Publication Type',
				'name' => 'publication_type',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'Book' => 'Book',
					'Book Chapter' => 'Book Chapter',
					'Edited Book' => 'Edited Book',
					'Journal Article' => 'Journal Article',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5591d76147f82',
				'label' => 'Year of Publication',
				'name' => 'year',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Edited Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
					),
					'allorany' => 'any',
				),
				'default_value' => '',
				'placeholder' => 'What year was this published?',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d831f86bb',
				'label' => 'Publisher',
				'name' => 'publisher',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Edited Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'any',
				),
				'default_value' => '',
				'placeholder' => 'Enter the publisher name',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d929717de',
				'label' => 'Book Title',
				'name' => 'book_title',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Enter the title of the book your chapter appeared in',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d8c5717dd',
				'label' => 'List of Editors',
				'name' => 'editors',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'List the editors of the book your chapter appeared in',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d97757f7f',
				'label' => 'Journal Name',
				'name' => 'journal_name',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Add the name of the journal your article appeared in',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d99b57f80',
				'label' => 'Journal Volume',
				'name' => 'volume',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Add the journal volume your article appeared in',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d9bb57f81',
				'label' => 'Journal Issue',
				'name' => 'issue',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Add the journal issue your article appeared in',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591d9e657f82',
				'label' => 'Page Numbers',
				'name' => 'page_numbers',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'any',
				),
				'default_value' => '',
				'placeholder' => 'Enter the page numbers of your article',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591daab38405',
				'label' => 'Publication Link',
				'name' => 'publication_link',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Edited Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'any',
				),
				'default_value' => '',
				'placeholder' => 'Enter any hyperlink to the publication in question (start with "http://"',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5591dafbd8e9d',
				'label' => 'ISBN',
				'name' => 'isbn',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Book Chapter',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Edited Book',
						),
						array (
							'field' => 'field_5591d70147f81',
							'operator' => '==',
							'value' => 'Journal Article',
						),
					),
					'allorany' => 'any',
				),
				'default_value' => '',
				'placeholder' => 'Enter the ISBN number',
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
					'value' => '26',
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
		'menu_order' => -1,
	));
	register_field_group(array (
		'id' => 'acf_digital-object-identifier-doi-number',
		'title' => 'Digital Object Identifier (DOI) number',
		'fields' => array (
			array (
				'key' => 'field_5591e037c4964',
				'label' => 'DOI',
				'name' => 'doi',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Enter a Digital Object Identifier (DOI) number is one exists',
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
					'value' => '24',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'taxonomy',
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
		'id' => 'acf_getting-started',
		'title' => 'Getting Started',
		'fields' => array (
			array (
				'key' => 'field_55a630729685e',
				'label' => 'Info',
				'name' => '',
				'type' => 'message',
				'message' => '<ol>
	<li>Please select one or more of the options from the <strong>Categories</strong> list on the right-hand side</li>
	<li>Once you have selected your category(ies), complete the form fields that are made available.</li>
	</ol>
    <ul>
    <li><strong>ADDING A DESCRIPTION</strong></li>
    <li>To add a description to your submission, please use the text field below the <strong>Add Media</strong> button. This text field allows you to add formatting to the description (such as links, italics etc), which you can see if you select the <strong>Visual</strong> tab at the top right of the field.</li>
    </ul>

	<a href="mailto:alastair@alastaircox.com" target="_blank">Still stuck? Email Alastair</a>',
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
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => -5,
	));
}

?>
