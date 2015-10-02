<?php

class HomeController extends BaseController
{
    public function kitchensink() {
        return View::make('kitchensink');
    }

    public function defaultPage() {
        return View::make('page');
    }
}
