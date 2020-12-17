<?php

class HomeController
{

    private $title;
    private $title2; 

    public function __construct()
    {
        $this->title = "Movie Land";
        $this->title2 = "Tous mes films achetés"; 
    }

    function manage()
    {
        include(__DIR__ . "./../view/home.php");
    }
}


