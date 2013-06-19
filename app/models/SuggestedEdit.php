<?php

class SuggestedEdit extends Eloquent {

    protected $table = 'suggested_edits';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function post()
    {
        return $this->belongsTo('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function suggestedEditVotes()
    {
        return $this->hasMany('SuggestedEditVote', 'suggested_edit_id');
    }
}