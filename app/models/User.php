<?php

	class User {

		private $id;
		private $username;
		private $password;
		private $email;
		private $image;


    public function getId()
    {
        return $this->id;
    }

   
    public function getName()
    {
        return $this->username;
    }
    
    public function setName($name)
    {
        $this->username = $name;
        
    }

    
    public function getPassword()
    {
        return $this->password;
    }
    
    
    public function setPassword($password)
    {
        $this->password = $password;
      
    }

    
    public function getEmail()
    {
        return $this->email;
    }
    
   
    public function setEmail($email)
    {
        $this->email = $email;
    }

    
    public function getImage()
    {
        return $this->image;
    }
    
   
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function newUser(){
    	$new=new userEloquent;
    	$new->username=$this->username;
    	$new->password=$this->password;
    	$new->email=$this->email;
    	$new->image=$this->image;
    	$new->save();
    }

    public static function getById($id){
    	$data=userEloquent::find($id);
    	if($data==NULL){
    		return NULL;
    	}

    	$obj=new User;
    	$obj->id=$data->id;
    	$obj->username=$data->username;
    	$obj->password=$data->password;
    	$obj->email=$data->email;
    	$obj->image=$data->image;

    	return $obj;

    }

    public function editUser(){
    	$edit=userEloquent::find($this->id);
    	$edit->username=$this->username;
    	$edit->password=$this->password;
    	$edit->email=$this->email;
    	$edit->image=$this->image;
    	$edit->save();
    }

}




  ?>