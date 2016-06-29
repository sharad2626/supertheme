<?php
	/* Custom Post for Home Page. */
	function create_post_type_for_slider() 
	{
		  register_post_type( 'sup_slider',
		  array(
		   'labels' => array(
			'name' => __( 'Home Page Slider' ),
			'id'   => 'sup_slider',
			'singular_name' => __( 'Home Page Slider' )
		   ),
		  'public' => true,
		  'has_archive' => true,
		  'supports'           => array( 'title', 'thumbnail', 'excerpt' )
		  )
		 );
	}
	add_action( 'init', 'create_post_type_for_slider' );
	/* End of Home Page Slider custom post */

	/* Creates custom post type for the Home Work you want to add */ 
	function create_post_type_for_work() 
	{
		  register_post_type( 'sup_work',
		  array(
		   'labels' => array(
			'name' => __( 'Works' ),
			'id'   => 'sup_work',
			'singular_name' => __( 'Work' ),
	
		   ),
		  'public' => true,
		  'has_archive' => true,
		  'supports'       => array( 'title', 'editor',  'thumbnail', 'excerpt'  )
		  )
		 );

		// Create a category for work
		  register_taxonomy(
			'work-category',
			'sup_work',
					array(
						'label' => __( 'Work Category' ),
						'rewrite' => array( 'slug' => 'work-category' ),
						'hierarchical' => true,
					)
				);
	}
	add_action( 'init', 'create_post_type_for_work' );
	/* End of Works custom post */

	/* Creates custom post type for the Services*/ 
	function create_post_type_for_services() 
	{
		  register_post_type( 'sup_service',
		  array(
		   'labels' => array(
			'name' => __( 'Services' ),
			'id'   => 'sup_service',
			'singular_name' => __( 'Service' )
		   ),
		  'public' => true,
		  'has_archive' => true,
		  'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' , 'custom-fields' )
		  )
		 );
		
		// Create a category for services.
		  register_taxonomy(
			'service-category',
			'sup_service',
					array(
						'label' => __( 'Service Category' ),
						'rewrite' => array( 'slug' => 'service-category' ),
						'hierarchical' => true,
					)
				);
	}
	add_action( 'init', 'create_post_type_for_services' );

	// Create Acustom post type for Our Team.
	function custom_post_type()
	{
	  /*Create a custom post For OUR Team About Us page*/
		register_post_type( 'acme_ourteam',
		 array(
					   'labels' => array(
						'name' => __( 'Our Team' ),
						'id'   => 'acme_ourteam',
						'singular_name' => __( 'Our Team' )
				   ),
			  'public' => true,
			  'has_archive' => true,
			  'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt'  )
			  ) 
		  );
			
		/*Create a custom post For OUR CLIENTS slider on About Us page*/
		  register_post_type( 'acme_ourclient',
			 array(
						   'labels' => array(
							'name' => __( 'Our Client Slider' ),
							'id'   => 'acme_ourclient',
							'singular_name' => __( 'Our Client Slider' )
					   ),
				  'public' => true,
				  'has_archive' => true,
				  'supports'           => array( 'title', 'thumbnail', 'excerpt'  )
				  ) 
			  );


	}add_action( 'init', 'custom_post_type' );



	/* Creates custom post type for the Our Vision */ 
	function create_post_type_for_ourvision() 
	{
		  register_post_type( 'acme_ourvision',
		  array(
		   'labels' => array(
			'name' => __( 'Our Vision' ),
			'id'   => 'our_vision',
			'singular_name' => __( 'our_vision' )
		   ),
		  'public' => true,
		  'has_archive' => true,
		  'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' )
		  )
		 );
	}
	add_action( 'init', 'create_post_type_for_ourvision' );
	
	/* Create custom post type for portfolio */
	function create_post_type_for_portfolio() 
	{
		  register_post_type( 'sup_portfolio',
		  array(
		   'labels' => array(
			'name' => __( 'Portfolio' ),
			'id'   => 'sup_portfolio',
			'singular_name' => __( 'Portfolio' )
		   ),
		  'public' => true,
		  'has_archive' => true,
		  'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' , 'custom-fields' )
		  )
		 );
		
		// Create a category for portfolio.
		  register_taxonomy(
			'portfolio-category',
			'sup_portfolio',
					array(
						'label' => __( 'Portfolio Category' ),
						'rewrite' => array( 'slug' => 'portfolio-category' ),
						'hierarchical' => true,
					)
				);
	}
	add_action( 'init', 'create_post_type_for_portfolio' );

?>
