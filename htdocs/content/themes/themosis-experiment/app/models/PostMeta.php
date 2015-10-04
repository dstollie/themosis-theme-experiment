<?php

use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    protected $primaryKey = 'meta_id';

    public function getTable()
    {
        global $wpdb;
        return $wpdb->prefix . 'postmeta';
    }
}