<?php

/*
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('home', 'WelcomeController@index');

/**
 * Route for all pages which are attached to the "Kitchensink" page template.
 */

Route::get('template', array('kitchensink', 'uses' => 'HomeController@kitchensink'));

/**
 * Route for an overview of all the posts
 */
Route::get('single', array('all-posts', 'uses' => 'HomeController@defaultArchive'));

/**
 * Route for an overview of all the gangsters
 */
Route::get('singular', array(GANGSTER_POST_TYPE, 'uses' => 'GangsterController@single'));

/**
 * Route for an overview of all the gangsters
 */
Route::get('singular', 'HomeController@defaultPost');

/**
 * Route for the default pages
 */
Route::get('page', 'HomeController@defaultPage');

/**
 * Route for an overview of all the gangsters
 */
Route::get('postTypeArchive', array(GANGSTER_POST_TYPE, 'uses' => 'GangsterController@overview'));