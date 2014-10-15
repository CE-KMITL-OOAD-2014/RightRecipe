<?php
class MyFirstController extends BaseController
{
	public function showFirst()
	{
		return View::make('first');
	}

	public function showSecond()
	{
		return View::make('second');
	}

	public function showForm()
	{
		return View::make('form');
	}
	public function showResult()
	{
		$data=Input::all();
		return "I submit {$data['foo']} & {$data['bar']}";
	}


}


