<?php 
class Comment {
	private $id;
	private $comment;
	private $time;
	private $score;
	private $recipeid;
	private $userid;

	public function __constructor(){

	}

	 public function getid()
    {
        return $this->id;
    }
    
     
    public function getComment()
    {
        return $this->comment;
    }
    
   
    public function setComment($comment)
    {
        $this->comment = $comment;

    }

    
    public function getTime()
    {
        return $this->time;
    }
    
   
    public function setTime($time)
    {
        $this->time = $time;

    }

   
    public function getScore()
    {
        return $this->score;
    }
    
   
    public function setScore($score)
    {
        $this->score = $score;

    }

   
    public function getRecipeid()
    {
        return $this->recipeid;
    }
    
   
    public function setRecipeid($recipeid)
    {
        $this->recipeid = $recipeid;

    }

   
    public function getUserid()
    {
        return $this->userid;
    }
    
    
    public function setUserid($userid)
    {
        $this->userid = $userid;

    }

	public function newComment(){
		$new=new commentEloquent;
		$new->score=$this->score;
		$new->comment=$this->comment;
		$new->userid=$this->userid;
		$new->recipeid=$this->recipeid;
		$new->time=$this->time;
		$new->save();
	}
	public function editComment(){
		$edit=commentEloquent::find($this->id);
        $edit->comment=$this->comment;
        $edit->time=$this->time;
        $edit->save();
	}

	public function deleteComment(){
		$data=commentEloquent::find($this->id);
		$data->delete();
	}

	public static function getById($id){
		$data=commentEloquent::find($id);
           
            if($data==NULL){
                return NULL;
            }   
            $obj=new Comment;
            $obj->id=$data->id;
            $obj->comment=$data->comment;
            $obj->score=$data->score;
            $obj->recipeid=$data->recipeid;
            $obj->userid=$data->userid;
            $obj->time=$data->time;

            return $obj;

	}

	public static function getByRecipe($recipeid){
		$data=commentEloquent::where('recipeid','=',$recipeid)->get();//find comment by id
		$size=count($data);
		if($data==NULL){
			return NULL;
		}

		
		$comment=array();

		for($i=0;$i<$size;$i++){
				$obj=new Comment;
				$obj->id=$data[$i]->id;
            	$obj->comment=$data[$i]->comment;
            	$obj->score=$data[$i]->score;
            	$obj->recipeid=$data[$i]->recipeid;
            	$obj->userid=$data[$i]->userid;
            	$obj->time=$data[$i]->time;
            	$comment[$i]=$obj;
		}
		return $comment;
	}

    public static function getAll(){
            $data=commentEloquent::all();
            $size=count($data);


            $comment= array( );

            for($i=0;$i<$size;$i++){           
                $obj=new Comment;
                $obj->id=$data[$i]->id;
                $obj->comment=$data[$i]->comment;
                $obj->score=$data[$i]->score;
                $obj->recipeid=$data[$i]->recipeid;
                $obj->userid=$data[$i]->userid;
                $obj->time=$data[$i]->time;
                $comment[$i]=$obj;
        }
        return $comment;
        }
	
    
 
   
}