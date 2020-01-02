<?php
if ( function_exists( 'kc_add_map' ) ) :
kc_add_map(
	array(
		'client-rating' => array(
			'name'       => __( 'Client Rating', 'amz' ),
			'title'      => __( 'Client Rating', 'amz' ),
			'admin_view' => __( 'Client Rating', 'amz' ),
			'icon'       => 'et-pictures',
			'category'   => 'amz Shortcode',

			'css_box'    => true,
			'params'     => array(
				'general' => array(
					array(
						'name'        => 'client_rating_title',
						'label'       => __( 'Section Title', 'amz' ),
						'type'        => 'text',
						'description' => __( 'Enter Section Title', 'amz' ),
					),
					array(
						'type'        => 'group',
						'label'       => __( 'Reviews', 'amz' ),
						'name'        => 'amz_reviews',
						'description' => __( 'Add a Review', 'amz' ),
						
						'params'      => array(
							array(
								'name'        => 'client_name_who_rates',
								'label'       => __( 'Client Name Who Rates', 'amz' ),
								'type'        => 'text',
								'description' => __( 'Enter Client Who Rate This', 'amz' ),
							),
							array(
								'name'        => 'client_logo',
								'label'       => __( 'Client Company Logo', 'amz' ),
								'type'        => 'attach_image_url',
								'description' => __( 'Client Company Logo', 'amz' ),
							),
							array(
								'name'        => 'client_rating_text',
								'label'       => __( 'Client Review Text', 'amz' ),
								'type'        => 'textarea',
								'description' => __( 'Enter Review Text', 'amz' ),
							),
						)
					)
				),
				'styles'  => array(
					array(
						'name'  => 'client_rating_styles',
						'label' => __( 'Styles', 'amz' ),
						'type'  => 'css',
					)
				)
			),
		),
	)
);
endif;