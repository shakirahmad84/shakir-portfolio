<?php

function theme_supports(){
   
   add_theme_support( 'post-thumbnails' ); 
   add_image_size( 'thumb_img', 900, 600, true );
   
}
add_action('after_setup_theme', 'theme_supports'); 