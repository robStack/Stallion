<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $rules = array(
		'username' => 'required|min:5',
		'fullname'=>'required|min:10',
		'email'=>'required|email|unique:users',
		'about' => 'required|alpha|min:10',
		'password'=>'required|alpha_num|between:6,12|confirmed',
		'confirm-password'=>'required|alpha_num|between:6,12'
	);
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
