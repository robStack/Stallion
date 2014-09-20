<?php

class UsersController extends BaseController {

	public function getIndex()
	{
		$users = User::all();
		return View::make('users.manageUsers')->with('users', $users);
	}

}
