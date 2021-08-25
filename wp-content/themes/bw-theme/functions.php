<?php
  

   function erketai_assets() {
   
   
       wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );
       
       wp_register_script('script.min', get_stylesheet_directory_uri().'/assets/js/script.min.js');
    wp_register_script('script', get_stylesheet_directory_uri().'/assets/js/script.js');
    wp_register_script('slider', get_stylesheet_directory_uri().'/assets/js/slider.js');
    

    wp_enqueue_script('script.min');
    wp_enqueue_script('script');
    wp_enqueue_script('slider');
   
       
   }
   
   add_action( 'wp_enqueue_scripts', 'erketai_assets' );


?>