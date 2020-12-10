<?php 
require('src/controller/HomeController.php'); 
require('src/controller/AllAdsController.php');
require('src/controller/AdController.php'); 
require('src/controller/NewAdsController.php'); 
require('src/controller/SearchMovieController.php'); 
require('src/model/model.php'); 
require('src/service/BddAcces.php'); 

$page = filter_input (INPUT_GET, "page"); 
$route = array(
    "home" => HomeController::class, 
    "ads" => AllAdsController::class, 
    "ad" => AdController::class, 
    "newAd" => NewAdsController::class, 
    "search" =>SearchMovieController::class, 
); 


//Parcourir le tableau et créer une nouvelle class
foreach ($route as $routeValue => $className) {
    if ($page === $routeValue) {
        $controller = new $className; 
        $controller ->manage(); 
    break; 
    }
}
if (!isset($controller)) {
    $controller = new HomeController(); 
    $controller ->manage(); 
}