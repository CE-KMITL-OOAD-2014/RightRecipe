<?php 
class CommentController extends BaseController
{
	


	public function postcomment($id){
			$obj2=new Comment;
			$obj2->setScore(Input::get('score'));
			$obj2->setComment(Input::get('comment'));
			$obj2->setUserid(Auth::user()->id);
			$obj2->setRecipeid($id);
			$obj2->newComment();
			RecipeScore::saveAllScore();
			
		return Redirect::to('/recipe/show/'.$id);
	}


} ?>