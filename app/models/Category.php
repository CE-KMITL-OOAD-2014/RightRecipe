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

    public static function getById($id)
    {
        $data= categoryEloquent::find($id);
         if($data==NULL){
                return NULL;
            }   
       
        $obj=new Category;
        $obj->setName($data->name);
        $obj->id=$data->id;
        return $obj;
    }

    

    public function newCategory(){
    	$obj=new categoryEloquent;
    	$obj->name=$this->name;
    	$obj->save();
    }



    }




 ?>