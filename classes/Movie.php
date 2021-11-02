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
    public function setTitle($_infos) {
        if ( is_string($_infos["title"]) ) {
            $this->infos["title"] = $_infos["title"];
        }
    }

    public function setYear($_infos) {
        if ( is_numeric($_infos["year"]) ) {
            $this->infos["year"] = $_infos["year"];
        }
    }

    public function setDirector($_infos) {
        if ( is_string($_infos["director"]) ) {
            $this->infos["director"] = $_infos["director"];
        }
    }

    public function setLanguage($_infos) {
        if ( is_string($_infos["language"]) ) {
            $this->infos["language"] = $_infos["language"];
        }
    }

    public function setRating($_infos) {
        if ( is_numeric($_infos["rating"]) ) {
            $this->infos["rating"] = $_infos["rating"];
        }
    }




    // GET
    function getInfo($value) {
        return $this->infos[$value];
    }

    // function getYear(){
    //     return $this->infos["year"];
    // }

    // function getDirector(){
    //     return $this->infos["director"];
    // }

    // function getLanguage(){
    //     return $this->infos["language"];
    // }

    // function getRating(){
    //     return $this->infos["rating"];
    // }
   
    

}



?>