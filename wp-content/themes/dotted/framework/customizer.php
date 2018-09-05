<?php
/**
 * Dotted theme customizer
 *
 * @package Dotted
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Dotted_Customize {
	/**
	 * Customize settings
	 *
	 * @var array
	 */
	protected $config = array();

	/**
	 * The class constructor
	 *
	 * @param array $config
	 */
	public function __construct( $config ) {
		$this->config = $config;

		if ( ! class_exists( 'Kirki' ) ) {
			return;
		}

		$this->register();
	}

	/**
	 * Register settings
	 */
	public function register() {
		/**
		 * Add the theme configuration
		 */
		if ( ! empty( $this->config['theme'] ) ) {
			Kirki::add_config(
				$this->config['theme'], array(
					'capability'  => 'edit_theme_options',
					'option_type' => 'theme_mod',
				)
			);
		}

		/**
		 * Add panels
		 */
		if ( ! empty( $this->config['panels'] ) ) {
			foreach ( $this->config['panels'] as $panel => $settings ) {
				Kirki::add_panel( $panel, $settings );
			}
		}

		/**
		 * Add sections
		 */
		if ( ! empty( $this->config['sections'] ) ) {
			foreach ( $this->config['sections'] as $section => $settings ) {
				Kirki::add_section( $section, $settings );
			}
		}

		/**
		 * Add fields
		 */
		if ( ! empty( $this->config['theme'] ) && ! empty( $this->config['fields'] ) ) {
			foreach ( $this->config['fields'] as $name => $settings ) {
				if ( ! isset( $settings['settings'] ) ) {
					$settings['settings'] = $name;
				}

				Kirki::add_field( $this->config['theme'], $settings );
			}
		}
	}

	/**
	 * Get config ID
	 *
	 * @return string
	 */
	public function get_theme() {
		return $this->config['theme'];
	}

	/**
	 * Get customize setting value
	 *
	 * @param string $name
	 *
	 * @return bool|string
	 */
	public function get_option( $name ) {
		if ( ! isset( $this->config['fields'][$name] ) ) {
			return false;
		}

		$default = isset( $this->config['fields'][$name]['default'] ) ? $this->config['fields'][$name]['default'] : false;

		return get_theme_mod( $name, $default );
	}
}

/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function dotted_get_option( $name ) {
	global $dotted_customize;

	if ( empty( $dotted_customize ) ) {
		return false;
	}

	if ( class_exists( 'Kirki' ) ) {
		$value = Kirki::get_option( $dotted_customize->get_theme(), $name );
	} else {
		$value = $dotted_customize->get_option( $name );
	}

	return apply_filters( 'dotted_get_option', $value, $name );
}

/**
 * Move some default sections to `general` panel that registered by theme
 *
 * @param object $wp_customize
 */
function dotted_customize_modify( $wp_customize ) {
	$wp_customize->get_section( 'title_tagline' )->panel     = 'general';
	$wp_customize->get_section( 'static_front_page' )->panel = 'general';
}

add_action( 'customize_register', 'dotted_customize_modify' );

/**
 * Customizer configuration
 */
