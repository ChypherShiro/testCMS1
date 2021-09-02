<?php
  

  add_action( 'wp_enqueue_scripts', 'erketai_assets' );

   function erketai_assets() {
   
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri(  ) . '/assets/js/jquery-3.5.1.min.js', false , null , true);
    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'slide', get_template_directory_uri(  ) . '/assets/js/slider.js', array('jquery'), null, 'footer' );
    wp_enqueue_script( 'swiper-script', get_template_directory_uri(  ) . '/assets/js/swiper-bundle.min.js', array('jquery'),false , null, 'footer' );
    wp_enqueue_script( 'script', get_template_directory_uri(  ) . '/assets/js/script.js', array('jquery' , 'swiper-script'), null, 'footer' );
    wp_enqueue_style( 'swiper-css', get_template_directory_uri(  ) . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style( 'main', get_stylesheet_uri(  ));
    
       
   }
   
  


?>