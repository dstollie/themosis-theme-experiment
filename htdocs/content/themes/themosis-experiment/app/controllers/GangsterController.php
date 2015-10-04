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
        $gender = Meta::get($post->ID, 'gender')[0];

        return View::make('gangsters.single', [
            'gender' => $gender
        ]);
    }
}
