<?php

// Define fields
$fields = array(
    Field::radio('gender', array('man', 'vrouw'), ['title' => __('Geslacht')]),
    Field::collection('piccas', array('limit' => 5, 'title' => __('De piccas van deze gangstah')))
);

// A metabox object is always returned in order to be able to chain methods.
Metabox::make(__('Gangstah details'), GANGSTER_POST_TYPE)->set($fields);