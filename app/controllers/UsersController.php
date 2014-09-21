<?php

class UsersController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function getIndex(){
		$users = User::all();
		return View::make('users.dashboard')->with('users', $users);
	}

	public function getCreate(){
		return View::make('users.create');
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
		    $user = new User;
		    $user->username = Input::get('username');
		    $user->email = Input::get('email');
		    $user->type = 'Integrant';
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 	$id_user = $user->id;
		 	$userProfile = new UserProfile;
		 	$userProfile->fullname = Input::get('fullname');
		 	$userProfile->website = Input::get('website');
		 	$userProfile->about = Input::get('about');
		 	$userProfile->id_user = $id_user;
		 	$userProfile->save();
		    $status = ['status' => 1, 'message' => 'Registro satisfactorio'];
		} else {
		    $status = ['status' => 0, 'message' => 'Se encontraron los siguientes errores', 'errores' => $validator->getMessageBag()->toArray()];
		}
		return Response::json($status);
	}
}
