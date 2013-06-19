<?php

class PostFeedback extends Eloquent {

    protected $table = 'post_feedback';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function post()
    {
        return $this->belongsTo('Post');
    }

    public function voteType()
    {
        return $this->hasOne('PostType', 'post_type_id');
    }
}