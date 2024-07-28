<?php

class Connection{
    public function start(){
        try {
            return new PDO('mysql:host=localhost;dbname=todos', 'root', '');
        } catch (PDOException $error) {
            die($error->getMessage());
        };

    }


}