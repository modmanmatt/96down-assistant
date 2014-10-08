<?php 
/**
 * Register and enqueue the admin stylesheet
 * @since 2.0.0
 */
function dbfw_load_custom_admin_style( $hook ) {
    if( 'index.php' != $hook )
    	return;
	wp_register_style( 'custom_dbfw_admin_css', SO_DBFW_URI . 'css/style.css', false, SO_DBFW_VERSION );
	wp_enqueue_style( 'custom_dbfw_admin_css' );
}

//add a custom css change to hide wpmudev in the dashboard start
function change_css_hide_wpmu_dash()
{
    echo '<style type="text/css"> .wp-admin div.error {display: none !important;}</style>';
}
add_action('all_admin_notices', 'change_css_hide_wpmu_dash');
//add a custom css change to hide wpmudev in the dashboard end


// Remove WooCommerce Updater start
class woothemes_updater {
        public function __construct()
        {
        }

    }
global $woothemes_updater;
remove_action( 'admin_notices', array( $woothemes_updater, 'woothemes_updater_notice' ), 10 );
// Remove WooCommerce Updater end


// Remove IgniteWoo Updater start
class ignitewoo_updater {
        public function __construct()
        {
        }

    }
global $ignitewoo_updater;
remove_action( 'admin_notices', array( $ignitewoo_updater, 'ignitewoo_updater_notice' ), 10 );
// Remove IgniteWoo Updater finish

/** The End **/
?>