<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Relationships
	 */
	public function posts()
	{
		return $this->hasMany('Post', 'UserId');
	}

	public function votes()
	{
		return $this->hasMany('Vote', 'UserId');
	}

	public function provider()
	{
		return $this->hasMany('Provider', 'UserId');
	}

	public function badges()
	{
		return $this->hasMany('Badge', 'OwnerUserId');
	}

	public function comment()
	{
		return $this->hasMany('Comment', 'UserId');
	}

	public function postHistory()
	{
		return $this->hasMany('PostHistory', 'UserId');
	}

	public function suggestedEdit()
	{
		return $this->hasMany('SuggestedEdit', 'OwnerUserId');
	}

	public function suggestedEditVote()
	{
		return $this->hasMany('suggestedEditVote', 'UserId');
	}

}