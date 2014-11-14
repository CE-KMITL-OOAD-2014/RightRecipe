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
		$file=Input::file('profileImage');
		$newfile=time().".".$file->guessExtension();
		
		$user->setImage($newfile);
		$file->move(app_path().'/../public/upload/profileImage/',$newfile);
		
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

	public function getindexuser()
	{		$obj1=new User;
			$obj2=new Recipe;
			$users=$obj1->getById(Auth::user()->id);
			$recipe=$obj2->getByUserId(Auth::user()->id);
			
			return View::make('user.indexProfile')->with(
				array("name"=>$users->getName(),
					  "email"=>$users->getEmail(),
					  "image"=>$users->getImage(),
					  "recipe"=>$recipe)
				);
	}

	public function getedituser()
	{		$obj1=new User;
			$obj2=new Recipe;
			$users=$obj1->getById(Auth::user()->id);
			$recipe=$obj2->getByUserId(Auth::user()->id);

			return View::make('user.editProfile')->with(array("name"=>$users->getName(),"password"=>$users->getPassword(),"email"=>$users->getEmail(),
																"recipe"=>$recipe));
	}

	public function postedituser(){
				
				$obj=new User;
				$user=$obj->getById(Auth::user()->id);

				$user->setName(Input::get("name"));

				$user->setEmail(Input::get("email"));
				
				if (Input::get("password")!=NULL) {
					$user->setPassword(Input::get('password'));
				}
				
				$user->editUser();
		
		return Redirect::to('/user/index/'.Auth::user()->id);
	}



} ?>