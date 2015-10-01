<?php

/*----------------------------------------------------*/
// Define your environments
/*----------------------------------------------------*/
return function()
{
    // Check if the server name contains .dev
    if (strpos($_SERVER['SERVER_NAME'], '.dev') !== false)
    {
        // Return the environment file slug name: .env.{$slug}.php
        return 'local';
    }

    // Else if no environment, it might be a production environment...
    return 'production';
};
