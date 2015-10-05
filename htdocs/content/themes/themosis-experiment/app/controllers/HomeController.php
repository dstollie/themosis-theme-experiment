<?php

class HomeController extends BaseController
{
    public function kitchensink() {
        return View::make('kitchensink');
    }

    public function defaultPage() {
        return View::make('page');
    }

    public function defaultPost() {
        return View::make('single');
    }

    public function defaultArchive() {
//        $posts = PostModel::all();
        $posts = Post::all();

        return View::make('archive', [
            'posts' => $posts
        ]);
    }
}
