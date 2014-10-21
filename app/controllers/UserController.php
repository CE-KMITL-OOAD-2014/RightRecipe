<?php 
class userController extends BaseController
{
	public function getsignup()
	{
		return View::make('Signup');
	}

	public function getsignin()
	{
		return View::make('signin');
	}

	public function postsignup(){
		$user=new User;
		$user->setName(Input::get('username'));
		$user->setPassword(Hash::make(Input::get('password')));
		$user->setEmail(Input::get('email'));
		$user->newUser();
		return Response::make('user created');
	}


} ?>