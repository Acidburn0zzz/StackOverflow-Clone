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
        return $this->belongsTo('User', 'id');
    }

    public function postType()
    {
        return $this->hasOne('PostType');
    }

    public function postHistory()
    {
        return $this->hasOne('PostHistory', 'post_id');
    }
    
    public function comments()
    {
        return $this->hasMany('Comment', 'post_id');
    }

    public function postTags()
    {
        return $this->hasMany('PostTag', 'post_id');
    }

    public function votes()
    {
        return $this->hasMany('Vote', 'post_id');
    }

    public function postFeedback()
    {
        return $this->hasMany('PostFeedback', 'post_id');
    }

    public function suggestedEdits()
    {
        return $this->hasMany('SuggestedEdit', 'post_id');
    }

}