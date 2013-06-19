<?php

class Tag extends Eloquent {

    protected $table = 'tags';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function postTag()
    {
        return $this->belongsTo('PostTag');
    }
}