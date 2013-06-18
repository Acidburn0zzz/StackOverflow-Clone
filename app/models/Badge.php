<?php

class Badge extends Eloquent {

    protected $table = 'Badges';

    protected $guarded = array();

    public static $rules = array();

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}