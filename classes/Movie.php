<?php

class Movie{

    public $title;
    public $year;
    public $director;
    public $language;
    public $rating;

    public function __construct($_title, $_year, $_director, $_language, $_rating)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->language = $_language;
        $this->rating = $_rating;
    }

    public function setTitle($_title) {
        if ( is_string($_title) ) {
            $this->title = $_title;
        }
    }
    public function getTitle() {
        return $this->title;
    }
    

}



?>