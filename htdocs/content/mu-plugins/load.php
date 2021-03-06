<?php
/*
Plugin Name: Mu-Plugins Loader
Description: Simple loader in order to run the Themosis framework core files.
Author: Julien Lambé
Version: 1.0
Author URI: http://framework.themosis.com/
*/
require_once(WPMU_PLUGIN_DIR.'/themosis-framework/themosis.php');

require_once(WPMU_PLUGIN_DIR.'/cleanup/cleanup.php');

require_once(WPMU_PLUGIN_DIR.'/impres/impres.php');

require_once(WPMU_PLUGIN_DIR.'/posts-to-posts/posts-to-posts.php');