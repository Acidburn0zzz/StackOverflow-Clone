<?php

class Tag extends Eloquent {

    protected $table = 'Tags';

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