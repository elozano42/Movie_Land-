<?php


class AllAdsController
{

    private $title;
    private $title2; 
    private $img; 
    private $model;
    private $adsList;

    public function __construct()
    {
        $this->title = "Liste des films";
        $this->model = new Model();
    }

    function manage()
    {
        $this->adsList = $this->model->getAllAds();
        include(__DIR__ . "./../view/ads.php");
    }
}
