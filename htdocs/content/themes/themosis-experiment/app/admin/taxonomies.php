<?php
/**
 * Created by PhpStorm.
 * User: dennisstolmeijer
 * Date: 02/10/15
 * Time: 16:10
 */

Taxonomy::make(CARTEL_TAXONOMY, GANGSTER_POST_TYPE, __('Cartels'), __('Cartel'))->set(array(
    'public' => true
));