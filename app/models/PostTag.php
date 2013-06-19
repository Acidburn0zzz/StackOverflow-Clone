<?php

class PostTag extends Eloquent {

    protected $table = 'post_tags';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function post()
    {
        return $this->belongsTo('Post');
    }
    
    public function tag()
    {
        return $this->hasOne('Tag', 'tag_id');
    }
}