<?php

class SuggestEditVote extends Eloquent {

    protected $table = 'SuggestEditVotes';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function suggestedEdit()
    {
        return $this->belongsTo('SuggestedEdit');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}