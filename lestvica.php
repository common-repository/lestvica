<?php
/**
* Plugin Name: Lestvica SNL
* Plugin URI: https://wordpress.org/plugins/lestvica
* Description: Automatic update of 3. Slovenian soccer league standings.
* Version: 1.0
* Author: Marko Babič
* Author URI: http://www.moje-aplikacije.net
* License: GPLv2 or later
* Text Domain: lestvica
*/

if ( !defined( 'ABSPATH' ) ) exit;
 
class Lestvica_SNL_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'lestvica',  
            esc_html__( 'Lestvica', 'lestvica' ), 
            array( 'description' => esc_html__( 'Automatic update of 3. SNL zahod', 'lestvica' ), )
        );
    }

    public function widget( $args, $instance ) {
        require('inc/lestvica_sidebar_data.php');
        $instance_old = $instance;
        
        echo $args['before_widget'];
        if (!empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        require('inc/lestvica_sidebar.php');
        echo $args['after_widget'];        

    }

    public function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__( 'Lestvica 3. SNL zahod', 'lestvica' );
        $url = !empty($instance['url']) ? $instance['url'] : esc_html__( 'http://www.nzs.si/tekmovanja/?action=lestvica&id_menu=301', 'lestvica' );
        $update_rate = !empty($instance['update_rate']) ? $instance['update_rate'] : esc_html__( '1800', 'lestvica' );
        $last_update = !empty(get_option("lestvica_last_update")) ? get_option("lestvica_last_update") : esc_html__( 0, 'lestvica' );
        $highlighted_team = !empty($instance['highlighted_team']) ? $instance['highlighted_team'] : esc_html__( '', 'lestvica' );
        $highlight_color = !empty($instance['highlight_color']) ? $instance['highlight_color'] : esc_html__( '', 'lestvica' );
        $table_header_style = !empty($instance['table_header_style']) ? $instance['table_header_style'] : esc_html__( 'background-color: green; color: white; font-weight: bold;', 'lestvica' );
        require('inc/lestvica_admin_display.php');
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['url'] = (!empty($new_instance['url']) ) ? strip_tags( $new_instance['url'] ) : '';
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['update_rate'] = (!empty($new_instance['update_rate']) ) ? strip_tags( $new_instance['update_rate'] ) : '';
        $instance['highlighted_team'] =  (!empty($new_instance['highlighted_team']) ) ? strip_tags( $new_instance['highlighted_team'] ) : '';
        $instance['highlight_color'] = (!empty($new_instance['highlight_color']) ) ? strip_tags( $new_instance['highlight_color'] ) : '';
        $instance['table_header_style'] = (!empty($new_instance['table_header_style']) ) ? strip_tags( $new_instance['table_header_style'] ) : '';
        return $instance;
    }

} 

add_action( 'widgets_init', function(){
     register_widget( 'Lestvica_SNL_Widget' );
});