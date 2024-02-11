<?php

class Database{

    public static $connection;

    public static function setUpConnection(){
        if(!isset(Database::$connection)){
            Database::$connection = new mysqli("localhost", "root", "Localaccount2005#", "viraj_db", "3306");
        }
    }

    // insert, update, delete process / "q" means query
    public static function iud($q){
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    // search process
    public static function search($q){
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}



?>