<?php
if ( function_exists( 'kc_add_map' ) ) :
kc_add_map(
	array(
		'my-service' => array(
			'name'       => __( 'My Service', 'amz' ),
			'title'      => __( 'My Service', 'amz' ),
			'admin_view' => __( 'My Service', 'amz' ),
			'icon'       => 'sl-control-play',
			'category'   => 'amz Shortcode',
			'css_box'    => true,
			'params'     => array(
				'general' => array(
					array(
						'name'        => 'my_service_section_title',
						'label'       => __( 'Section Title', 'amz' ),
						'type'        => 'text',
						'description' => __( 'Enter Section Title', 'amz' ),
					),
					array(
						'type'        => 'group',
						'label'       => __( 'Services', 'amz' ),
						'name'        => 'my_services',
						'description' => __( 'Add A Services', 'amz' ),
						
						'params'      => array(
							array(
								'name'        => 'video_top_text',
								'label'       => __( 'Video Upper Text', 'amz' ),
								'type'        => 'text',
								'description' => __( 'This Will Show Up In Videos Head/Top', 'amz' ),
							),
							
							array(
								'name'        => 'video_url',
								'label'       => __( 'Youtube Video URL', 'amz' ),
								'type'        => 'text',
								'description' => __( 'Enter Youtube Video URL', 'amz' ),
							),
						)
					)
				),
				'styles'  => array(
					array(
						'name'  => 'my_service_styles',
						'label' => __( 'Styles', 'amz' ),
						'type'  => 'css',
					)
				)
			),
		),
	)
);
endif;