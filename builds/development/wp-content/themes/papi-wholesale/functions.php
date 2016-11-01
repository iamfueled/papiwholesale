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


<?php
// Add Variation Settings
add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );
// Save Variation Settings
add_action( 'woocommerce_save_product_variation', 'save_variation_settings_fields', 10, 2 );
/**
 * Create new fields for variations
 *
*/
function variation_settings_fields( $loop, $variation_data, $variation ) {
	woocommerce_wp_text_input( 
		array( 
			'id'          => '_color_code[' . $variation->ID . ']', 
			'label'       => __( 'Color Code', 'woocommerce' ), 
			'desc_tip'    => 'true',
			'description' => __( 'Enter the three digit color code here. No special characters. Field must be numbers.', 'woocommerce' ),
			'value'       => get_post_meta( $variation->ID, '_color_code', true ),
			'custom_attributes' => array(
							'step' 	=> 'any',
							'min'	=> '0'
						) 
		)
	);
}
/**
 * Save new fields for variations
 *
*/
function save_variation_settings_fields( $post_id ) {
	// Number Field
	$color_code = $_POST['_color_code'][ $post_id ];
	if( ! empty( $color_code ) ) {
		update_post_meta( $post_id, '_color_code', esc_attr( $color_code ) );
	}
}