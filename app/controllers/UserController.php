<?php 
class UserController extends BaseController
{
	public function getsignup()
	{
		return View::make('user.signup');
	}


	public function postsignup(){
		$user=new User;
		$user->setName(Input::get('username'));
		$user->setPassword(Hash::make(Input::get('password')));
		$user->setEmail(Input::get('email'));
		$user->newUser();
		return Redirect::to('signin');
	}
	public function getsignin()

	{
		if(Auth::check()){
			return Redirect::to('/');
		}
		return View::make('user.signin');
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
		 return Redirect::to('/');
	}

	public function showuser()
	{
			$name="PANG";
			$email="hotmail";
			return View::make('user.user')->with(array("name"=>$name,"email"=>$email));
	}




} ?>