<?php 

	class Category{
		private $id;
		private $name;



    public function getName()
    {
        return $this->name;
    }
    
   
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

   
    public function getId()
    {
        return $this->id;
    }
    

    public function newCategory(){
    	$obj=new categoryEloquent;
    	$obj->name=$this->name;
    	$obj->save();
    }



    }




 ?>