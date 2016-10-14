<?php
if ( !is_admin() ) { // instruction to only load if it is not the admin area
   // register your script location, dependencies and version
   wp_register_script('custom_script',
       get_bloginfo('stylesheet_directory') . '/js/custom_script.js',
       array('jquery'),
       '1.0' );

   // enqueue the script
   wp_enqueue_script('custom_script');
}
?>