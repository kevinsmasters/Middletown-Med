<?php

Carbon_Container::factory('custom_fields', 'Home Page Options')
	->show_on_post_type('page')
	->show_on_template('page-home.php')
	->add_fields(array(
		Carbon_Field::factory('complex', 'slider', 'Slider')
			->add_fields( array(
				Carbon_Field::factory('image', 'image', 'Slide')
					->set_required( true )
					->set_help_text('Recommended image size 685px x 302px'),
				Carbon_Field::factory('text', 'logo_link', 'Logo Link')
			)),
	));

Carbon_Container::factory('custom_fields', 'Location Page Options')
	->show_on_post_type('page')
	->show_on_template('locpage_new.php')
	->add_fields(array(
		Carbon_Field::factory('image', 'location_logo', 'Location Logo')
		->set_help_text('Recommended image size 220px x 73px'),
		Carbon_Field::factory('text', 'location_page_title', 'Logo Title')
			->set_help_text('This title will be visible if there is no logo image.'),
));

Carbon_Container::factory('custom_fields', 'Page Options')
	->show_on_post_type('page')
	->add_fields(array(
		Carbon_Field::factory('text', 'page_title', 'Image Title')
			->set_help_text('This title will be visible atop the featured image.'),
		Carbon_Field::factory('checkbox', 'hide_page_title', 'Hide Page title')
			->set_help_text('Checking this will prevent the page title showing in the content of the page.'),
		Carbon_Field::factory("choose_sidebar", "custom_sidebar", "Sidebar")
			->help_text('Select which sidebar to show in this page, or click "Add New" to create a new one')
			->set_sidebar_options(array(
					'before_widget' => '<li id="%1$s" class="widget %2$s">',
					'after_widget' => '</li>',
					'before_title' => '<h4 class="widgettitle">',
					'after_title' => '</h4>',
			)),
		Carbon_Field::factory('select', 'select_menu', 'Select Side Menu')
			->add_options( mm_list_menus() ),
		Carbon_Field::factory('select', 'select_strip_menu', 'Select Strip Menu')
			->add_options( mm_list_menus() )
		));