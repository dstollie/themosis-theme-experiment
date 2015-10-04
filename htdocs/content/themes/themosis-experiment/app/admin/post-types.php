<?php
/**
 * Created by PhpStorm.
 * User: dennisstolmeijer
 * Date: 02/10/15
 * Time: 14:23
 */

PostType::make(GANGSTER_POST_TYPE, 'Gangstahs', 'Gangstah')->set(array(
    'public'        => true,
    'menu_position' => 20,
    'supports'      => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon'     => themosis_assets() . '/images/icon-gangster.png',
    'has_archive'   => true
));

function connection_types() {
    p2p_register_connection_type( array(
        'name' => 'posts_to_gangsters',
        'from' => 'post',
        'to' => GANGSTER_POST_TYPE
    ) );
}
add_action( 'p2p_init', 'connection_types' );