<?<php
/*
Plugin Name: Cars
Plugin URL: 
Description: Plugin to store data about cars
Version: 
Author: Frances A
Textdomain: 
License: GPLv2

*/

/*register custom function */
add_action('init','create_car_data');


/*provide an implementation of the create_car_data function */
function create_car_data() {
    register_post_type( 'car_data',
        array(
            'labels' => array(
                'name' => 'Car Data',
                'singular_name' => 'Car Data',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Car data',
                'model' => 'Model',
                'model_item' => 'Car Model',
                'new_item' => 'New Car data',
                'color' => 'color',
                'color_item' => 'Car Color',
                'search_items' => 'Search Car data',
                'not_found' => 'No Car storage found',
                'not_found_in_trash' => 'No Car storage found in Trash',
                'parent' => 'Parent Car storage'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'model', 'color' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

/*Creating Meta Box Fields */

/*Register the Custom Function 
----registers a function to be called when the WordPress
 admin interface is visited--- */

add_action( 'admin_init', 'my_admin' );


/*Implement the Custom Function 
----registers a meta box and associates it with the 
Car Data custom post type*/

function my_admin() {
    add_meta_box( 'car_model_meta_box',
        'Car Model',
        'display_car_model_meta_box',
        'car_data', 'normal', 'high'
    );
}

function my_admin() {
    add_meta_box( 'car_color_meta_box',
        'Car color',
        'display_car_color_meta_box',
        'car_data', 'normal', 'high'
    );
}

?>

