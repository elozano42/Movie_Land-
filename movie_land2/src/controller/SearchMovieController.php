<?php

class SearchMovieController
{

    private $title;
    private $title2; 
    private $ad; 

    public function __construct()
    {
        $this->title = "Recherchez votre film";
    }

    function manage()
    {
        include(__DIR__ . "./../view/search.php");
    }
}
