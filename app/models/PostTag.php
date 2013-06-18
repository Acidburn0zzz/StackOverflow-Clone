<?php

class PostTag extends Eloquent {

    protected $table = 'PostTags';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function post()
    {
        return $this->belongsTo('Post', 'PostId');
    }
    
    public function tag()
    {
        return $this->hasOne('Tag', 'TagId');
    }
}