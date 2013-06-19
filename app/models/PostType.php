<?php

class PostType extends Eloquent {

    protected $table = 'post_types';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function post()
    {
        return $this->belongsTo('Post');
    }
}