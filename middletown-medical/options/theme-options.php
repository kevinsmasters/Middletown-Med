<?php

Carbon_Container::factory('theme_options', 'Theme Options')
	->add_fields(array(
		Carbon_Field::factory('text', 'header_phone', 'Phone Number')
			->set_default_value('(845) 342-4774'),
		
		Carbon_Field::factory('separator', 'footer-sep', 'Homepage footer options'),
		Carbon_Field::factory('complex', 'homepage_links', 'Home page image links')
			->set_max(4)
			->add_fields( array(
				Carbon_Field::factory('image', 'image', 'Image')
					->set_required( true )
					->set_help_text('Recommended image size 201x121px'),
				Carbon_Field::factory('text', 'image_link', 'Link'),
			)),
		Carbon_Field::factory('complex', 'footer_logos', 'Footer Logos')
			->add_fields( array(
				Carbon_Field::factory('image', 'logo', 'Logo')
					->set_required(true),
				Carbon_Field::factory('text', 'logo_link', 'Logo Link'),
			)),

		Carbon_Field::factory('separator', 'misc-sep', 'Misc'),
	    Carbon_Field::factory('header_scripts', 'header_script'),
	    Carbon_Field::factory('footer_scripts', 'footer_script'),
	));