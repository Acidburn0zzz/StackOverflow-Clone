<?php

class VoteType extends Eloquent {

    protected $table = 'vote_types';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function vote()
    {
        return $this->belongsTo('Vote');
    }
}