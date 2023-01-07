<?php

class product {
    var $name ;
    var $price ;
    var $quntity ;
    var $total ;

    function setDetails($Name,$Price,$Quntity){
        $this -> name = $Name;
        $this -> price = $Price;
        $this -> quntity = $Quntity;
        $this -> total = $this -> price * $this -> quntity;
    }
    function getData(){
        return "Your Product Name : ".$this->name."</br>"."Your Product Price : ".$this->price."</br>"."Your Product Quntity : ".$this->quntity."</br>"."Your Product Total Price : ".$this->total."</br>";
    }
}


?>