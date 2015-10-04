<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;
    public function meta()
    {
        return $this->hasMany('UserMeta', 'user_id');
    }
}