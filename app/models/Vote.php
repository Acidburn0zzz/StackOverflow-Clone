<?php

class Vote extends Eloquent {

    protected $table = 'Votes';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    
    public function post()
    {
        return $this->belongsTo('Post', 'PostId');
    }

    public function user()
    {
        return $this->belongsTo('User', 'UserId');
    }
    
    public function voteType()
    {
        return $this->hasOne('VoteType');
    }
}