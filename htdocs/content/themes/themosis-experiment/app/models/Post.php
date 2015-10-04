<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent{

    protected $table = 'wp_posts';
    protected $primaryKey = 'ID';

}