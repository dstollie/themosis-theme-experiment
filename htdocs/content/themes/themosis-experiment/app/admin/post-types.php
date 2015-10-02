<?php
/**
 * Created by PhpStorm.
 * User: dennisstolmeijer
 * Date: 02/10/15
 * Time: 14:23
 */

PostType::make('gangsters', 'Gangstahs', 'Gangstah')->set(array(

    'public'        => true,
    'menu_position' => 20,
    'supports'      => array('title', 'editor'),
    'rewrite'       => false,
    'query_var'     => false,
    'menu_icon'     => themosis_assets() . '/images/icon-gangster.png'

));