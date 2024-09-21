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
	'hundimauto_footer_contacts',
	[
		'title'			=> esc_html__( 'Kontaktangaben Footer', 'hundimauto' ),
		'description'	=> esc_html__( 'Adressangaben anpassen', 'hundimauto' ),
		'panel'			=> 'hundimauto_theme_option_panel',
		'priority'		=> 160

	]
);

/* Fields */

/* Contact Information */

new \Kirki\Field\Textarea(
	[
		'settings'		=> 'footer_contact_textarea',
		'label'			=> esc_html__( 'Kontaktadresse', 'hundimauto' ),
		'section'		=> 'hundimauto_footer_contacts',
		'default'		=> esc_html__( '', 'hundimauto' )
	]
);