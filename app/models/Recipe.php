<?php
    class Recipe{

        private $name;
        private $id;
        private $category;
        private $step;
        private $userid;
        private $image;

        public function __constructor(){

        }

        public function getName(){
            return $this->name;
        }

        public function getId(){
            return $this->id;
        }

        public function getCategory(){
            return $this->category;
        }

        public function getStep(){
            return $this->step;
        }

         public function getUserid(){
            return $this->userid;
        }
        
         public function getImage(){
            return $this->image;
        }

        public function setName($value){
            $this->name=$value;
        }
        
        // public function setId($value){
        //     $this->id=$value;
        // }

        public function setCategory($value){
            $this->category=$value;
            
        }
        
        public function setStep($value){
            $this->step=$value;
        }

        public function setUserid($value){
            $this->userid=$value;
        }

        public function setImage($value){
            $this->image=$value;
        }



        public function newRecipe(){
            $new=new recipeEloquent;
            $new->name=$this->name;
            $new->categoryid=$this->category;
            $new->step=$this->step;
            $new->userid=$this->userid;
            $new->image=$this->image;
            $new->save();

        }

        public function edit(){
            $edit=recipeEloquent::find($this->id);
            $edit->name=$this->name;
            $edit->categoryid=$this->category;
            $edit->step=$this->step;
            $edit->image=$this->image;
            $edit->save();
        }

        public function delete(){
            $data=recipeEloquent::find($this->id);
            $data->delete();

        }




        public static function getAll(){
            $data=recipeEloquent::all();
            $size=count($data);


            $recipe= array( );

            for($i=0;$i<$size;$i++){           
                $obj=new Recipe;
                $obj->id=$data[$i]->id;
                $obj->name=$data[$i]->name;
                $obj->categoryid=$data[$i]->category;
                $obj->step=$data[$i]->step;
                $obj->userid=$data[$i]->userid;
                $obj->image=$data[$i]->image;
                $recipe[$i]=$obj;
            }
            
            return $recipe; 
        }

        public static function getById($id){
            $data=recipeEloquent::find($id);
           
             if($data==NULL){
                return NULL;
            }   
            $obj=new Recipe;
            $obj->id=$data->id;
            $obj->name=$data->name;
            $obj->categoryid=$data->category;
            $obj->step=$data->step;
            $obj->userid=$data->userid;
            $obj->image=$data->image;


            return $obj;
        }

        public static function getByUserId($userid){
            $data=recipeEloquent::where('userid','=',$userid)->get();
            if($data==NULL){
                return NULL;
            }   
            
            $size=count($data);

            $recipe= array( );

            for($i=0;$i<$size;$i++){           
                $obj=new Recipe;
                $obj->id=$data[$i]->id;
                $obj->name=$data[$i]->name;
                $obj->categoryid=$data[$i]->category;
                $obj->step=$data[$i]->step;
                $obj->userid=$data[$i]->userid;
                $obj->image=$data[$i]->image;
                $recipe[$i]=$obj;
            }
            
            return $recipe;          
            
        }


    }