<?php
    class Recipe{

        private $name;
        private $id;
        private $category;
        private $ingredient;
        private $capacity;
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

       
        public function getIngredient(){
            
           
            return explode(",",$this->ingredient);
        }

        public function getCapacity(){
            return explode(",",$this->capacity);
        }

        public function getStep(){

            return $this->step;
        }

         public function getUserId(){
            return $this->userid;
        }
        
         public function getImage(){
            return $this->image;
        }

        public function setName($value){
            $this->name=$value;
        }
        
       

        public function setIngredient($value){
            $this->ingredient=implode($value,",");
        }

         public function setCapacity($data){
            $this->capacity=implode($data,",");
        }

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
            $new->ingredient= implode($this->getIngredient(),",");
            $new->capacity=implode($this->getCapacity(),",");
            $new->step=$this->step;
            $new->userid=Auth::user()->id;
            $new->image=$this->image;
            $new->save();

        }

        public function editRecipe(){
            $edit=recipeEloquent::find($this->$id);
            $edit->name=$this->name;
            $edit->categoryid=$this->category;
            $edit->step=$this->step;
            $edit->image=$this->image;
            $edit->save();
        }

        public function deleteRecipe(){
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
                $obj->category=$data[$i]->categoryid;
                $obj->ingredient=$data[$i]->ingredient;
                $obj->capacity=$data[$i]->capacity;
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
            $obj->category=$data->categoryid;
            $obj->ingredient=$data->ingredient;
            $obj->capacity=$data->capacity;
            $obj->step=$data->step;
            $obj->userid=$data->userid;
            $obj->image=$data->image;


            return $obj;
        }

        public static function getByUserId($userid){
            $data=recipeEloquent::where('userid',"=",$userid)->get();
            if($data==NULL){
                return NULL;
            }   
            
            $size=count($data);

            $recipe= array( );

            for($i=0;$i<$size;$i++){           
                $obj=new Recipe;
                $obj->id=$data[$i]->id;
                $obj->name=$data[$i]->name;
                $obj->category=$data[$i]->categoryid;
                $obj->ingredient=$data[$i]->ingredient;
                $obj->capacity=$data[$i]->capacity;
                $obj->step=$data[$i]->step;
                $obj->userid=$data[$i]->userid;
                $obj->image=$data[$i]->image;
                $recipe[$i]=$obj;
            }
            
            return $recipe;          
            
        }


    }