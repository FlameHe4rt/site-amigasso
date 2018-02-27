<?php

namespace model;

class Produtos{
    public function fetchLanches(){
        $pdo = Database::connect(); 
        $select = $pdo->prepare("SELECT * FROM sanduiches");
        $select->execute();
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }
}