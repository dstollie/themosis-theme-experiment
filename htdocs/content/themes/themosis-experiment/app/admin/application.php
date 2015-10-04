<?php

/**
 * application.php - Write your custom code below.
 */

function my_comment_form( $post_id ) {
    return "heyy";
}

add_action( "comment_form", "my_comment_form" );