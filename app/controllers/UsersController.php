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

	public function postCreate()	{
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			sleep(3);
		    $user = new User;
		    $user->username = strtolower(Input::get('username'));
		    $user->email = Input::get('email');
		    $user->type = 'Integrant';
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 	$id_user = $user->id;
		 	$userProfile = new UserProfile;
		 	$userProfile->fullname = Input::get('fullname');
		 	$userProfile->website = Input::get('website');
		 	$userProfile->about = Input::get('about');
		 	$userProfile->id = $id_user;
		 	$userProfile->save();
		    $status = ['status' => 1, 'message' => '<img src="assets/img/addUser.png"><br /><p>Registro satisfactorio</p>'];
		} else {
		    $status = ['status' => 0, 'message' => 'Se encontraron los siguientes errores', 'errores' => $validator->getMessageBag()->toArray()];
		}
		return Response::json($status);
	}

	public function deleteDrop($id){
		$user = User::find($id);
		$userProfile = UserProfile::find($id);
		$userProfile->delete();
		$user->delete();		
		Session::flash('message', 'Usuario eliminado satisfactoriamente');
		return Redirect::to('users');
	}

	public function getProfile($id){
		$user = User::leftJoin('users_profile', function($join) {
			$join->on('users.id', '=', 'users_profile.id');
		})
		->where('users.id', $id)
		->first([
			'users.username AS userName',
			'users.email',
			'users.type AS typeUser',
			'users.avatar',
			'users_profile.fullname AS fullName',
			'users_profile.website',
			'users_profile.about'
		]);
		if($user){
			$status = ['status' => 1, 'mensaje' => $user];
		}
		else{
			$status = ['status' => 0, 'mensaje' => 'El usuario no existe'];
		}
		return Response::json($status);
	}
}
