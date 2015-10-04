<?php

class Model extends Illuminate\Database\Eloquent\Model
{
    /**
     * Get the table associated with the model.
     *
     * Append the WordPress table prefix with the table name if
     * no table name is provided
     *
     * @return string
     */
    public function getTable() {
        if ( isset( $this->table ) ) {
            return $this->table;
        }
        $table = str_replace( '\\', '', snake_case( str_plural( class_basename( $this ) ) ) );

        global $wpdb;

        return $wpdb->prefix . $table ;
    }
}