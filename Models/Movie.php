<?php

class Movie{
            
     public $img;
     public $title;
     public $description;
     public $trama;

    
    public function __construct(string $_img,string $_title,string $_description,string $_trama)
    {
        $this-> img = $_img;
        $this-> title = $_title;
        $this-> description = $_description;
        $this-> trama = $_trama;
    }


public function getTrama(){
   
       return $this->trama ;
 
}
}


  


?>