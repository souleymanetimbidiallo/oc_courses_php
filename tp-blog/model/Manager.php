<?php

class Manager
{
    

    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=tp-blog;charset=utf8', 'root', '');
        return $db;
    }
}