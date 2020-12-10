<?php

class NewAdsController
{

    private $title;
    private $title2; 
    private $img; 
    private $model;

    public function __construct()
    {
        $this->title = "Ajoutez votre film";
        $this->model = new Model;
    }

    function manage()
    {
        if (isset($_POST['title']) and  $_POST['title'] != '') {
            $this->model->addNewAd($_POST['title'], $_POST['years'], $_POST['url']);
        }
        
        include(__DIR__ . "./../view/newAd.php");
    }
}
