<?php

use Themosis\Route\Controller;

class GangsterController extends BaseController
{
    public function overview()
    {
        $gangsters = GangsterModel::all();

        return View::make('gangsters.overview', ['gangsters' => $gangsters]);
    }

    public function single($post)
    {
        return View::make('gangsters.single');
    }
}
