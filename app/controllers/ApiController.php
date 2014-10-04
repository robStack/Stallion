<?php

class ApiController extends \BaseController {
	
	public function getIndex(){
		return View::make('api.index');
	}

	
	public function getUser($id){
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

	public function postUser(){

	}

	public function deleteUser(){

	}

	public function putUser(){

	}
}