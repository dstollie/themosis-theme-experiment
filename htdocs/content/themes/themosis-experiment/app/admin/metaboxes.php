<?php

// Define fields
$fields = array(
    Field::radio('gender', array('man', 'vrouw'), ['title' => __('Geslacht')]),
    Field::date('born', ['title' => __('Geboren op')]),
    Field::collection('piccas', array('limit' => 5, 'title' => __('De piccas van deze gangstah'))),
//    Field::infinite('books', array(
//        Field::text('title'),
//        Field::textarea('excerpt'),
//        Field::media('cover-image')
//    ))
);

// A metabox object is always returned in order to be able to chain methods.
Metabox::make(__('Gangstah details'), GANGSTER_POST_TYPE)->set($fields);