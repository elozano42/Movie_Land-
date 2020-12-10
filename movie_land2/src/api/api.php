<?php 

require("./../model/model.php"); 
require("./../service/BddAcces.php"); 

if(isset($_GET['getAds'])) {
    $model = new Model(); 
    $data = $model->getAllAds(); 

    echo  json_encode ($data); 
}