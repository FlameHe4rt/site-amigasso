<?php

namespace model;

class Database{
    public static function connect(){
        include("config-db.php");
        return  new \PDO("mysql:host=".$config['host'].";dbname=".$config['database'].";charset=utf8",$config['user'],$config['pass']);
    }
}