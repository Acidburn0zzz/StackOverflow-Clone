<?php namespace SOC\Validate;

class Answer extends Validator {

    public static $rules = array(
        'post_id' => 'required|numeric',
        'answer'  => 'required|min:5|max:5000'
    );

}
