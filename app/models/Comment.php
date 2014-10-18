<?php 
class Comment {
	private $id;
	private $comment;
	private $time;
	private $score;
	private $recipeId;
	private $userId;

	public function __constructor(){

	}

	public function save(){

	}

	public static function getById($allComment){

	}

	public static function getByRecipe($allComment,$recipeId){

	}
	

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Sets the value of id.
     *
     * @param mixed $id the id 
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of comment.
     *
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }
    
    /**
     * Sets the value of comment.
     *
     * @param mixed $comment the comment 
     *
     * @return self
     */
    private function _setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets the value of time.
     *
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }
    
    /**
     * Sets the value of time.
     *
     * @param mixed $time the time 
     *
     * @return self
     */
    private function _setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Gets the value of score.
     *
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }
    
    /**
     * Sets the value of score.
     *
     * @param mixed $score the score 
     *
     * @return self
     */
    private function _setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Gets the value of recipeId.
     *
     * @return mixed
     */
    public function getRecipeId()
    {
        return $this->recipeId;
    }
    
    /**
     * Sets the value of recipeId.
     *
     * @param mixed $recipeId the recipe id 
     *
     * @return self
     */
    private function _setRecipeId($recipeId)
    {
        $this->recipeId = $recipeId;

        return $this;
    }

    /**
     * Gets the value of userId.
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * Sets the value of userId.
     *
     * @param mixed $userId the user id 
     *
     * @return self
     */
    private function _setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}