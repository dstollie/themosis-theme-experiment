<?php


class UserMeta extends Model
{
    protected $primaryKey = 'meta_id';

    public function getTable()
    {
        global $wpdb;
        return $wpdb->prefix . 'usermeta';
    }
}