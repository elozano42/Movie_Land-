<?php

class Model
{

    private $handle;

    public function __construct()
    {
        $db = BddAcces::getInstance();
        $this->handle = $db->getHandle();
    }


    //Ajouter un nouveau film//
    public function addNewAd($title, $years, $url)
    {
        try {

            $request = $this->handle->prepare('INSERT INTO movies (title, years, url_movie) 
                                                VALUES (?, ?, ?)');
            $request->execute(array(
                $title,
                $years,
                $url,
            ));
        } catch (PDOException $e) {
            var_dump('erreur lors de la requête SQL : ' . $e->getMessage());
        }
    }

    public function getAllAds()
    {
        try {
            $request = $this->handle->prepare('SELECT * FROM `movies`');
            $request->execute();

            $data = $request->fetchAll();

            return $data;
        } catch (PDOException $e) {
            var_dump('erreur lors de la requête SQL : ' . $e->getMessage());
        }
    }
}