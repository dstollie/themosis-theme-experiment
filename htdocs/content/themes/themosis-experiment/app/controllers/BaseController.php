<?php

class BaseController extends Controller
{
    public function __construct() {
        Asset::add('foundation-css', 'bower/foundation/css/foundation.css', false, '1.0', 'all');
        Asset::add('foundation-js', 'bower/foundation/js/foundation.min.js', array('jquery'), '1.0', true);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
}
