<?php

class PostHistoryType extends Eloquent {

    protected $table = 'PostHistoryTypes';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function postHistory()
    {
        return $this->belongsTo('PostHistory');
    }
}