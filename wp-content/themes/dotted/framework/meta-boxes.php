<?php

/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */

function dotted_register_meta_boxes( $meta_boxes ) {

	$prefix = '_cmb_';
	$meta_boxes[] = array(

		'id'       => 'format_detail',

		'title'    => esc_html__( 'Format Details', 'dotted' ),

		'pages'    => array( 'post' ),

		'context'  => 'normal',

		'priority' => 'high',

		'autosave' => true,

		'fields'   => array(

			array(

				'name'             => esc_html__( 'Image', 'dotted' ),

				'id'               => $prefix . 'image',

				'type'             => 'image_advanced',

				'class'            => 'image',

				'max_file_uploads' => 1,

			),

			array(

				'name'  => esc_html__( 'Gallery', 'dotted' ),

				'id'    => $prefix . 'images',

				'type'  => 'image_advanced',

				'class' => 'gallery',

			),			

			array(

				'name'  => esc_html__( 'Audio', 'dotted' ),

				'id'    => $prefix . 'link_audio',

				'type'  => 'oembed',

				'cols'  => 20,

				'rows'  => 2,

				'class' => 'audio',

				'desc' => 'Ex: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',

			),

			array(

				'name'  => esc_html__( 'Video', 'dotted' ),

				'id'    => $prefix . 'link_video',

				'type'  => 'oembed',

				'cols'  => 20,

				'rows'  => 2,

				'class' => 'video',

				'desc' => 'Example: <b>http://www.youtube.com/watch?v=pbZzfZQQuro</b>',

			),			

		),

	);

	$meta_boxes[] = array(
		'id'       => 'page_settings',
		'title'    => esc_html__( 'Projects Settings', 'dotted' ),
		'pages'    => array( 'portfolio' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(

				'name'  => esc_html__( 'Video Popup Link', 'dotted' ),

				'id'    => $prefix . 'popup_video',

				'type'  => 'oembed',

				'cols'  => 20,

				'rows'  => 2,

				'class' => 'video',

				'desc' => 'Example: <b>http://www.youtube.com/watch?v=pbZzfZQQuro</b>',

			),	    		
		),

	);


	$meta_boxes[] = array(
		'id'         => 'job_testimonial',
		'title'      => 'Testimonials Details',
		'pages'      => array( 'testimonial' ), // Post type
		'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
                'name' => 'Job',
                'desc' => 'Job of Person',
                'id'   => $prefix . 'job_testi',
                'type' => 'text',
            ),
		)
	);
	$meta_boxes[] = array(
		'id'         => 'team_detail',
		'title'      => 'Team Info',
		'pages'      => array( 'team' ), // Post type
		'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
                'name' => 'Job',
                'desc' => 'Job of Person',
                'id'   => $prefix . 'job_team',
                'type' => 'text',
            ),
            array(
				'name'  => 'Facebook',
				'desc'	=>	'Link of facebook',
				'id'    => $prefix . 'team_fb',
				'type'  => 'text',
			), 
			array(
				'name'  => 'Twitter',
				'desc'	=>	'Link of twitter',
				'id'    => $prefix . 'team_tt',
				'type'  => 'text',
			),  
			array(
				'name'  => 'Linkedin',
				'desc'	=>	'Link of linkedin',
				'id'    => $prefix . 'team_li',
				'type'  => 'text',
			), 
			array(
				'name'  => 'Google+',
				'desc'	=>	'Link of google plus',
				'id'    => $prefix . 'team_gg',
				'type'  => 'text',
			),
			array(
				'name'  => 'Instagram',
				'desc'	=>	'Link of instagram',
				'id'    => $prefix . 'team_in',
				'type'  => 'text',
			),
			array(
				'name'  => 'Youtube',
				'desc'	=>	'Link of youtube',
				'id'    => $prefix . 'team_yo',
				'type'  => 'text',
			),  
			array(
				'name'  => 'Dribbble',
				'desc'	=>	'Link of dribbble',
				'id'    => $prefix . 'team_dr',
				'type'  => 'text',
			),       
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dotted_register_meta_boxes' );

