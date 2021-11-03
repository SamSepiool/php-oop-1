<?php

class Movie{

    // public $title;
    // public $year;
    // public $director;
    // public $language;
    // public $rating;
    private $infos;

    public function __construct($_infos)
    {
        $this-> infos['title']= $_infos["title"];
        $this-> infos['year']= $_infos["year"];
        $this-> infos['director']= $_infos["director"];
        $this-> infos['language']= $_infos["language"];
        $this-> infos['rating']= $_infos["rating"];

        // $this->title = $_title;
        // $this->year = $_year;
        // $this->director = $_director;
        // $this->language = $_language;
        // $this->rating = $_rating;
    }


    // SET
    function setTitle($_title) {
       if (is_string($_title)){
         $this->infos["title"] = $_title;
       } 
    }

    function setYear($_year) {
        if(is_numeric($_year)){
            $this->infos["year"] = $_year;
        }
    }

    function setDirector($_director) {
        if(is_string($_director)){
            $this->infos["director"] = $_director;
        }
    }

    function setLanguage($_language) {
        if ( is_string($_language) ) {
            $this->infos["language"] = $_language;
        }
    }

    function setRating($_rating) {
        if ( is_numeric($_rating) ) {
            $this->infos["rating"] = $_rating;
        }
    }




    // GET
    function getTitle() {
        return $this->infos["title"];
    }

    function getYear(){
        return $this->infos["year"];
    }

    function getDirector(){
        return $this->infos["director"];
    }

    function getLanguage(){
        return $this->infos["language"];
    }

    function getRating(){
        return $this->infos["rating"];
    }
   
    

}



?>