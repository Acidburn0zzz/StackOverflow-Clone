<?php

class Post extends Eloquent {

    protected $table = 'Posts';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongTo('User');
    }

    public function postType()
    {
        return $this->hasOne('PostType');
    }

    public function postHistory()
    {
        return $this->hasOne('PostHistory', 'PostId');
    }
    
    public function comments()
    {
        return $this->hasMany('Comment', 'PostId');
    }

    public function postTags()
    {
        return $this->hasMany('PostTag', 'PostId');
    }

    public function votes()
    {
        return $this->hasMany('Vote', 'PostId');
    }

    public function postFeedback()
    {
        return $this->hasMany('PostFeedback', 'PostId');
    }

    public function suggestedEdits()
    {
        return $this->hasMany('SuggestedEdit', 'PostId');
    }

}