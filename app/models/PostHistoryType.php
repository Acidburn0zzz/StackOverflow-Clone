<?php

class PostHistoryType extends Eloquent {

    protected $table = 'post_history_type';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function postHistory()
    {
        return $this->belongsTo('post_history');
    }
}