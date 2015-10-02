<?php

use Themosis\Route\Controller;

class GangsterController extends BaseController
{
    public function overview() {
        $gangsters = GangsterModel::all();
        td($gangsters);
        return View::make('gangsters.overview');
    }

    public function single() {
        return View::make('gangsters.single');
    }
}
