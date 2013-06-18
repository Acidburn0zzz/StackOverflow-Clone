<?php

class Provider extends Eloquent {

    protected $table = 'Providers';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}