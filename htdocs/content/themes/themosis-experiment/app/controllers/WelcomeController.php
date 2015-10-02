<?php

use Themosis\Route\Controller;

class WelcomeController extends Controller
{
    public function index() {
        return View::make('welcome');
    }

}
