<?php
class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
		*Default preparation for each test
		*/
	public function setUp()
	{
		parent::setUp();

		$this->prepareFortest();
	}

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	/**
		*Migrate the database
		*/
	private function prepareFortest()
	{
		Artisan::call('migrate');
	}

	/*public function testNewRecipe(){
		//$recipeEloquent=$this->getMock('recipeEloquent')->method()


		//create new user
		$recipe=new Recipe;
		$recipe->setName('pizza');
		$recipe->setCategory('ต้ม'); 
		$recipe->setStep('ขั้นตอนมีดังนี้');
		$recipe->setImage('image');
		$recipe->newRecipe();
		//$user->password_confirmation="password";


		//user should not save
		$this->assertFalse($user->newUser());

		//save error
		$errors=$user->errors->all();

		//there should be 1 error
		$this->assertCount(1,$errors);

		//username error should be set
		$this->asserEquals($errors[0],"The username field is required");
	}*/

}
