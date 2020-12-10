<?php

class BddAcces
{
    private static $instance = null;
    private $handle;

    public function __construct()
    {

        $host = "localhost";
        $user = "root";
        $pswd = "";
        $dbName = "movies_land2";

        try {

            $this->handle = new PDO(
                "mysql:host=$host;dbname=movies_land2;charset=utf8",
                $user,
                $pswd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        }    catch (PDOException $e) {

            die('Echec de la connexion : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {

        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getHandle()
    {
        return $this->handle;
    }
}

