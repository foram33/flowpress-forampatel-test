<?php 
/*

 * Plugin Name: Map Marker

 * Description: Custom modules for the Map Marker.

 * Version: 1.0

 * Author: Foram Patel

 */


define( 'map_marker_DIR', plugin_dir_path( __FILE__ ) );

define( 'map_marker_URL', plugins_url( '/', __FILE__ ) );

function map_with_marked_restaurants() {

  if ( class_exists( 'FLBuilder' ) ) {

    require_once 'restaurants-marker/restaurants-marker.php';

  }

}

add_action( 'init', 'map_with_marked_restaurants' );

?>