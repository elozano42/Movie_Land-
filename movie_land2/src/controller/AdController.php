<?php

class AdController
{

    private $title;
    private $title2; 
    private $ad; 

    public function __construct()
    {
        $this->title = "Regarder en streaming...";
        $this->ad = ""; 
    }

    function manage()
    {
        include(__DIR__ . "./../view/ad.php");
    }
}
