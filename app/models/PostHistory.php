<?php

class PostHistory extends Eloquent {

    protected $table = 'PostHistory';

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

    public function postHistoryType()
    {
        return $this->hasOne('PostHistoryType', 'PostHistoryTypeId');
    }
}