$dotted_customize = new Dotted_Customize(
	array(
		'theme'    => 'dotted',

		'panels'   => array(
			'general' => array(
				'priority' => 10,
				'title'    => esc_html__( 'General', 'dotted' ),
			),
			'header'  => array(
				'priority' => 11,
				'title'    => esc_html__( 'Header', 'dotted' ),
			),
			'socials'  => array(
				'priority' => 210,
				'title'    => esc_html__( 'Socials', 'dotted' ),
			),
		),

		'sections' => array(

			// Panel Header
			'top_header' => array(
				'title'       => esc_html__( 'Top Header', 'dotted' ),
				'description' => '',
				'priority'    => 15,
				'capability'  => 'edit_theme_options',
				'panel'       => 'header',
			),
			'header'      => array(
				'title'       => esc_html__( 'Navigation', 'dotted' ),
				'description' => '',
				'priority'    => 10,
				'capability'  => 'edit_theme_options',
				'panel'       => 'header',
			),
			'logo'        => array(
				'title'       => esc_html__( 'Site Logo', 'dotted' ),
				'description' => '',
				'priority'    => 50,
				'capability'  => 'edit_theme_options',
				'panel'       => 'general',
			),
			'page_header' => array(
				'title'       => esc_html__( 'Page Header', 'dotted' ),
				'description' => '',
				'priority'    => 15,
				'capability'  => 'edit_theme_options',
				'panel'       => 'header',
			),

			// Panel Shop
			'shop'      => array(
				'title'       => esc_html__( 'Shop', 'dotted' ),
				'description' => '',
				'priority'    => 220,
				'capability'  => 'edit_theme_options',
			),

			
			// Panel Content
			'content'     => array(
				'title'       => esc_html__( 'Blog', 'dotted' ),
				'description' => '',
				'priority'    => 210,
				'capability'  => 'edit_theme_options',
			),

			// Panel Footer
			'footer'     => array(
				'title'       => esc_html__( 'Footer', 'dotted' ),
				'description' => '',
				'priority'    => 240,
				'capability'  => 'edit_theme_options',
			),

			// Coming Soon
			'csoon'     => array(
				'title'       => esc_html__( 'Coming Soon', 'dotted' ),
				'description' => '',
				'priority'    => 245,
				'capability'  => 'edit_theme_options',
			),

			// Panel Styling
			'styling'     => array(
				'title'       => esc_html__( 'Miscellaneous', 'dotted' ),
				'description' => '',
				'priority'    => 250,
				'capability'  => 'edit_theme_options',
			),
		),

		'fields'   => array(
			//Top Header
			'top_bar'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Top Bar', 'dotted' ),
				'section'  => 'top_header',
				'default'  => '1',
				'priority' => 10,
			),
			'bg_top'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Top Header', 'dotted' ),
				'section'  => 'top_header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'top_bar',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_top'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Top Header Text Color', 'dotted' ),
				'section'  => 'top_header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'top_bar',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),	
			
			'socials'     => array(
				'type'     => 'repeater',
				'label'    => esc_html__( 'Socials', 'dotted' ),
				'section'  => 'top_header',
				'priority' => 10,
				'default'  => array(),
				'fields'   => array(
					'icon' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Icon Class', 'dotted' ),
						'description' => esc_html__( 'This will be the social icon: http://fontawesome.io/icons/', 'dotted' ),
						'default'     => '',
					),
					'link' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Link URL', 'dotted' ),
						'description' => esc_html__( 'This will be the social link', 'dotted' ),
						'default'     => '',
					),
				),
				'active_callback' => array(
					array(
					  	'setting'  => 'top_bar',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'top_info'     => array(
				'type'     => 'code',
				'label'    => esc_html__( 'Top Info', 'dotted' ),
				'description' => esc_html__( 'Following format: <ul><li></li><li></li>...</ul>', 'dotted' ),
				'section'  => 'top_header',
				'priority' => 10,
				'default'  => '',
				'active_callback' => array(
					array(
					  	'setting'  => 'top_bar',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),

			// Header layout
			'header_layout'  => array(
				'type'     => 'select',
				'label'    => esc_html__( 'Header Layout', 'dotted' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
				'choices'  => array(
					'1' => esc_html__( 'Header v1', 'dotted' ),
					'2' => esc_html__( 'Header v2', 'dotted' ),
				),
			),
			'bg_menu'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Main Menu', 'dotted' ),
				'section'  => 'header',
				'default'  => '',
				'priority' => 10,
			),
			'color_menu'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Menu', 'dotted' ),
				'section'  => 'header',
				'default'  => '',
				'priority' => 10,
			),
			'sticky'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Sticky Header', 'dotted' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
			),
			'sepe'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Seperator', 'dotted' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
			),
			'sepe_list'    => array(
				'type'     => 'select',
				'label'    => esc_html__( '', 'dotted' ),
				'section'  => 'header',
				'default'  => 'ver1',
				'priority' => 10,
				'choices'  => array(
					'ver1' => esc_html__( 'Line', 'dotted' ),
					'ver2' => esc_html__( 'Dotted', 'dotted' ),
					'ver3' => esc_html__( 'Circle', 'dotted' ),
				),
				'active_callback' => array(
					array(
					  	'setting'  => 'sepe',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'cart'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Cart', 'dotted' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
			),
			'search'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Search', 'dotted' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
			),

			// Logo
			'logo'           => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Logo', 'dotted' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_width'     => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Logo Width', 'dotted' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_height'    => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Logo Height', 'dotted' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_position'  => array(
				'type'     => 'spacing',
				'label'    => esc_html__( 'Logo Margin', 'dotted' ),
				'section'  => 'logo',
				'priority' => 10,
				'default'  => array(
					'top'    => '20px',
					'bottom' => '20px',
					'left'   => '0',
					'right'  => '0',
				),
			),
			

			// Page Header
			'page_header'    => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Page Header', 'dotted' ),
				'description' => esc_html__( 'Enable to show page header on whole site', 'dotted' ),
				'section'     => 'page_header',
				'default'     => '1',
				'priority'    => 10,
			),
			'sheader_layout'  => array(
				'type'     => 'select',
				'label'    => esc_html__( 'Page Header Layout', 'dotted' ),
				'section'  => 'page_header',
				'default'  => '1',
				'priority' => 10,
				'choices'  => array(
					'1' => esc_html__( 'Layout 1', 'dotted' ),
					'2' => esc_html__( 'Layout 2', 'dotted' ),
					'3' => esc_html__( 'Layout 3', 'dotted' ),
				),
				'active_callback' => array(
					array(
					  	'setting'  => 'page_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'page_header_bg' => array(
				'type'        => 'image',
				'label'       => esc_html__( 'Background Image', 'dotted' ),
				'description' => esc_html__( 'Upload a page header background image', 'dotted' ),
				'section'     => 'page_header',
				'default'     => '',
				'priority'    => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'sheader_layout',
					  	'operator' => '==',
					  	'value'    => '2',
				 	),
				 	array(
					  	'setting'  => 'page_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),

			'breadcrumb'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Breadcrumb', 'dotted' ),
				'description' => esc_html__( 'Enable to show a breadcrumb bellow the site header', 'dotted' ),
				'section'     => 'page_header',
				'default'     => '1',
				'priority'    => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'page_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),


			// Content
			
			'excerpt_length' => array(
				'type'    => 'number',
				'label'   => esc_html__( 'Excerpt Length', 'dotted' ),
				'section' => 'content',
				'default' => 30,
				'choices' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
			),

			'single_sharing'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Show Sharing Icons', 'dotted' ),
				'description' => esc_html__( 'Display social sharing icons for each post on single page', 'dotted' ),
				'section'     => 'content',
				'default'     => '1',
				'priority'    => 10,
			),
			'single_related'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Show Related Posts', 'dotted' ),
				'description' => esc_html__( 'Display related posts for each post on single page', 'dotted' ),
				'section'     => 'content',
				'default'     => '1',
				'priority'    => 11,
			),

			//Shop
			'per_shop' => array(
				'type'    		=> 'number',
				'label'   		=> esc_html__( 'Products Per Page', 'hosted' ),
				'section' 		=> 'shop',
				'default' 		=> '6',
				'priority'    	=> 12
			),

			//Footer
			'fwidget'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Footer Widget', 'dotted' ),
				'section'     => 'footer',
				'default'     => '1',
				'priority'    => 10,
			),
			'bg_fimg'    => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Background Image Footer', 'dotted' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'fwidget',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'bg_footer'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Color Footer', 'dotted' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'fwidget',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_footer'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Footer', 'dotted' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'fwidget',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_ftitle'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Title Footer', 'dotted' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'fwidget',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'bfooter'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Footer Bottom', 'dotted' ),
				'section'     => 'footer',
				'default'     => '1',
				'priority'    => 10,
			),
			'bg_bottom'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Bottom Footer', 'dotted' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'bfooter',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_bottom' => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Footer', 'dotted' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'bfooter',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'copy_right'     => array(
				'type'        => 'code',
				'label'       => esc_html__( 'Copy Right Text', 'dotted' ),
				'section'     => 'footer',
				'default'     => '',
				'priority'    => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'bfooter',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),

			// Coming Soon
			'bgcms'           => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Background Image', 'dotted' ),
				'section'  => 'csoon',
				'default'  => '',
				'priority' => 10,
			),
			'time_date'           => array(
				'type'     => 'datepicker',
				'label'    => esc_html__( 'Date Time', 'dotted' ),
				'section'  => 'csoon',
				'default'  => '10/30/2017',
				'description' => esc_html__( 'Date format: dd/mm/yyyy. Example: 10/25/2017', 'dotted' ),
				'priority' => 10,
			),
			'cs_socials'     => array(
				'type'     => 'repeater',
				'label'    => esc_html__( 'Socials', 'dotted' ),
				'section'  => 'csoon',
				'priority' => 10,
				'default'  => array(),
				'fields'   => array(
					'icon' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Icon Class', 'dotted' ),
						'description' => esc_html__( 'This will be the social icon: http://fontawesome.io/icons/', 'dotted' ),
						'default'     => '',
					),
					'link' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Link URL', 'dotted' ),
						'description' => esc_html__( 'This will be the social link', 'dotted' ),
						'default'     => '',
					),
				),
			),

			//Styling
			'boxed'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Boxed Layout', 'dotted' ),
				'section'     => 'styling',
				'default'     => '0',
				'priority'    => 10,
			),
			'bg_body'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Body', 'dotted' ),
				'section'  => 'styling',
				'default'  => '#f1f1f1',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'boxed',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'bg_ibody'    => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Background Image Body', 'dotted' ),
				'section'  => 'styling',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'boxed',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'repeat'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Background Repeat', 'dotted' ),
				'section'     => 'styling',
				'default'     => '0',
				'priority'    => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'bg_ibody',
					  	'operator' => '==',
					  	'value'    => !0,
				 	),
				 	array(
					  	'setting'  => 'boxed',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'preload'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Preloader', 'dotted' ),
				'section'     => 'styling',
				'default'     => '1',
				'priority'    => 10,
			),
			'main_color'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Primary Color', 'dotted' ),
				'section'  => 'styling',
				'default'  => '#73c026',
				'priority' => 10,
			),
			'custom_css'     => array(
				'type'        => 'code',
				'label'       => esc_html__( 'Custom Code', 'dotted' ),
				'description' => esc_html__( 'Add more js, css, html... code here.', 'dotted' ),
				'section'     => 'styling',
				'default'     => '',
				'priority'    => 10,
			),
		),
	)
);