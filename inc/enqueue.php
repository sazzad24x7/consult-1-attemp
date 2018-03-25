<?php 
function consult_cs_js(){
    wp_enqueue_style('flaticon',get_template_directory_uri().'/assets/css/flaticon.css',array(),'1.0.0','all');
    wp_enqueue_style('frontawesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'1.0.0','all');
    wp_enqueue_style('con_animation',get_template_directory_uri().'/assets/css/animate.css',array(),'1.0.0','all');
    wp_enqueue_style('con_animate',get_template_directory_uri().'/assets/css/text-animation.css',array(),'1.0.0','all');
    wp_enqueue_style('con_fancybox',get_template_directory_uri().'/assets/css/jquery.fancybox.min.css',array(),'1.0.0','all');
    wp_enqueue_style('con_fancybox_pop',get_template_directory_uri().'/assets/css/magnific-popup.min.css',array(),'1.0.0','all');
    wp_enqueue_style('con_carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0.0','all');
    wp_enqueue_style('con_revolution',get_template_directory_uri().'/rs-plugin/css/layers.css',array(),'1.0.0','all');
    wp_enqueue_style('con_revolution2',get_template_directory_uri().'/rs-plugin/css/settings.css',array(),'1.0.0','all');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0.0','all');
    wp_enqueue_style('plugins',get_template_directory_uri().'/assets/css/plugins.css',array(),'1.0.0','all');
    wp_enqueue_style('icons',get_template_directory_uri().'/assets/css/icons.css',array(),'1.0.0','all');
    wp_enqueue_style('menu-css',get_template_directory_uri().'/assets/css/menu-css.css',array(),'1.0.0','all');
    wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/main.css',array(),'1.0.0','all');
    wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0.0','all');
    
    
    
    //wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.min.js',array(),'1.0.0','true');
    wp_enqueue_script('modernizr',get_template_directory_uri().'/assets/js/modernizr.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('modernizr2',get_template_directory_uri().'/assets/js/waypoints.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('plugins-js',get_template_directory_uri().'/assets/js/plugins.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('scrollup-js',get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js',array('jquery'),'1.0.0','true');
   
    
    
    wp_enqueue_script('gmap-api','https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY');
    wp_enqueue_script('gmap-api2',get_template_directory_uri().'/assets/js/gmaps.js',array('jquery'),'1.0.0','false');
    
    
    wp_enqueue_script('fancybox-js',get_template_directory_uri().'/assets/js/jquery.fancybox.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('magnific-js',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('isotope-js',get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('counterup-js',get_template_directory_uri().'/assets/js/counterup.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('carousel-js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('wow-js',get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('lettering-js',get_template_directory_uri().'/assets/js/jquery.lettering.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('textillate-js',get_template_directory_uri().'/assets/js/jquery.textillate.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('mixitup-js',get_template_directory_uri().'/assets/js/mixitup.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('chart-js',get_template_directory_uri().'/assets/js/chart.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('chart-js2',get_template_directory_uri().'/assets/js/chart-active.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('chart-js2',get_template_directory_uri().'/assets/js/chart-active.js',array('jquery'),'1.0.0','true');
    
    wp_enqueue_script('revolution-js',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('revolution-js2',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js',array('jquery'),'1.0.0','true');
    
    
    wp_enqueue_script('slider-revolution',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution2',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution3',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution4',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution5',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution6',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution7',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js',array('jquery'),'1.0.0','true');
    wp_enqueue_script('slider-revolution8',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js',array('jquery'),'1.0.0','true');
    
    
    wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js',array('jquery'),'1.0.0','true');
}
add_action('wp_enqueue_scripts','consult_cs_js');
?>