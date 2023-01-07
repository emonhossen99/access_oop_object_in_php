<?php

class SpecialPerson {
   var $Name;
   var $Age;
   var $Hobby;
   var $Work;



//    function MyNaming(){
//     return $this->Name."</br>".$this->Hobby;
//    }

    function setPerson($name,$age,$hobby,$work){
      $this->Name = $name; 
      $this->Age = $age;
      $this->Hobby = $hobby; 
      $this->Work = $work; 
    }
    function getPerson(){
        return $this ->Name."</br>".$this->Age."</br>".$this->Hobby."</br>".$this->Work;
    }
};
