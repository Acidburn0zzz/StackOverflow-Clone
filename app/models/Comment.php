<?php

class Comment extends Eloquent {

    protected $table = 'comments';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function post()
    {
        return $this->belongsTo('Post');
    }
}