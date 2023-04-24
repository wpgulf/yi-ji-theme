 <?php

/*
	
@package yijitheme
	

	
	========================
		FRONT-END ENQUEUE FUNCTIONS
	========================
*/

function wpgulf_load_scripts(){

	wp_enqueue_style( 'wpgulf', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all' );






	wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300,500' );
	wp_enqueue_style('raleway',"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
);


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '5.1.3', 'all' );
	wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '', 'all' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '8.4.3', 'all' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '8.4.3', 'all' );
	wp_enqueue_style( 'glight_box', get_template_directory_uri() . '/css/glightbox.min.css', array(), '', 'all' );






	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/js/jquery.js', false, '1.11.3', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap.bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'swiper_swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '8.4.3','',   );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array('jquery'), '1.5.0', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), '8.4.3', true );
	wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/js/glightbox.min.js', array('jquery'), '',  );


}
add_action( 'wp_enqueue_scripts', 'wpgulf_load_scripts' );















