<?php 
class HomePageController extends BaseController
{
	public function showHomePage()
	{
		return View::make('HomePage');
	}


} ?>