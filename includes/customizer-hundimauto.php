<?php

	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}

/* Panels */

new \Kirki\Panel(
	'hundimauto_theme_option_panel',
	[
		'priority'		=> 10,
		'title'			=> esc_html__( 'Hundimauto Einstellungen', 'hundimauto' ),
		'description'	=> esc_html__( 'Globale Einstellungen des Themes', 'Kirki' )
	]
);

/* Sections */

new \Kirki\Section(
	'hundimauto_themeing',
	[
		'title'			=> esc_html__( 'Theme Auswahl', 'hundimauto' ),
		'description'	=> 'Verfügbare Themes auswählen',
		'panel'			=> 'hundimauto_theme_option_panel',
		'priority'		=> 10

	]
);

new \Kirki\Section(
	'hundimauto_footer_contacts',
	[
		'title'			=> esc_html__( 'Kontaktangaben', 'hundimauto' ),
		'description'	=> esc_html__( 'Adressangaben anpassen', 'hundimauto' ),
		'panel'			=> 'hundimauto_theme_option_panel',
		'priority'		=> 20

	]
);

new \Kirki\Section(
	'hundimauto_footer_social',
	[
		'title'			=> esc_html__( 'Social Media Kanäle', 'hundimauto' ),
		'description'	=> '',
		'panel'			=> 'hundimauto_theme_option_panel',
		'priority'		=> 30

	]
);

/* Fields */

/* Themeing */

new \Kirki\Field\Select(
	[
		'settings'		=> 'theme_setting',
		'label'			=> esc_html__( 'Theme Auswahl', 'hundimauto' ),
		'description'	=> esc_html__( 'Verfügbare Themes', 'hundimauto' ),
		'section'		=> 'hundimauto_themeing',
		'default'		=> 'theme-default',
		'placeholder'	=> esc_html__( 'Bitte auwählen', 'hundimauto' ),
		'choices'		=> [
			'theme-default' 	=> esc_html__( 'Default Theme', 'hundimauto' ),
			'theme-xmas'		=> esc_html__( 'Christmas Theme', 'hundimauto' )
		]
	]
);

/* Contact Information */

new \Kirki\Field\Editor(
	[
		'settings'		=> 'footer_address',
		'label'			=> esc_html__( 'Adresse', 'hundimauto' ),
		'description'	=> '',
		'section'		=> 'hundimauto_footer_contacts',
		'default'		=> '',
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'footer_phone',
		'label'    => esc_html__( 'Telefon', 'hundimauto' ),
		'section'  => 'hundimauto_footer_contacts',
		'default'  => '',
		'priority' => 20,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'footer_mail',
		'label'    => esc_html__( 'E-Mail', 'hundimauto' ),
		'section'  => 'hundimauto_footer_contacts',
		'default'  => '',
		'priority' => 30,
	]
);

/* Social Media Repeater */

new \Kirki\Field\Repeater(
	[
		'settings'			=> 'social_media',
		'label'				=> esc_html__( 'Social Media Channels', 'hundimauto' ),
		'section'			=> 'hundimauto_footer_social',
		'priority'			=> 10,
		'row_label'			=> [
			'type' 			=> 'field',
			'value'			=> esc_html__( 'Social Media Channel', 'hundimauto' ),
			'field'			=> 'channel_name'
		],
		'fields'			=> [
			'channel_name'	=> [
				'type' 				=> 'text',
				'label'				=> esc_html__( 'Channel Name', 'hundimauto' ),
				'description'		=> esc_html__( 'Name des Social Media Kanals', 'hundimauto' ),
				'default'			=> ''
			],
			'channel_icon'	=> [
				'type' 				=> 'image',
				'label' 			=>	esc_html__( 'Channel Icon', 'hundimauto' ),
				'description' 		=> esc_html__( 'Channel Icon auswählen', 'hundimauto' ),
				'default'			=> '',
				'choices'			=> [ 'save_as' => 'array' ]
			],
			'channel_url'	=> [
				'type'				=> 'text',
				'label'				=> esc_html__( 'Channel URL', 'hundimauot' ),
				'description'		=> esc_html__( 'URL des Social Media Profils', 'hundimauto' ),
				'default'			=> esc_html__( 'e.g. https://www.facebook.com/profile-name', 'hundimauto' )
			],
			'icon_style'	=> [
				'type'				=> 'textarea',
				'label'				=> esc_html__( 'Icon CSS Style', 'hundimauto' ),
				'description'		=> esc_html__( 'Grösse des Icons per CSS Style anpassen'),
				'default'			=> ''
			]
		]
	]
);