<?php

class RestaurantsMarkerClass extends FLBuilderModule {

public function __construct()

{

  parent::__construct(array(

    'name' => __( 'Restaurants Marker', 'fl-builder' ),

    'description' => __( 'Helpful to find restaurants', 'fl-builder' ),

    'group' => __( 'My Group', 'fl-builder' ),

    'category' => __( 'My Category', 'fl-builder' ),

    'dir' => map_marker_DIR . 'restaurants-marker/',

    'url' => map_marker_URL . 'restaurants-marker/',

    'icon' => 'button.svg',

  ));

}

}

/**
 * Register the module.
 */

FLBuilder::register_module( 'RestaurantsMarkerClass', array(
  'general'       => array( // Tab
    'title'         => __('General', 'fl-builder'), // Tab title
    'sections'      => array( // Tab Sections
        'general'       => array( // Section
            'title'         => __('Google Map API', 'fl-builder'), // Section Title
            'fields'        => array( // Section Fields
                'text_field'     => array(
                    'type'          => 'text',
                    'label'         => __('Add API key for Google map', 'fl-builder'),
                    'default'       => '',
                    'placeholder'   => __('Enter API key', 'fl-builder'),
                    'preview'         => array(
                        'type'             => 'text',
                        'selector'         => '.map-textfield'
                    )
                  ),
            )
        )
    )
  )
            

) );

