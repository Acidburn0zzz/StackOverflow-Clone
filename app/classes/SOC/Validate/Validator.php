<?php namespace SOC\Validate;

abstract class Validator {

    protected $attributes;
    protected $errors;

    function __construct($attributes = null) 
    {
        $this->attributes = $attributes ?: \Jinput::all();
    }

    public function passes()
    {
        $validation = \Validator::make($this->attributes, static::$rules);

        if($validation->passes()) {
            return true;
        }
            
        $this->errors = $validation->messages();
    }

    public function getErrors()
    {
        return $this->errors;
    }

}
