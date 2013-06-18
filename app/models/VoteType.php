<?php

class VoteType extends Eloquent {

    protected $table = 'VoteTypes';

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