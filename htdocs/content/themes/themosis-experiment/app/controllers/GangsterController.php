<?php

use Themosis\Route\Controller;

class GangsterController extends BaseController
{
    public function overview()
    {
//        $gangsters = GangsterModel::all();
        // This rule uses eloquent to get allt the posts of the 'gangsters' type which are published
        $gangsters = Post::type(GANGSTER_POST_TYPE)->status()->get();

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
