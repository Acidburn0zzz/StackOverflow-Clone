<?php

class SuggestedEditVote extends Eloquent {

    protected $table = 'suggested_edit_votes';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function suggestedEdit()
    {
        return $this->belongsTo('suggested_edit');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}