<?php

/**
 * Created by PhpStorm.
 * User: dennisstolmeijer
 * Date: 02/10/15
 * Time: 11:59
 */
class FoundationDocumentation_Widget extends WP_Widget
{

    public function __construct(){

        $params = array(

            'description'   => 'Widget to show the wordpress sidebar documentation',
            'name'          => 'Foundation Documentation'

        );

        parent::__construct('FoundationDocumentation_Widget', '', $params);

    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        echo View::make('widgets.foundation-documentation');
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }

}