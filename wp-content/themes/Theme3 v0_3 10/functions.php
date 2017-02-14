


<?php


function toasty_theme_styles() {
  
    wp_enqueue_style('bootstrap_css' , get_template_directory_uri() . '/css/bootstrap.min.css');
    
    wp_enqueue_style('style_css' , get_template_directory_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'toasty_theme_styles');








function toasty_theme_js() {
 
    wp_enqueue_script('bootstrap_js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), '', true);
    
    wp_enqueue_script('cbpAnimatedHeader_js' , get_template_directory_uri() . '/js/cbpAnimatedHeader.min.js' , array('jquery'), '', true);
    
    wp_enqueue_script('classie_js' , get_template_directory_uri() . '/js/classie.min.js' , array('jquery'), '', true);
    
    wp_enqueue_script('contact_me_js' , get_template_directory_uri() . '/js/contact_me.min.js' , array('jquery'), '', true);
    
    wp_enqueue_script('jqBootstrapValidation_js' , get_template_directory_uri() . '/js/jqBootstrapValidation_.min.js' , array('jquery'), '', true);
    
    wp_enqueue_script('jquery_easing_js' , get_template_directory_uri() . '/js/jquery.easing.min.js' , array('jquery'), '', true);
    
    wp_enqueue_script('toast_js' , get_template_directory_uri() . '/js/toast.js' , array('jquery'), '', true);
}


add_action('wp_enqueue_scripts', 'toasty_theme_js');


?>




