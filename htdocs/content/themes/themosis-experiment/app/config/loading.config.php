<?php

return array(

    /**
     * Mapping for all classes without a namespace.
     * The key is the class name and the value is the
     * absolute path to your class file.
     *
     * Watch your commas...
     */
    // Controllers
    'BaseController'        => themosis_path('app').'controllers'.DS.'BaseController.php',
    'HomeController'        => themosis_path('app').'controllers'.DS.'HomeController.php',
    'WelcomeController'     => themosis_path('app').'controllers'.DS.'WelcomeController.php',
    'GangsterController'    => themosis_path('app').'controllers'.DS.'GangsterController.php',

    // Models
    'Model'                 => themosis_path('app').'models'.DS.'Model.php',
    'Post'                  => themosis_path('app').'models'.DS.'Post.php',
    'PostMeta'              => themosis_path('app').'models'.DS.'PostMeta.php',
    'Comment'               => themosis_path('app').'models'.DS.'Comment.php',
    'User'                  => themosis_path('app').'models'.DS.'User.php',
    'UserMeta'              => themosis_path('app').'models'.DS.'UserMeta.php',
    'PostModel'             => themosis_path('app').'models'.DS.'PostModel.php',
    'GangsterModel'         => themosis_path('app').'models'.DS.'GangsterModel.php',

    // Miscellaneous

);
