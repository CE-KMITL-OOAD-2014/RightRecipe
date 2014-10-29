<?php 
class UserController extends BaseController
{
	public function getsignup()
	{
		return View::make('signup');
	}


	public function postsignup(){
		$user=new User;
		$user->setName(Input::get('username'));
		$user->setPassword(Hash::make(Input::get('password')));
		$user->setEmail(Input::get('email'));
		$user->newUser();
		return Response::make('user created');
	}
	public function getsignin()

	{
		if(!Auth::guest()){ return Redirect::to('/');}
		return View::make('signin');
	}
	public function postsignin(){
		$credentials=Input::only('username','password');
		if(Auth::attempt($credentials)){
			return Redirect::intended('/');
		}
		return Redirect::to('signin');
	}

	public function getsignout(){
		Auth::logout();
		return 'logout';
	}

	public function showuser()
	{
			$users=User::all();
			return View::make('user')->with('users',$users);
	}




} ?>