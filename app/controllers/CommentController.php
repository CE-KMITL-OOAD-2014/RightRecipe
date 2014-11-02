<?php 
class CommentController extends BaseController
{
	public function getcomment()
	{
		return View::make('Comment');
	}

	public function postcomment(){

		$obj=new Comment;
		
		$obj->setScore(Input::get('score'));
		//$obj->setComment(12333);
		$obj->setComment(Input::get('comment'));
		// $obj->userid=$this->userid;
		// $obj->recipeid=$this->recipeid;
		//$new->time=$this->time;
		$obj->setUserid('123');
		$obj->setRecipeid('123');
		$obj->newComment();



		
		//$obj->setStep(($obj->getIngredient())."\n".(Input::get('step')));
		// $obj->setUserid('123');
		// $obj->newRecipe();
					
		return View::make('Comment');
	}


} ?>