<?php
class CommentController extends BaseController{
	public function showComment()
	{
		$comment=Comment::all();
		return View::make('Comment')->with('comments',$comment);
	}
	public function postComments(){
		$comment=new Comment;
		$comment->user=Input::get('user');
		$comment->feeling=Input::get('feeling');
		$comment->comment=Input::get('comment');
		$comment->save();
		return Redirect::to('/');
	}
}