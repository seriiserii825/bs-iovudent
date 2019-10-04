<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Basic Options'))
		->add_tab(__('Contacts'), array(
			Field::make('text', 'crb_email', __('Email')),
			
			Field::make('text', 'crb_phone', __('Phone'))
				->set_width(30),
			Field::make('text', 'crb_phone2', __('Phone 2'))
				->set_width(30),
			Field::make('text', 'crb_phone3', __('Phone 3'))
				->set_width(30),

			Field::make('separator', 'crb_address_sep', __('Address')),
			Field::make('text', 'crb_address_ru', __('Address Ru'))
				->set_width(30),
			Field::make('text', 'crb_address_ro', __('Address Ro'))
				->set_width(30),
			Field::make('text', 'crb_address_en', __('Address En'))
				->set_width(30),

			Field::make('image', 'crb_contacts_page_bg', __('Page image'))
				->set_help_text('1920x340')
				->set_value_type('url')
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Block care'), array(
			Field::make('text', 'crb_care_main_title_ru', __('Block care title ru')),
			Field::make('text', 'crb_care_title_ru', __('Block care title ru')),
			Field::make('text', 'crb_care_subtitle_ru', __('Block care subtitle ru')),
			Field::make('textarea', 'crb_care_text_ru', __('Block care text ru')),

			Field::make('text', 'crb_care_main_title_ro', __('Block care title ro')),
			Field::make('text', 'crb_care_title_ro', __('Block care title ro')),
			Field::make('text', 'crb_care_subtitle_ro', __('Block care subtitle ro')),
			Field::make('textarea', 'crb_care_text_ro', __('Block care text ro')),

			Field::make('text', 'crb_care_main_title_en', __('Block care title en')),
			Field::make('text', 'crb_care_title_en', __('Block care title en')),
			Field::make('text', 'crb_care_subtitle_en', __('Block care subtitle en')),
			Field::make('textarea', 'crb_care_text_en', __('Block care text en')),
		))
		->add_tab(__('Block services'), array(
			Field::make('image', 'crb_services_header_image', __('Block services header image'))
				->set_help_text('1920x340')
				->set_value_type('url'),

			Field::make('text', 'crb_services_title_ru', __('Block services title ru')),
			Field::make('text', 'crb_services_subtitle_ru', __('Block services subtitle ru')),
			Field::make('textarea', 'crb_services_text_ru', __('Block services text ru')),

			Field::make('text', 'crb_services_title_ro', __('Block services title ro')),
			Field::make('text', 'crb_services_subtitle_ro', __('Block services subtitle ro')),
			Field::make('textarea', 'crb_services_text_ro', __('Block services text ro')),

			Field::make('text', 'crb_services_title_en', __('Block services title en')),
			Field::make('text', 'crb_services_subtitle_en', __('Block services subtitle en')),
			Field::make('textarea', 'crb_services_text_en', __('Block services text en')),

		))
		->add_tab(__('Block specialists'), array(
			Field::make('text', 'crb_specialist_title_ru', __('Block specialist title ru')),
			Field::make('text', 'crb_specialist_subtitle_ru', __('Block specialist subtitle ru')),

			Field::make('text', 'crb_specialist_title_ro', __('Block specialist title ro')),
			Field::make('text', 'crb_specialist_subtitle_ro', __('Block specialist subtitle ro')),

			Field::make('text', 'crb_specialist_title_en', __('Block specialist title en')),
			Field::make('text', 'crb_specialist_subtitle_en', __('Block specialist subtitle en')),
		))
		->add_tab(__('Latest Posts'), array(
			Field::make('text', 'crb_latest_posts_title_ru', __('Block latest_posts title ru'))
				->set_width(50),
			Field::make('text', 'crb_latest_posts_subtitle_ru', __('Block latest_posts subtitle ru'))
				->set_width(50),

			Field::make('text', 'crb_latest_posts_title_ro', __('Block latest_posts title ro'))
				->set_width(50),
			Field::make('text', 'crb_latest_posts_subtitle_ro', __('Block latest_posts subtitle ro'))
				->set_width(50),

			Field::make('text', 'crb_latest_posts_title_en', __('Block latest_posts title en'))
				->set_width(50),
			Field::make('text', 'crb_latest_posts_subtitle_en', __('Block latest_posts subtitle en'))
				->set_width(50),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Headers')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Main Page'), array(
			Field::make('separator', 'crb_index_form_separator', __('Form on main page')),
			Field::make('text', 'crb_index_form_title_ru', __('Block index_form title ru')),
			Field::make('text', 'crb_index_form_subtitle_ru', __('Block index_form subtitle ru')),

			Field::make('text', 'crb_index_form_title_ro', __('Block index_form title ro')),
			Field::make('text', 'crb_index_form_subtitle_ro', __('Block index_form subtitle ro')),

			Field::make('text', 'crb_index_form_title_en', __('Block index_form title en')),
			Field::make('text', 'crb_index_form_subtitle_en', __('Block index_form subtitle en')),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Footer')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Menu'), array(
			Field::make('text', 'crb_footer_menu_title_ru', __('Block footer_menu title ru'))
				->set_width(30),
			Field::make('text', 'crb_footer_menu_title_ro', __('Block footer_menu title ro'))
				->set_width(30),
			Field::make('text', 'crb_footer_menu_title_en', __('Block footer_menu title en'))
				->set_width(30),

			Field::make('text', 'crb_separator', __('Hours')),

			Field::make('complex', 'crb_footer_hours', __('Footer Hours'))
				->add_fields(array(
					Field::make('text', 'days_ru', __('Ru'))
						->set_width(25),
					Field::make('text', 'days_ro', __('Ro'))
						->set_width(25),
					Field::make('text', 'days_en', __('En'))
						->set_width(25),
					Field::make('text', 'hours', __('Hours'))
						->set_width(25),
				))
				->set_layout('tabbed-horizontal'),

			Field::make('separator', 'crb_separator_copy', __('Copyright')),
			Field::make('text', 'crb_footer_copyright_text_ru', __('Footer copyright text ru'))
				->set_width(30),
			Field::make('text', 'crb_footer_copyright_text_ro', __('Footer copyright text ro'))
				->set_width(30),
			Field::make('text', 'crb_footer_copyright_text_en', __('Footer copyright text en'))
				->set_width(30),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Images')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Technologies'), array(
			Field::make('image', 'crb_technologies', __('Technologies bg image'))
				->set_help_text('1920x340')
				->set_value_type('url'),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Question - Answers')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Image'), array(
			Field::make('image', 'crb_questions_img', __('Technologies bg image'))
				->set_help_text('1920x340')
				->set_value_type('url'),
		))
		->add_tab(__('Accordeon'), array(
			Field::make('complex', 'crb_question_accordeon', __('Questions Accordeon'))
				->add_fields(array(
					Field::make('text', 'title_ru', __('Title ru'))
						->set_width(30),
					Field::make('text', 'title_ro', __('Title ro'))
						->set_width(30),
					Field::make('text', 'title_en', __('Title en'))
						->set_width(30),


					Field::make('rich_text', 'text_ru', __('Text ru'))
						->set_width(30),
					Field::make('rich_text', 'text_ro', __('Text ro'))
						->set_width(30),
					Field::make('rich_text', 'text_en', __('Text en'))
						->set_width(30),
				))
				->set_layout('tabbed-horizontal')
		));
}


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}